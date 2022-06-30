<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сторінка власного кабінету користувача</title>
    <link href="css/personaloffice.css" rel="stylesheet" />
    <link href="css/personaloffice-registration.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <h1>Сторінка власного кабінету користувача</h1>

    <div class="submit_a_1">
        <a href="../index_personal.php">Повернутися на Головну сторінку</a>
    </div>

    <?php
    //echo $login_1;
    //include('select_form_personaloffice.php');
    include('includes/db_connect.php');

    //$count = mysqli_query($connection, "SELECT 'login' 'password' FROM user WHERE login = $login AND password = $password");
    //$count_1 = mysqli_query($connection, "SELECT 'login' 'password' FROM user WHERE $login = login AND $password = password");
    //$count = mysqli_query($connection, "SELECT 'login' 'password' FROM user");
    $count_1 = mysqli_query($connection, "SELECT * FROM user");
    
    //$count = mysqli_query($connection, "SELECT 'login' 'password' FROM users");
    //$count = mysqli_query($connection, "SELECT * FROM users WHERE login = $login");
    //$count = mysqli_query($connection, "SELECT * FROM users");

    //echo $count_1;

    $row = mysqli_fetch_array($count_1);
    //$row = mysql_fetch_row($count_1);

    //echo $row;

    echo "Привіт, ". $row["login"]. ".";
    //echo $login;
    //echo "Привіт". $login;
    //echo "Привіт". $_POST['login'];

    $login = $row["login"];
    $password = $row["password"];

    $result = mysqli_query($connection, "SELECT * FROM users WHERE login = $login AND password = $password");

    $row_1 = mysqli_fetch_array($result);
?>

    <h2>Особисті дані</h2>
<?php
    echo "Ваш логін: ". $row_1["login"]. ".<br>";
    echo "Ваше ім'я: ". $row_1["name"]. ".<br>";
    echo "Ваша фамілія: ". $row_1["surname"]. ".<br>";
    echo "Ваша пошта: ". $row_1["email"]. ".<br>";
    echo "Ваш телефон: ". $row_1["phone"]. ".<br>";
    echo "Ваш пароль: ". $row_1["password"]. ".<br>";
    
?>
    <h2>Магазин</h2>
       <h3>Кошик</h3>
       <h3>Попередні закази</h3>

    <h2>Блог</h2>
       <h3>Додати статтю</h3>
</body>
</html>