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
  <div class="wrapper-container wrapper-container-pa">
    <div class="main-content">
      <header class="personalaccount-header">
        <div class="container-item">
          <div class="logo">
            <img src="./assets/img/logo.svg" alt="">
          </div>
          <div class="consult">
            <a href="#">Консультации и заявки</a>
          </div>
          <div class="person">
            <span class="name">Оксана А.</span>
            <div class="avatar">
              <img src="./assets/img/avatar.jpg" alt="">
            </div>
          </div>
        </div>
      </header>
      <main>
        <section class="appointment">
          <div class="container-item">
            <div class="title">
              <a href="#">Вернуться к выбору специалистов</a>
            </div>
            <div class="content">
              <div class="item">
                <div class="card">
                  <div class="photo">
                    <img src="./assets/img/specialist-card-photo.jpg" alt="">
                  </div>
                  <div class="descr">
                    <div class="top-item">
                      <div class="rating-item">
                        <span>Средняя оценка</span>
                        <div class="stars-container">
                          <span>5/5</span>
                          <div class="stars-item">
                            <div class="star-item"><img src="./assets/img/stars-item.svg" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <div class="feedback"><a href="#">250 отзывов</a></div>
                    </div>
                    <div class="main-item">
                      <span class="name">Андреева Оксана Валерьевна</span>
                      <span class="position">Психолог, психолог</span>
                      <span class="seniority">Опыт работы - 6 лет</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <form action="#">
                  <div class="available-dates">
                    <div class="item">
                      <span class="item-title">Доступные даты приема</span>
                      <div id="datepicker"></div>
                    </div>
                    <div class="item">
                      <span class="item-title">Время приема <span>6 апреля</span></span>
                      <div class="time-items">
                        <div class="time-item nonactive">09:00</div>
                        <div class="time-item nonactive">09:30</div>
                        <div class="time-item nonactive">11:00</div>
                        <div class="time-item nonactive">11:30</div>
                        <div class="time-item active">12:30</div>
                        <div class="time-item">13:00</div>
                        <div class="time-item">13:30</div>
                        <div class="time-item nonactive">14:00</div>
                      </div>
                      <button>записаться на 6 апреля 13:00</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
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