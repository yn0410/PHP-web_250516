<?php
session_start();

if($_POST['acc'] == 'admin' && $_POST['pw'] == '1234'){
    echo "登入成功";
    $_SESSION['login']=1; //此參數有被設置 表示登入成功，所以下面可不設置=0
    // header("location:login.php?login=1");
}else{
    echo "登入失敗";
    // $_SESSION['login']=0;
    // header("location:login.php?login=0");
}


?>