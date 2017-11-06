<?php
    //require_once '../include.php';
    //require_once '../core/adminop.php';
    session_start();
    require_once 'sqlconn.php';
    require_once 'common.php';
    connect();

   //获取用户输入的用户名/密码/验证码
    $name=$_POST['user'];
    $pwd=($_POST['pwd']);
    $verify=$_POST['verify'];
    $verify1=$_SESSION['verify'];

   //检验用户名或密码是否为空
   if(empty($_POST['user'])){
    alertMes("用户名为空，请输入用户名","../login.html");
}
    if(empty($_POST['pwd'])){
    alertMes("密码为空，请输入密码","../login.html");
}
    //检验验证码是否正确
    if($verify==$verify1){
        $sql1="select *from customer where loginname='{$name}' and password='{$pwd}'";
        $res1=fetchOne($sql1,0);

        $sql2="select *from admin where name='{$name}' and password='{$pwd}'";
        $res2=fetchOne($sql2,0);
        
        if($res2['name']==$name&&$res2['password']==$pwd){
            
            header("location:../bookadmin/index.html");
        }elseif($res1['loginname']==$name&&$res1['password']==$pwd){  //检查用户输入的用户名/密码是否与数据库内存储的相同
            
          //  $_SESSION['user']=$name;
          setcookie('user',$name,time()+3600);
            setcookie('user',$name,time()+3600,'/');
            header("location:../index.html");
        }else{
             
            alertMes("登录失败，请重新登录","../login.html");
        }
    }else{
            alertMes("验证码错误","../login.html");
    } 
?>