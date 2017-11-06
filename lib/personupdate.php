<?php
require_once 'sqlconn.php';
require_once 'common.php';
connect();

function person(){
    if(isset($_COOKIE['user'])){
    $sql_data=array();
    $sql_data=$_POST;
    $loginname=$_COOKIE['user'];
    // $truename=$_POST['truename'];
    // $address=$_POST['address'];
    // $zip=$_POST['zip'];
    // $phone=$_POST['phone'];
    update('customer',$sql_data," loginname='{$loginname}'");
    }else{
        alertMes("请先登录","../login.html");
    }
}
function password_edit(){
    if(isset($_COOKIE['user'])){
    $sql_data=array();
    $sql_data=$_POST;
    $loginname=$_COOKIE['user'];
    // $truename=$_POST['truename'];
    // $address=$_POST['address'];
    // $zip=$_POST['zip'];
    // $phone=$_POST['phone'];
    update('customer',$sql_data," loginname='{$loginname}'");

}else{alertMes("请先登录","../login.html");}
}


$type=$_GET['type'];
switch ($type) {
    case 1:
        person();
        break;
    case 2:
        password_edit();
        break;
}



?>