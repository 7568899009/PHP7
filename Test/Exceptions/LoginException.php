<?php


namespace Exception\Test\Exceptions;
class LoginException extends \Exception
{
    public function LoginException()
    {
        $_SESSION['LOGIN_EXCEPTION'] = [
            'message' => $this->getMessage(),
            'line' => $this->getLine(),
            'file' => $this->getFile(),
            'code' => $this->getCode(),

        ];
    }
}