<?php

namespace App\Services;

class RsaService
{
    
    private static function mod_exp($base, $exponent, $modulus) {
        $result = 1;
        $base = $base % $modulus;
        while ($exponent > 0) {
            if ($exponent % 2 == 1) {
                $result = ($result * $base) % $modulus;
            }
            $exponent = $exponent >> 1;
            $base = ($base * $base) % $modulus;
        }
        return $result;
    }

    
    private static function mod_inv($a, $m) {
        $m0 = $m;
        $x0 = 0;
        $x1 = 1;
        while ($a > 1) {
            $q = intdiv($a, $m);
            $t = $m;
            $m = $a % $m;
            $a = $t;
            $t = $x0;
            $x0 = $x1 - $q * $x0;
            $x1 = $t;
        }
        if ($x1 < 0) {
            $x1 += $m0;
        }
        return $x1;
    }

    
    public static function encrypt($plaintext, $public_key) {
        list($e, $n) = $public_key;
        $ciphertext = "";
        $plaintext = str_split($plaintext, 1);
        foreach ($plaintext as $char) {
            $m = ord($char);
            $c = self::mod_exp($m, $e, $n);
            $ciphertext .= $c . " ";
        }
        return trim($ciphertext);
    }

    // Function to decrypt ciphertext using RSA
    public static function decrypt($ciphertext, $private_key) {
        list($d, $n) = $private_key;
        $plaintext = "";
        $ciphertext = explode(" ", $ciphertext);
        foreach ($ciphertext as $c) {
            $m = self::mod_exp($c, $d, $n);
            $plaintext .= chr($m);
        }
        return $plaintext;
    }
}
