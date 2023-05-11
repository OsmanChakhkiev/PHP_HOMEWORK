<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="styles/reset.css"> -->
    <!-- <link rel="stylesheet" href="styles/style.css"> -->

</head>
<body>
    <!-- Authorization form -->
    <form action="" method="post">
        <!-- Имя пользователя -->
        <p>
        <label for="username">username</label>
        <input type="text" placeholder="enter username"  name="username" required >
        </p>
        <!-- Пароль -->
        <p>
        <label for="password">Password</label>
        <input type="password" placeholder="enter password" name="password" required >
        </p>
        <!-- Эл. почта -->
        <label for="email">Email</label>
        <input type="email" placeholder="enter email" name="email" required>
        <button type="submit">Login</button>
        <p>You don't have your profile? - <a href="/register.php">Sign in</a> </p>

    </form>
    <?php

    if(empty($_POST['username']) || (empty($_POST['password']) || (empty($_POST['email'])))) {
        exit('заполните все поля');
    }   else {
        print_r($_POST);
    }

    ?>
</body>
</html>