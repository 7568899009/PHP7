<?php


namespace Exception\Test\Exceptions;



class VerificationException extends \Exception
{
    public function VerificationException()
    {
        $_SESSION['VERIFICATION_EXCEPTION'] = [
            'message' => $this->getMessage(),
            'line' => $this->getLine(),
            'file' => $this->getFile(),
            'code' => $this->getCode(),
        ];
    }
}