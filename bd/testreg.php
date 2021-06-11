
<!DOCTYPE html>
  <html>
    <head>
      <meta name="charset" content="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="http://192.168.0.109:8080/css/styles.css" />
      <link rel="stylesheet" href="http://192.168.0.109:8080/css/reg.css" />
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link 
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700;900&display=swap" 
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap"
      rel="stylesheet">
      <link rel="shortcut icon" href="images/кольцо.png" type="image/x-icon">
      <title>Космос</title>
    </head>
    <body>
      <div class="enterno">
    <?php
if (isset($_POST['login'])) 
{ $login = $_POST['login']; 
  if ($login == '') 
  { unset($login);} } 
    if (isset($_POST['password']))
     { $password=$_POST['password']; 
      if ($password =='') 
      { unset($password);} }
    if (empty($login) or empty($password)) 
    {
    exit ("Ви ввели не всю інформацію! </br><a href='http://localhost/cinema.project/bd/enter.php' >Повернутися</a>");
    }
   
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);

    include ("bd.php");
 
$result = $bd->query("SELECT * FROM users WHERE login='$login'",$db);
$myrow = mysqli_fetch_array($result); 
    if (empty($myrow['password']))
    {
    
    exit ("Ви ввели невірний логін </br><a href='http://localhost/cinema.project/bd/enter.php' >Повернутися</a>");
    }
    else {
    
    if ($myrow['password']==$password) {
    
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    exit("Ви успішно увійшли!</br>Перейдіть на <a href='http://192.168.0.109:8080/index.html' >головну сторінку </a>");
    }
 else {
   

    exit ("Невірний пароль</br><a href='http://localhost/cinema.project/bd/enter.php' >Повернутися</a>");
    }
    }
    ?>
    <div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://192.168.0.109:8080/js/nonereg.js"></script> 
</body>
</html>
