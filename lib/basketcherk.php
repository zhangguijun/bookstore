<?php
require_once 'sqlconn.php';
connect();


//添加商品到订单表
function addShopping(){
    $productid=$_GET['ID'];
    if(isset($_COOKIE['user'])){  
         $name=$_COOKIE['user'];
        $sql2="insert into templeorder (productid,username) values ({$productid},'{$name}')";
        mysql_query($sql2);   
    }else{
        $sql="insert into templeorder (productid,username) values ({$productid},default)";
        mysql_query($sql);
    }

}

//从订单表中删除商品
function deleteShopping(){
    if(isset($_COOKIE['user'])){
        $productid=$_GET['ID'];
        delete("templeorder"," productid={$productid}");
    }else{
        $productid=$_GET['ID'];
        delete("templeorder"," productid={$productid}");
    }
}

//判断用户是否已经登录
function countmoney(){
    if(!isset($_COOKIE['user'])){
        header("location:../login.html");
    }else{
        $a=$_COOKIE['user'];
        echo "<script>alert('{$a}');</script>";
       header("location:../checkout.html");
    }
}
$type=$_GET['type'];
switch($type){
    case 1:
        addShopping();
        break;
    case 2:
        deleteShopping();
        break;
    case 3:
        countmoney();
        break;
}
?>