<?php
require_once 'sqlconn.php';
connect();

if(isset($_COOKIE['user']))
    echo "<script>alert('success');</script>";
else  {echo "<script>alert('failed');</script>";
print_r($_COOKIE['user']);}
$sql="insert into templeorder values (3,322,default)";
mysql_query($sql);
$sql1="select password from customer where loginname='hongrui'";
$result=fetcheAll($sql1);
print_r($result);
?>