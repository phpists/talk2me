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
            <span>Вход в личный кабинет</span>
          </div>
          <div class="form-window">
            <div class="tabs">
              <a href="#" class="tab active">Войти</a>
              <a href="#" class="tab">Зарегистрироваться</a>
            </div>
            <div class="form-content">
              <form action="#">
                <label>
                  Введите Ваш номер телефона
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
                <label>
                  Введите Ваш пароль
                  <div class="input">
                    <div class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
                        <path
                          d="M12.9027 7.33613H12.7514V5.7479C12.7514 2.57143 10.1784 0 7 0C3.82162 0 1.24865 2.57143 1.24865 5.7479V7.33613H1.0973C0.491892 7.33613 0 7.82773 0 8.43277V16.9034C0 17.5084 0.491892 18 1.0973 18H12.9027C13.5081 18 14 17.5084 14 16.9034V8.43277C14 7.82773 13.5081 7.33613 12.9027 7.33613ZM7.98378 12.5168V15.1639C7.98378 15.3529 7.83243 15.542 7.6054 15.542H6.35676C6.16757 15.542 5.97838 15.3908 5.97838 15.1639V12.5168C5.67568 12.2521 5.48649 11.8361 5.48649 11.3824C5.48649 10.626 6.12973 9.98319 6.88649 9.94538C7.75676 9.90756 8.43784 10.5882 8.43784 11.4202C8.47568 11.8361 8.28649 12.2521 7.98378 12.5168ZM10.5189 7.33613H3.48108V5.7479C3.48108 3.78151 5.07027 2.23109 7 2.23109C8.96757 2.23109 10.5189 3.81933 10.5189 5.7479V7.33613Z"
                          fill="#BFBFBF" />
                      </svg>
                    </div>
                    <input type="password" placeholder="***************">
                  </div>
                </label>
                <a href="./changepassword-specialist.php">Забыли пароль?</a>
                <button>войти</button>
                <div class="signin-text">
                  <span>Еще нет аккаунта?</span>
                  <a href="#">Зарегистрируйтесь</a>
                </div>
              </form>
            </div>
          </div>
          <a href="#" class="btn-signin">вход для клиентов</a>
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