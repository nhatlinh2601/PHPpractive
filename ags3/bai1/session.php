<?php
    $time = 60*60*24;
    session_set_cookie_params($time, '/');
    session_start();


    if(!isset($_SESSION['name'])){
        $_SESSION['name'] = 'Vi';
        $_SESSION['age'] = 120;
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <p>ID session: <?php echo session_id(); ?></p>
    <p>Tên của bạn là: <?php echo $_SESSION['name']  ?></p>
    <p>Tuổi của bạn là: <?php echo $_SESSION['age'] ?></p>
    <a href="test_session.php">Click here!</a>
</body>
</html>
