<?php
       
       require_once "config.php"; // выведет ошибку и закончит выполнение скрипта

       $connection = mysqli_connect(
           $config['db']['server'],
           $config['db']['username'],
           $config['db']['password'],
           $config['db']['name']
        );

       if($connection==false){
           echo "Не удалось подключится к базе данных";
           echo mysqli_connect_error();
           exit();
       } else {
?>
       <div class="base_data">
<?php
           
           echo "Произошло удачное подключение <br> к базе данных</div>";
       }

?>