<?php
    setcookie('user',"null",time()-3600);
    setcookie('user',"null",time()-3600,'/');
    echo "<script>window.location='../index.html';</script>";
?>