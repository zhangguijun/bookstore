<?php
require_once 'sqlconn.php';
require_once 'common.php';
connect();

if(isset($_COOKIE['user'])){
    $loginname=$_COOKIE['user'];
    //$sql1="select productid from templeorder where username = 'hongrui'";
    $sql1="select productid from templeorder where username = '{$loginname}'";
    $sql_data1=mysql_query($sql1);
    $i=0;
    while($row=mysql_fetch_array($sql_data1)){
        $array[$i]=$row[0];
        $i++;
}
    for($j=0;$j<count($array);$j++){
        $productid=$array[$j];
        $sql2="select *from product where ID='{$productid}'";
        mysql_query('SET NAMES UTF8');
        $sql_data2=fetchOne($sql2,0);
        $array2[$j]=$sql_data2;
    }
        $json_string=json_encode($array2);
        echo $json_string;
}else{
    alert("请重新登录","../login.html");
}





?>