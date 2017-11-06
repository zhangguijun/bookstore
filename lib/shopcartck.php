<?php
require_once 'sqlconn.php';
    connect();
    //检查数据库中是否有不存在用户名的商品信息
//  function userexistck(){
//      $sql="select *from templeorder where username='null'";
//      $sql_data=mysql_query($sql);
//      if($sql_data==null){
//          return 0;
//      }else{
//          $name=$_COOKIE['user'];
//          $sqll="update templeorder set username='{$name}' where username='null'";
//          mysql_query($sqll);
//          echo "<script>alert('success');</script>";
//          return 1;
//      }
//  }

 if(isset($_COOKIE['user'])){
        // userexistck();
         $loginname=$_COOKIE['user'];
         $sql1="select productid from templeorder where username = '{$loginname}'";
     }else{
         $sql1="select productid from templeorder where username='null'";
     }
     $sql_data1=mysql_query($sql1);
    $i=0;
    while($row=mysql_fetch_array($sql_data1)){
        $array[$i]=$row[0];
        $i++;
}
    for($j=0;$j<count($array),$j++){
        $productid=$array[$j];
        $sql2="select *from product where ID='{$productid}'";
        mysql_query('SET NAMES UTF8');
        $sql_data2=fetchOne($sql,0);
        $array2[$j]=$sql_data2;
    }
        $json_string=json_encode($array2);
        echo $json_string;




?>