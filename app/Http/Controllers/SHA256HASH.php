<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SHA256HASH extends Controller
{
    public $K = [
        0x428a2f98, 0x71374491, 0xb5c0fbcf, 0xe9b5dba5, 
        0x3956c25b, 0x59f111f1, 0x923f82a4, 0xab1c5ed5,
        0xd807aa98, 0x12835b01, 0x243185be, 0x550c7dc3,
        0x72be5d74, 0x80deb1fe, 0x9bdc06a7, 0xc19bf174,
        0xe49b69c1, 0xefbe4786, 0x0fc19dc6, 0x240ca1cc,
        0x2de92c6f, 0x4a7484aa, 0x5cb0a9dc, 0x76f988da,
        0x983e5152, 0xa831c66d, 0xb00327c8, 0xbf597fc7, 
        0xc6e00bf3, 0xd5a79147, 0x06ca6351, 0x14292967, 
        0x27b70a85, 0x2e1b2138, 0x4d2c6dfc, 0x53380d13,
        0x650a7354, 0x766a0abb, 0x81c2c92e, 0x92722c85,
        0xa2bfe8a1, 0xa81a664b, 0xc24b8b70, 0xc76c51a3,
        0xd192e819, 0xd6990624, 0xf40e3585, 0x106aa070,
        0x19a4c116, 0x1e376c08, 0x2748774c, 0x34b0bcb5,
        0x391c0cb3, 0x4ed8aa4a, 0x5b9cca4f, 0x682e6ff3, 
        0x748f82ee, 0x78a5636f, 0x84c87814, 0x8cc70208,
        0x90befffa, 0xa4506ceb, 0xbef9a3f7, 0xc67178f2
    ];
    
    // Initial hash values
    public $H = [
        0x6a09e667, 0xbb67ae85, 0x3c6ef372, 0xa54ff53a,
        0x510e527f, 0x9b05688c, 0x1f83d9ab, 0x5be0cd19
    ];




        // Function to perform right rotation
        function rotr($x, $n) {
            return ($x >> $n) | ($x << (32 - $n));
        }
        
        // Function to perform right shift
        function shr($x, $n) {
            return ($x >> $n);
        }
        
        
        // Functions for SIGMA0 and SIGMA1
        function SIG0($x) {
            return ( $this->rotr($x, 2) ^  $this->rotr($x, 13) ^  $this->rotr($x, 22));
        }
        
        function SIG1($x) {
            return ( $this->rotr($x, 6) ^  $this->rotr($x, 11) ^  $this->rotr($x, 25));
        }
        
        // Functions for choice and majority
        function Ch($x, $y, $z) {
            return (($x & $y) ^ (~$x & $z));
        }
        
        function Maj($x, $y, $z) {
            return (($x & $y) ^ ($x & $z) ^ ($y & $z));
        }
        // Define constants K


        // Padding function
        public function padding($message) {

            $ml = strlen($message) * 8; // Message length in bits
            $message .= chr(0x80); // Append a single '1' bit
            $message .= str_repeat(chr(0), ((448 - ($ml + 8)) % 512) / 8); // Pad with zeros
            $message .= pack('Q*', $ml); // Append original message length in bits as a 64-bit big-endian integer
            return $message;
        }

        // Main hashing function
        public function ToHash($message) {
            $message =  $this->padding($message);
            $chunks = str_split($message, 64); // Break message into 512-bit chunks
            $this->H = array_map('intval', $this->H);

            foreach ($chunks as $chunk) {
                $W = []; // Message schedule
                $W = array_fill(0, 64, 0);
                $M = str_split($chunk, 4); // Break chunk into 32-bit words

                // Extend message schedule
                foreach ($M as $word) {
                    $W[] = unpack('N', $word)[1];
                }

                // Main loop
                $a =  $this->H[0];
                $b =  $this->H[1];
                $c =  $this->H[2];
                $d =  $this->H[3];
                $e =  $this->H[4];
                $f =  $this->H[5];
                $g =  $this->H[6];
                $h =  $this->H[7];

                for ($i = 0; $i < 64; $i++) {
                    $T1 = $h + $this->SIG1($e) + $this->Ch($e, $f, $g) + $this->K[$i] + $W[$i];
                    $T2 = $this->SIG0($a) + $this->Maj($a, $b, $c);
                    $h = $g;
                    $g = $f;
                    $f = $e;
                    $e = $d + $T1;
                    $d = $c;
                    $c = $b;
                    $b = $a;
                    $a = $T1 + $T2;
                }

                // Compute intermediate hash values
                $this->H[0] += $a;
                $this->H[1] += $b;
                $this->H[2] += $c;
                $this->H[3] += $d;
                $this->H[4] += $e;
                $this->H[5] += $f;
                $this->H[6] += $g;
                $this->H[7] += $h;
        

        }

            // Convert hash values to hexadecimal string
            $hash = '';
            foreach ($this->H as $val) {
                echo $val.'\n',
                $hash .= str_pad(dechex($val), 8, '0', STR_PAD_LEFT);
            }

            return $hash;
        }

        public function test ($message="helloworld"){
        $hashedMessage = $this->ToHash($message);
        echo "SHA-256 hash of '$message': $hashedMessage\n";
        return $hashedMessage;
        }

        public function HashMatch(){
            $hashedMessage = $this->ToHash('Hellworld');
            $storedMessage = $this->ToHash('Hellworld');
            if(strcmp($hashedMessage, $storedMessage) === 0){
                echo "matched";
            }
            else{
                echo "not matched";
            }
        }
}
