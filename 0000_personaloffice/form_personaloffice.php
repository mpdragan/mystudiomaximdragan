<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід до власного кабінету</title>
    <link href="css/personaloffice.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="form-office">
      <h2>Вхід до власного кабінету</h2>

      <form method="post" action="select_form_personaloffice.php">
        <label for="">Введіть ваш логін:</label><br>
        <input type="text" placeholder="Введіть ваш логін" name="login"><br>
        <label for="">Введіть ваш пароль:</label><br>
        <input type="text" placeholder="Введіть ваш пароль" name="password"><br>
        <input type="submit" value="Вхід" class="submit">
      </form>
    </div>
</body>
</html>

