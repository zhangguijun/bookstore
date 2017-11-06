<?php
    require_once 'sqlconn.php';
    require_once 'common.php';
    connect();
    session_start();

    // $name=$_POST['user'];
    // // $pwd=md5($_POST['pwd']);
    // // $email=$_POST['email'];
    // // $addr=$_POST['addr'];
    // $verify=$_POST['verify'];
    // $verify1=$_SESSION['verify'];
     
function registerck(){
     $regname=$_GET['regname'];  //鼠标blur获取用户名与数据库对比是否存在
    $sql="select *from customer where loginname='{$regname}'";
    $res=fetchOne($sql,0);
    if(isset($res['loginname'])){
        echo "<script>alert('用户名已存在，请重新输入！');history.go(-1);</script>";
    }
    else{
        echo "<script>alert('用户名可使用');</script>";
    }

}

function registerafter(){
    $name=$_POST['user'];
    $pwd=md5($_POST['pwd']);
    $email=$_POST['email'];
    $addr=$_POST['addr'];
    $verify=$_POST['verify'];
    $verify1=$_SESSION['verify'];
    //检验验证码是否正确
    if($verify==$verify1){

        $sql="insert into customer (loginname,password,email,addr) values ('{$name}','{$pwd}','{$email}','{$addr}')";
        mysql_query("SET NAMES UTF8");
        echo "<script>alert('{$sql}');</script>";
        mysql_query($sql);
        header("location:../login.html");

    }else{
            alertMes("验证码错误","../register.html");
    } 
}

$type=$_GET['type'];
switch($type){
    case 1:
        registerck();
        break;
    case 2:
        registerafter();
        break;
}



?>