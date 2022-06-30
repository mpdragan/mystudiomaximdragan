<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert db</title>
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
   
   //echo 1111;

   include('includes/db_connect.php');

   //print_r($_POST);
   $login=$_POST['login'];
   $name=$_POST['name'];
   $surname=$_POST['surname'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $password=$_POST['password'];
   $repeat_password=$_POST['repeat_password'];

   //echo $login;

   //$count = mysqli_query($connection, "SELECT * FROM users WHERE 'login'='$login' AND 'password'='$password'");

   //if(mysqli_num_rows($count) == 0 ){
   //    echo "Вы не зарегистрированы";
   //} else{
   //    echo "Привет". $login;
   //}

   $sql = "INSERT INTO users (login,name,surname,email,phone,password,repeat_password) VALUES ($login,$name,$surname,$email,$phone,$password,$repeat_password)";
   $result = mysqli_query($connection, $sql);

   //echo $result;
   //echo 3333;
   // Ви успішно зареєструвалися

    if ($result){
      //echo "Привіт, ". $login. ".<br>";
?>
    <div class="registration">
<?php       
      echo "Привіт, ". $login. ".<br>"."Ви успішно зареєструвалися.<br>";
?> 
      <div class="submit_a_1">
        <a href="../index.html">Повернутися на Головну сторінку</a>
      </div>
    </div>
<?php     
    } else {
      // $result;
      echo "Сталася помилка під час реєстрації. Спробуйте ще раз.<br>";
    }
?>

</body>
</html>
