<?php
namespace Exception\Test\Config;
//自定义异常类
class MyException extends \Exception
{

    public function init()
    {
        set_exception_handler([$this, 'MyExceptionhandler']);
    }

    public function MyExceptionhandler( $e)
    {
        if (method_exists($e, 'VerificationException')) {
            $e->VerificationException();
        }
        if (method_exists($e, 'LoginException')) {
            $e->LoginException();
        }

    }
}

(new MyException())->init();
