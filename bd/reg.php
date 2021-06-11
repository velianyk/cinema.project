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
      <title>Реєстрація</title>
    </head>
    <header class="header head_main">
    <div  class="head_img">
     <a href="http://192.168.0.109:8080/index.html"> 
      <img src="http://192.168.0.109:8080/images/logo2.png" width="80px" height="50px">
    </a>
    </div>
    <nav class="head_nav">
        <ul class="nav-list head_nav-list">
        <li class="head_link">
          <a id="btn1" class="link1" href="http://192.168.0.109:8080/pages/schedule.html">Розклад</a>
        </li>
        <li class="head_link">
          <a id="btn2" class="link2" href="http://192.168.0.109:8080/pages/soon.html">Скоро у прокаті</a>
        </li>
        <li class="head_link">
          <a id="btn3" class="link3" href="http://192.168.0.109:8080/pages/certificates.html">Сертифікати</a>
        </li>
        <li class="head_link">
          <a id="btn4" class="link4" href="http://192.168.0.109:8080/pages/about.html">Про нас</a>
        </li>
    </nav>

    <img
      onclick="openNav()"
      id="toggle-navigation"
      class="head__nav head_nav--collapsed"
      src="http://192.168.0.109:8080/images/nav.png"
      alt="">
    <div>
      <a href="http://localhost/cinema.project/bd/enter.php">  
      <img
        class="man_enter"
        src="http://192.168.0.109:8080/images/man.png"
        alt=""
      />
    </a>
    </div> 
  </header>
    <body>
        <h4>Привіт!</br> Вітаємо на сторінці реєстрації</h4>
<div class="registration ">
    <form class="reg_form" action="http://localhost/cinema.project/bd/save__user.php" method="post">
        
    <p>
        <label >Введіть логін:<br></label>
        <input name="login" type="text" size="15" maxlength="15">
        </p>
   
    <p>
        <label>Введіть пароль:<br></label>
        <input name="password" type="password" size="15" maxlength="15">
        </p>
   
    <p>
        <input class="btn_submit" type="submit" name="submit" value="Зареєструватися">
   
    </p></form>
    </div>
    <h4>Якщо ти вже зареєстрований тисни сюди</h4>
    <a href="http://localhost/cinema.project/bd/enter.php"><button>Увійти</button></a>
    
</body>
</html>