<?php
namespace Exception\Test\Controller;
use Exception\Test\Service\LoginService;

include 'boot.php';
(new LoginService())->boot();
