<?php
    require_once 'sqlconn.php';
    require_once 'common.php';
    connect();

if(isset($_COOKIE['user'])){
    $name=$_COOKIE['user'];
    //$sql1="select productid from templeorder where username='hongrui'";
    $sql1="select productid from templeorder where username='{$name}'";
    $sql_data1=mysql_query($sql1);
    $i=0;
    while($row=mysql_fetch_array($sql_data1)){
        $array[$i]=$row[0];
        $i++;
}
    for($j=0;$j<count($array);$j++){
        $productid=$array[$j];
        $sql4="select price from product where ID='{$productid}'";
       
        $sql_data4=mysql_query($sql4);
        
        while($row3=mysql_fetch_array($sql_data4)){
        $sum=$row3[0];
}
        $sql2="insert into orderi (date,status,shipping,username,topay) values (default,1,'{$productid}','hongrui','{$sum}')";
        //mysql_query('SET NAMES UTF8');
        $sql_data2=mysql_query($sql2).mysql_error();
        //echo $sql_data2;
        $sql="select stock from product where ID='{$productid}'";
       
        $sql_data=mysql_query($sql);
        
        while($row1=mysql_fetch_array($sql_data)){
        $stock=$row1[0];
}
        $stock--;
        //echo $stock;
        $sql3="update product set stock='{$stock}' where ID='{$productid}'";
        mysql_query($sql3);
        //echo $sql2;
        //$array2[$j]=mysql_insert_id();;
    }
   // print_r($array2);
   
   alertMes("您的图书已整装待发，请耐心等耐~","../index.html");
}
else  alertMes("请您先登录!","../login.html");

?>