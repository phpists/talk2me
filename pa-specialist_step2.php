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
        <section class="sec-paspecialist__step2">
          <div class="container-item">
            <div class="title">
              <a href="#">Вернуться в мои консультации</a>
            </div>
            <div class="main-content">
              <div class="item">
                <div class="add-consult-item">
                  <span>Мои даты и время консультаций</span>
                  <form action="#">
                    <div class="top-dropdowns">
                      <div class="custom-select dropdown-firststyle">
                        <select>
                          <option value="0">Месяц</option>
                          <option value="1">Январь</option>
                          <option value="2">Февраль</option>
                          <option value="3">Март</option>
                          <option value="4">Апрель</option>
                          <option value="5">Май</option>
                          <option value="6">Июнь</option>
                          <option value="7">Июль</option>
                          <option value="8">Август</option>
                          <option value="9">Сентябрь</option>
                          <option value="10">Октябрь</option>
                          <option value="11">Ноябрь</option>
                          <option value="12">Декабрь</option>
                        </select>
                      </div>
                      <div class="custom-select dropdown-firststyle">
                        <select>
                          <option value="0">Число</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                        </select>
                      </div>
                    </div>
                    <div class="custom-select dropdown-firststyle">
                      <select>
                        <option value="0">День недели</option>
                        <option value="1">Понедельник</option>
                        <option value="2">Вторник</option>
                        <option value="3">Среда</option>
                        <option value="4">Четверг</option>
                        <option value="5">Пятница</option>
                        <option value="6">Суббота</option>
                        <option value="7">Воскресенье</option>
                      </select>
                    </div>
                    <input type="text" placeholder="Укажите время консультации" id="timeInput">
                    <button>Добавить дату и время консультации</button>
                  </form>
                </div>
              </div>
              <div class="item">
                <div class="date-item">
                  <ul>
                    <li>29 мая, понедельник в 12:00</li>
                    <li>30 мая, вторник в 15:00</li>
                    <li>29 мая, понедельник в 12:00</li>
                    <li>30 мая, вторник в 15:00</li>
                    <li>30 мая, вторник в 15:00</li>
                    <li>29 мая, понедельник в 12:00</li>
                    <li>30 мая, вторник в 15:00</li>
                    <li>30 мая, вторник в 15:00</li>
                    <li>30 мая, вторник в 15:00</li>
                    <li>30 мая, вторник в 15:00</li>
                    <li>30 мая, вторник в 15:00</li>
                    <li>30 мая, вторник в 15:00</li>
                    <li>30 мая, вторник в 15:00</li>
                  </ul>
                </div>
                <a href="#" class="stop-consult">Приостановить консультации</a>
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
  <?php require "modal.php" ?>
  <?php require "footer.php" ?>