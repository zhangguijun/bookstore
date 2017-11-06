<?php
header("content-type:text/html;charset=utf-8");
session_start();
define("ROOT",dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.get_include_path());
require_once 'sqlconn.php';
require_once 'cherkimage.php';
require_once 'common.php';
require_once 'cherkstring.php';
require_once 'page.php';
require_once 'adminop.php';
connect();
?>