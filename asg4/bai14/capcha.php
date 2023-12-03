<?php
session_start();
if(isset($_POST['submit'])){
    $input = $_POST['input'];
    if($input == $_SESSION['captcha'])
    $_SESSION['message'] = "* Right captcha !!!";
    else{
    $_SESSION['message'] = "* Wrong captcha !!!";
    }
    }
    ?>