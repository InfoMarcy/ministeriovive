<?php
require_once 'controladores/plantilla.controlador.php';
require_once "controladores/general.controlador.php";
require_once 'controladores/paypal.controlador.php';
require_once 'controladores/email.controlador.php';
// require_once 'vendor/phpmailer/phpmailer/autoload.php';
require_once 'PHPMailer/PHPMailerAutoload.php'; 

$plantilla =  new ControladorPlantilla();
$plantilla->ctrPlantilla();