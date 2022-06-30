<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select db</title>
    <link href="css/personaloffice.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <?php

   include('includes/db_connect.php');

   //print_r($_POST);
   //echo "Maxim";
   $login=$_POST['login'];
   $password=$_POST['password'];

   //$count = mysqli_query($connection, "SELECT * FROM users WHERE 'login'='$login' AND 'password'='$password'");
   $count = mysqli_query($connection, "SELECT 'login' 'password' FROM users WHERE login = $login AND password = $password");
   
   //echo 999;
   //echo $count;
   //echo mysqli_num_rows($count);
   //echo $login;

   if(mysqli_num_rows($count) == 0 ){
?>
       <div class="in">
<?php
       echo "Ви не ввійшли до власного кабінету";
?>
       <div class="submit_a_2">
           <a href="form_personaloffice.php">Спробуйте ще раз</a>
       </div>
       </div>
<?php
   } else{
?>
       <div class="in">
<?php
       echo "Привіт, ". $login;
       //$login_1 = $login;
       //echo "<a href="page_personaloffice.php">Ввійти на сторінку власного кабінету</a>";
       $sql_user = "INSERT INTO user (id,login,password) VALUES (1,$login,$password)";
       $result = mysqli_query($connection, $sql_user);
?>
       <div class="submit_a_2">
          <a href="page_personaloffice.php">Ввійти на сторінку власного кабінету</a>
        </div>
        </div>
<?php
   }
?>
</body>
</html>

