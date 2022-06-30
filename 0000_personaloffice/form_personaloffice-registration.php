<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація до власного кабінету</title>
    <link href="css/personaloffice-registration.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="form-registration">
      <h2>Реєстрація до власного кабінету</h2>

      <form method="post" action="insert_form_personaloffice-registration.php">
        <label for="">Придумайте ваш логін:*</label><br>
        <input type="text" placeholder="Придумайте ваш логін:" name="login"><br>

        <label for="">Введіть ваше ім'я:*</label><br>
        <input type="text" placeholder="Введіть ваше ім'я" name="name"><br>

        <label for="">Введіть вашу фамілію:</label><br>
        <input type="text" placeholder="Введіть вашу фамілію" name="surname"><br>

        <label for="">Введіть вашу пошту:*</label><br>
        <input type="text" placeholder="Введіть вашу пошту" name="email"><br>

        <label for="">Введіть ваш телефон:</label><br>
        <input type="text" placeholder="Введіть ваш телефон" name="phone"><br>

        <label for="">Придумайте ваш пароль:*</label><br>
        <input type="text" placeholder="Придумайте ваш пароль" name="password"><br>

        <label for="">Введіть повторно ваш пароль:*</label><br>
        <input type="text" placeholder="Введіть повторно ваш пароль" name="repeat_password"><br>

        <input type="submit" value="Зареєструватися" class="submit">
      </form>
    </div>
</body>
</html>

