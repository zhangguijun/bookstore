<?php
require_once 'sqlconn.php';
connect();

//获取不同的价格位置

function sortprice($low,$high){
    $sql="select *from product where price between 0 and 20 limit 20";
    mysql_query('SET NAMES UTF8');
    $sql_data=fetcheAll($sql);
    $json_string=json_encode($sql_data);
    echo $json_string;
}

function sortsale(){
    $sql="select *from product order by stock desc limit 20";
    mysql_query('SET NAMES UTF8');
    $sql_data=fetcheAll($sql);
    $json_string=json_encode($sql_data);
    echo $json_string;
}


?>