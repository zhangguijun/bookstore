<?php
require_once 'sqlconn.php';
connect();

if(!isset($_COOKIE['user'])){
        echo "<script>alert('nihao！')</script>";
         $sql="select productid from templeorder where username='hongrui'";
         echo "<script>alert('{$sql}')</script>";
         $sql_data=mysql_query($sql);
         echo "<script>alert('{$sql_data}')</script>";
        //$row=array();
        // $row=mysql_fetch_row($sql_data);
        $i=0;
         while($row=mysql_fetch_array($sql_data)){
            $array[$i]=$row[0];
            $i++;
}
    print_r($array);
        //  print_r($row);
        // $sql_data1=$row;
        //  echo "<script>alert('{$sql_data1}')</script>";
        //  print_r($sql_data1);
     }else{
         echo "<script>alert('failed')</script>";
     }
?>