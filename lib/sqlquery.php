<?php
    require_once 'sqlconn.php';
    connect();
    session_start();
    //从数据库读取数据转化为json格式
   // echo $_SESSION['user'];
    //首页
function indexreadsql(){
    if(!isset($_COOKIE['user'])){
        setcookie('user','null');
    }
    $sql_data = array();
    $sql="select *from product limit 20";
    mysql_query('SET NAMES UTF8');
    $sql_data=fetcheAll($sql);
    $json_string=json_encode($sql_data);
    //file_put_contents('../json/indexdata.json', $json_string);
    echo $json_string;
}
    
    
    //首页读指定图片的相关数据，并进入图书购买页面
function indexreadOnesql(){
    $sql_data = array();
    $ID=$_GET['ID'];
    $sql="select *from product where ID={$ID}";
    mysql_query('SET NAMES UTF8');
    $sql_data=fetchOne($sql,0);
    //print_r($_GET);
    $json_string=json_encode($sql_data);
    echo $json_string;
}

 function sortprice(){
    $sql="select *from product where price between 0 and 20 limit 20";
    mysql_query('SET NAMES UTF8');
    $sql_data=fetcheAll($sql);
    $json_string=json_encode($sql_data);
    echo $json_string;
}


    //根据不同页面的传参来决定调用哪个函数
$type=$_GET['type'];
switch($type){
    case 1:
        indexreadsql();
        break;
    case 2:
        indexreadOnesql();
        break;
    case 4:
        sortprice();
        break;
}
?>
