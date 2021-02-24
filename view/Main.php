<?php
namespace Module;
include_once '../config/Bootstrap.php';
use Module\Controller\ControllerUser;
use Module\Dao\DaoUser;
use Module\Entity\EntityUser;
$a = new ControllerUser();
$a->show();
