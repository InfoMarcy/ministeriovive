<?php
require_once 'controladores/plantilla.controlador.php';
require_once "controladores/general.controlador.php";
require_once 'controladores/paypal.controlador.php';
require_once 'controladores/email.controlador.php';

$plantilla =  new ControladorPlantilla();
$plantilla->ctrPlantilla();