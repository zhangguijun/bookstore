<?php
require_once 'sqlconn.php';
require_once 'common.php';
connect();

$sql="select ID from product where productID = '围城'";
    mysql_query('SET NAMES UTF8');
    $sql_data=mysql_query($sql);
    $row=array();
    $row=mysql_fetch_row($sql_data);
    //echo $row;
    $ID=$row[0];
    if($sql_data==null){
        alertMes("不存在该图书，请您重新输入！","../index.html");
    }else{
        echo "<script>window.location='../single.html?id={$ID}';</script>";
    }
    
?>
