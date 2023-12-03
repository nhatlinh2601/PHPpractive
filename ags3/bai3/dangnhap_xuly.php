<?php
    session_start();
    if(isset($_POST['login'])){
        include('connect.php');
        $name= $_POST['username'];
        $pass= $_POST['password'];
        $sl= "select * from users where Username='".$name."' and Password='".$pass."'";
        $result= mysqli_query($connect, $sl);
        $row= mysqli_fetch_assoc($result); // lay kq cua csdl (only 1 dong)
        $kt= mysqli_num_rows($result); // dung de lay so luong hang trong csdl
        if($kt>0){
                $_SESSION['username']= $name;
                $_SESSION['password']= $pass;
                // set $_cookie['username] va set $_cookie['password]
                if(isset($_POST['remember']) and ($_POST['remember']=="on")){
                    setcookie("username", $name, time() + 60);
                    setcookie("password", $pass, time() + 60);
                }
            echo "<script>alert('Login Successfull.');  
            location.href='trangquantriadmin.php';</script>"; // chuyen huong sang trang 'trangquantriadmin.php'
            echo "Chào bạn: ".$row['name']."<br>
            Pass của bạn là: ".$row['pass'];
        }
            else{
                echo "<script>alert('Login Failed.'); location.href='index.php';</script>";
            }
    }

    if(isset($_POST['cancel'])){
         echo "<script>location.href='index.php';</script>";
    }
?>
             
