<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_set_cookie_params(60*60*24, '/');
        session_start() ;

        if (!isset($_SESSION['count'])){
            $_SESSION['count'] =1;
        }
        else {
            $_SESSION['count']++;
        }
    ?>
    <?php echo 'ID SESSION: '. session_id() .'</br>' ?>
    <p>Số trang là: <?php echo  $_SESSION['count']  ?></p>
    <a href="previous.php">Next</a>
</body>
</html>
