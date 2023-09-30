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
  <div class="wrapper-container-signin">
    <div class="main-content type2">
      <header class="signin-header">
        <div class="logo">
          <img src="./assets/img/logo.svg" alt="">
        </div>
      </header>
      <main>
        <div class="container">
          <div class="title">
            <span>Забыли пароль?</span>
          </div>
          <div class="form-window changepassword-form">
            <div class="tabs">
              <a href="#" class="tab active">Войти</a>
              <a href="#" class="tab">Зарегистрироваться</a>
            </div>
            <div class="form-content">
              <form action="#">
                <label>
                  <span>Введите Ваш номер телефона</span>
                  Отправим SMS с проверочным кодом
                  <div class="input">
                    <div class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M14.224 11.6637C15.3273 12.2768 16.4312 12.89 17.5345 13.5031C18.0094 13.7668 18.2177 14.3264 18.0308 14.8366C17.0815 17.4299 14.3013 18.7986 11.6855 17.8439C6.32912 15.8888 2.35855 11.9182 0.403406 6.5618C-0.551332 3.94601 0.817451 1.16582 3.41071 0.216562C3.92096 0.0296327 4.48053 0.237873 4.74479 0.712807C5.35733 1.81611 5.97048 2.92003 6.58363 4.02334C6.87103 4.54089 6.80344 5.15526 6.4101 5.59732C5.89498 6.17698 5.37986 6.75664 4.86474 7.3357C5.96439 10.0136 8.23372 12.2829 10.9116 13.3826C11.4907 12.8675 12.0703 12.3523 12.65 11.8372C13.0927 11.4439 13.7064 11.3763 14.224 11.6637Z"
                          fill="#BFBFBF" />
                      </svg>
                    </div>
                    <input type="number" name="phone" class="phone" placeholder="+7 (999) 999-99-99">
                  </div>
                </label>
                <button>получить код</button>
                <div class="signin-text">
                  <p>Вводя свой номер, вы принимаете условия <a href="#">пользовательского соглашения</a>, даете согласие на <a href="#">обработку персональных данных</a> и на получение <a href="#">SMS-паролей</a>, а также иных информационных и сервисных сообщений на указанный номер телефона</p>
                </div>
              </form>
            </div>
          </div>
        </div>
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