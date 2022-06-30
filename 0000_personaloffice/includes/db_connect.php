<?php
       echo "Привіт.<br>";

       // створення бази данних

       // підключення до бази данних
       $connection = mysqli_connect('127.0.0.1', 'root', '','studio_db');

       if($connection==false){
           echo "Не удалось подключится к базе данных";
           echo mysqli_connect_error();
           exit();
       } else {
           echo "Произошло удачное подключение к базе данных.<br>";
       }

?>