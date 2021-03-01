<?php


namespace Exception\Test\Service;

use Exception\Test\Exceptions\VerificationException;

class VerificationService
{
    private $code;

    /**
     * VerificationService constructor.
     * @param $code
     */
    public function __construct()
    {
        $this->code = $_POST['code'];
    }

    public function is_code()
    {
        //这种方式完全可以在前台进行 正则验证，现在是测试异常处理所以就简单使用
        if (strlen($this->code) > 6) {
            throw new VerificationException('验证码错误，长度错误');
        } else {
            echo "正确";
        }
    }


}
