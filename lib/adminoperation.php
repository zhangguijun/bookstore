<?php
require_once "sqlconn.php";
connect();


//管理员操作添加新商品
function insertproduct(){
    $title=$_POST['title'];
    $group=$_POST['group'];
    $descp=$_POST['descp'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $addr1=$_POST['addr1'];
    $addr2=$_POST['addr2'];
    $addr3=$_POST['addr3'];
    $addr4=$_POST['addr4'];
    //$array=$_POST;
    $sql="insert into product (productID,catid,description,price,stock,imageaddr,imageaddra,imageaddrb,imageaddrc) values ('{$title}','{$group}','{$descp}','{$price}','{$stock}','{$addr1}','{$addr2}','{$addr3}','{$addr4}')";
    mysql_query($sql);
    echo mysql_error();
    //echo "<script>alert('{$array}！');</script>";
    //echo "<script>history.go(-1);</script>";
}


//管理员操作删除商品
function deleteproduct(){
    $productid=$_GET['ID'];    //通过ajax获取不同商品的ID进行删除商品
    delete("product",$productid);
    echo "<script>alert('删除成功！');</script>";
}


//管理员操作更新商品信息
function updateproduct(){

}

//管理员查找商品信息
function selectproduct(){

}

$type=$_GET['type'];
switch($type){
    case 1:
        insertproduct();
        break;
    case 2:
        deleteproduct();
        break;
    case 3:
        updateproduct();
        break;
    case 4:
        selectproduct();
        break;
}


?>