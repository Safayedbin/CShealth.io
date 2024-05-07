<?php

namespace App\Helper;

class Logger
{
    private $logFile;

    public function __construct($logFile)
    {
        $this->logFile = $logFile;
    }

    public function log($level, $message)
    {
        $timestamp = date('Y-m-d H:i:s');
        $formattedMessage = "[$timestamp] [$level]: $message\n";
        file_put_contents($this->logFile, $formattedMessage, FILE_APPEND);
    }

    public function info($message)
    {
        $this->log('INFO', $message);
    }

    public function error($message)
    {
        $this->log('ERROR', $message);
    }

    public function warning($message)
    {
        $this->log('WARNING', $message);
    }
}
