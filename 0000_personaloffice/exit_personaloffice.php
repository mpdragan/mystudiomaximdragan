<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вихід із власного кабінету</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
    <link href="css/personaloffice-registration.css" rel="stylesheet" />
</head>
<body>
    <?php
    include('includes/db_connect.php');
    // очистити user. перейти на головну сторінку.
    $count_1 = mysqli_query($connection, "DELETE FROM user");
    //echo mysqli_num_rows($count_1);
    $count_1 = mysqli_real_escape_string($connection, $count_1);
    if(mysqli_num_rows($count_1) == 0){
      echo "Ви успішно вийшли із власного кабінету";
    } else{
      echo "Ви не вийшли із власного кабінету";
    }
    ?>
    <div class="submit_a_1">
        <a href="../index.html">Повернутися на Головну сторінку</a>
    </div>
</body>
</html>