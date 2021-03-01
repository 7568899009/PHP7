<?php
namespace Exception\Test\Controller;
include 'boot.php';
(new \Exception\Test\Service\VerificationService())->is_code();
