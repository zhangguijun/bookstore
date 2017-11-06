<?php
require_once '../lib/sqlconn.php';
require_once '../lib/common.php';
function checkAdmin($sql){
    return fetchOne($sql);
    }
function checkLogined(){
    if($_SESSION['adminId']==""){
        alertMes("请先登录","login.html");
    }
}
?>