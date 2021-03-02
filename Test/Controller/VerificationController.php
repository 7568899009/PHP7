<?php
namespace Exception\Test\Controller;
use Exception\Test\Service\VerificationService;
include 'boot.php';
(new VerificationService())->is_code();
