<?php

    // Задача 1.

    $fo = fopen('example.txt', 'a+');

    $content = 'Hello, World!';
    fwrite($fo, $content);

    $fp = fopen('example.txt', 'r');
        if ($fp) {
            while (($value = fgets($fp, 4096)) !== false) {
                echo $value;
            }
            if (!feof($fp)) {
                echo 'Error';
            }
            fclose($fp);
        }


    // Задача 2.

    session_start();

       $name = $_SESSION ['name'] = 'Kyle';
       $surname = $_SESSION ['surname'] = 'Crain';
       $email = $_SESSION ['email'] = 'kylecrainedl@com';

       $data = "name: $name\n". "surname: $surname\n". "email: $email\n";


       $cookies = fopen('data.txt', 'a+');

       $cookiesContent = $data;

       fwrite($cookies, $cookiesContent);



    // Задача 3.

    $int = fopen('example.txt', 'a+');

    function randomInteger($min, $max) {
        return mt_rand($min, $max);
    }

    $r_int1 = randomInteger(10, 100);
    $r_int2 = randomInteger(10, 100);

    $randomContent = $r_int1 . PHP_EOL . $r_int2 . PHP_EOL;

    fwrite($int, $randomContent);
    rewind($int);

    $sum = 0;

    while(($value1 = fgets($int, 4096)) !== false) {
        $sum += (int) $value1;
    }

    echo $sum;

    fclose($int);



