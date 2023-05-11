<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&family=Work+Sans:wght@500&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="styles/reset.css"> -->
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
    <!-- Register form -->
    <form action="" method="post">
        <!-- Имя -->
        <p>
        <label for="name">Name</label>
        <input type="text" placeholder="enter name" name="name" >
        </p>
        <!-- Фамилия -->
        <p>
        <label for="surname">Surname</label>
        <input type="text" placeholder="enter surname" name="surname" >
        </p>
        <!-- Имя пользователя -->
        <p>
        <label for="username">Username</label>
        <input type="text" placeholder="enter username" name="username" >
        </p>
        <!-- Пароль -->
        <p>
        <label for="password">Password</label>
        <input type="password" placeholder="enter password" name="password" >
        </p>
        <!-- Подтверждение пароля -->
        <p>
        <label for="accept password">Accept password</label>
        <input type="password" placeholder="accept password" name="accept" >
        </p>
        <!-- Эл. почта -->
        <p>
        <label for="email">Email</label>
        <input type="email" placeholder="enter email" name="email" >
        <button type="submit">Sign in</button>
        </p>
        <p>You already have your profile - <a href="/index.php">Authorize</a> </p>
    </form>
    <?php

    if(empty($_POST['name'])
      || (empty($_POST['surname'])
      || (empty($_POST['username'])
      || (empty($_POST['password'])
      || (empty($_POST['accept'])
      || (empty($_POST['email'])))))))
    {
        exit('заполните все поля');
    }   else {
        print_r($_POST);
    }

    ?>
</body>
</html>