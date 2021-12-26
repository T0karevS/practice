<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="index.php" class="logo">
                    <img src="images/Vector.svg" alt="" class="header-img">
                
                </a>          
                  <p class="site-name">knigi.ru</p> 
                <form class="form1" method="post">
                    <input name="search" type="text" class="header__input" placeholder="Книга или автор">
                    <input  class="header__but" type="submit" name="submit" value="найти"> 
                </form>
                
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item">Мои книги</li>
                        <li class="menu__item">Уведомление</li>
                        <?php if (isset($_SESSION['user']))
                         { ?>
                       <a class="loginlink" href="connect/logout.php" title=""><li class="menu__item">Logout</li></a>
        <?php } else { ?>
            <a class="loginlink" href="login.php" title=""><li class="menu__item">Login</li>  </a>  

        <?php } ?>
                    </a></ul>
                </nav>
            </div>
        </div>
    </header>
   
    <section class="slider">
        <div class="container">
            <div class="slider__title">Оформите подписку и забудьте про покупку книг
            <button class="podpiska"> Первый месяц бесплатно!</button></div>
            <div class="knigi"></div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>    
</body>

                

</html>