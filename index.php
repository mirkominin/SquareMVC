<?php
// reportera fel under utveckling
error_reporting(E_ALL);
// Definiera Paths som jag kommer att anväda genom ramverket

// first mappen dä finns mina filer
define('SERVER_ROOT', dirname(realpath(__FILE__)).'/');
define('SITE_ROOT' , 'http://www.student.bth.se/~mimi11/Mom4_Login/index.php?');


// kr革a router.php f嗷 att tolka servern beg較an 
require_once(SERVER_ROOT . 'config/' .'square.php');
require_once(SERVER_ROOT . 'models/' .'database.php');

$db = Database_Model::getInstance();

