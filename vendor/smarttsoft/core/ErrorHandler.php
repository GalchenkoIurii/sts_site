<?php

namespace smarttsoft;


class ErrorHandler
{
    public function __construct()
    {
        if(DEBUG){
            error_reporting(-1);
        }else{
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($e){

    }

    protected function logErrors($message = '', $file = '', $line = ''){

    }

    protected function displayError($errno, $errstr, $errfile, $errline, $responce = 404){
        
    }
}