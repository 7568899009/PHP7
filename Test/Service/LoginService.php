<?php

namespace Exception\Test\Service;
use \Exception\Test\Exceptions\LoginException;

class LoginService
{
    //用户名
    private $user;
    //密码
    private $password;

    /**
     * LoginService constructor.
     * @param $user
     * @param $password
     */
    public function __construct()
    {
        $this->user = $_POST['user'];
        $this->password = $_POST['password'];

    }

    public function boot()
    {
     $this->login();
    }
    protected function login()
    {
        //假装连接数据库
        if ($this->user == 'eriw' && $this->password == '123') {
            echo "登录成功";
        } else {
              throw new LoginException('用户名or密码不正确',403);
        }

    }


}


