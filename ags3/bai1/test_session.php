<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test session</title>
</head>
<body>
    <?php session_start() ?>
    <p>ID session: <?php echo session_id() ?></p>
    <p>Chào bạn <?php echo  $_SESSION['name']?>, ban co tuoi la: <?php echo  $_SESSION['age'] ?></p>
    <a href="huy_session.php">Huy session</a>
</body>
</html>