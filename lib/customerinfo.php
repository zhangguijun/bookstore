<?php
require_once 'sqlconn.php';
connect();


if(!isset($_COOKIE['user'])){
        setcookie('user','null');
    }
    $sql_data = array();
    $sql="select *from customer";
    mysql_query('SET NAMES UTF8');
    $sql_data=fetcheAll($sql);
    $json_string=json_encode($sql_data);
    //file_put_contents('../json/indexdata.json', $json_string);
    echo $json_string;



?>