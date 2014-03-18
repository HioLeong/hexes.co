<?php
error_reporting(E_ALL);
$site_path = '../app/';
define('__SITE_PATH', $site_path);

include __SITE_PATH.'includes/init.php';
session_start();
$registry->router = new router($registry);
$registry->router->setPath(__SITE_PATH . 'controller');

/*** load up the template ***/
$registry->template = new template($registry);

/*** load the controller ***/
$registry->router->loader();
?>
