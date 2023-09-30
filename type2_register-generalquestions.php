<?php // этот php-код компилирует less/style.less в css/style.css	
require "./assets/less/lessc.inc.php";
function autoCompileLess($inputFile, $outputFile)
{
  // load the cache
  $cacheFile = $inputFile . ".cache";
  if (file_exists($cacheFile)) {
    $cache = unserialize(file_get_contents($cacheFile));
  } else {
    $cache = $inputFile;
  }
  $less = new lessc;
  $newCache = $less->cachedCompile($cache);
  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
    file_put_contents($cacheFile, serialize($newCache));
    file_put_contents($outputFile, $newCache['compiled']);
  }
}
autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<meta name="viewport" content="width=1200px">-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
  <link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
  <link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

  <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
  <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
  <div class="wrapper-container">
    <div class="main-content">
      <header class="signin-header">
        <div class="container-item">
          <div class="logo">
            <img src="./assets/img/logo.svg" alt="">
          </div>
        </div>
      </header>
      <main>
        <section class="sec-generalquestions">
          <div class="container-item">
            <div class="title">
              <h2>Общие вопросы</h2>
            </div>
            <form action="#">
              <label class="main-label">
                Как Вас зовут?
                <input type="text" placeholder="ФИО">
                <span class="input-descr">Ваше имя или псевдоним, будет доступно вашему психологу</span>
              </label>
              <label class="main-label">
                Сколько Вам лет?
                <input type="number" placeholder="16 или больше">
                <span class="input-descr">Для предоставления услуг вам должно быть 16 или больше лет</span>
              </label>
              <label class="main-label">
              Был ли у Вас опыт терапии?
                <div class="radio-items">
                  <label class="container-radio active">Да
                    <input type="radio" checked="checked" name="radio1">
                    <span class="checkmark-radio"></span>
                  </label>
                  <label class="container-radio">Нет
                    <input type="radio" name="radio1">
                    <span class="checkmark-radio"></span>
                  </label>
                </div>
              </label>
              <label class="main-label parent-checkboxes">
                <div class="mainlabel-checkboxitem">
                  Email
                  <div class="checkbox-container">
                    <input type="email" placeholder="Введите Вашу электронную почту">
                    <label class="container-checkbox">Подписаться на новости сервиса
                      <input type="checkbox" checked="checked">
                      <span class="checkmark-checkbox"></span>
                    </label>
                  </div>
                </div>
              </label>
              <label class="main-label parent-checkboxes">
                <div class="mainlabel-checkboxitem">
                  Пароль
                  <div class="checkbox-container">
                    <div class="password-container">
                      <input type="password" id="registerpassword" oninput="checkInput()">
                      <span class="placeholder">Введите пароль, который будет использоваться для авторизации на
                        сайте</span>
                    </div>
                    <label class="container-checkbox">Сгенерировать пароль автоматически
                      <input type="checkbox">
                      <span class="checkmark-checkbox"></span>
                    </label>
                  </div>
                </div>
              </label>
              <button>Далее <img src="./assets/img/formarrow-next.svg" alt=""></button>
            </form>
          </div>
        </section>
      </main>
    </div>
    <footer>
      <div class="container">
        <div class="footer-logo">Talk2me</div>
        <span class="years">2020-2023</span>
        <div class="socials">
          <a href="#"><img src="./assets/img/vk.svg" alt=""></a>
          <a href="#"><img src="./assets/img/youtube.svg" alt=""></a>
          <a href="#"><img src="./assets/img/instagram.svg" alt=""></a>
          <a href="#"><img src="./assets/img/twitter.svg" alt=""></a>
          <a href="#"><img src="./assets/img/facebook.svg" alt=""></a>
        </div>
      </div>
    </footer>
  </div>
 
  <?php require "footer.php" ?>