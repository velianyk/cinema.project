<?php
    //заносим введений логін в змінну $login, якщо пустий, то знищуємо змінну
   if (isset($_POST['login'])) 
   { $login = $_POST['login']; 
   if ($login == '') 
   { unset($login);} 
   } 
   if (isset($_POST['password'])) 
   { $password=$_POST['password']; 
   if ($password =='') 
   { unset($password);} }
    //заносимо введений логін в змінну $password, якщо пустий, то знищуємо змінну
   if (empty($login) or empty($password)) //якщо користувач не ввів дані, то виводимо помилку і зупиняємо скрипт
    {
    exit ("Ви ввели не всю інформацію! Поверніться назад!");
    }
    //якщо логін і пароль введені, то обробляємо всі дані
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    //видаляємо лишнє
    $login = trim($login);
    $password = trim($password);
    //підключаємося до бази
    include 'bd.php';
    // перевірка на існування з таким же логіном
    $result = $bd->query("SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Вибачте, такий логін ЗАЙНЯТО. Придумайте інший");
    }

    // зберігаємо дані
    $result2 = $bd->query("INSERT INTO users (login,password) VALUES('$login','$password')");
    //перевіряємо на помилки
    if ($result2=='TRUE')
    {
      header('Location: http://192.168.0.109:8080/index.html');
    }
 else {
    echo "Невдала реєстрація. Спробуйте пізніше.";
    }
    ?>