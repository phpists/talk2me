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
        <section class="sec-paspecialist__step1">
          <div class="container-item">
            <div class="title">
              <h2>Мои консультации</h2>
              <p>Ваш список назначенных консультаций</p>
            </div>
            <div class="main-content">
              <div class="content">
                <div class="tabs">
                  <ul class="tabs__caption">
                    <li class="tabs__item">Ожидаемые 1</li>
                    <li class="tabs__item">Завершенные 0</li>
                  </ul>
                  <div class="tabs__content">
                    <div class="tabs-background">
                      <div class="items">
                        <div class="item">
                          <div class="avatar">
                            <img src="./assets/img/privat-message-avatar.jpg" alt="">
                          </div>
                          <div class="person-descr">
                            <span class="name">Иванов Иван Иванович</span>
                            <span class="date">29 мая, понедельник в 12:00</span>
                          </div>
                        </div>
                        <div class="item">
                          <div class="buttons">
                            <a href="#" class="connect">подключиться к консультации</a>
                            <a href="#" class="cancel">отменить консультацию</a>
                            <a href="#" class="goto-chat">перейти в чат с клиентом</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="datepicker-item">
                      <div id="datepicker"></div>
                      <a href="#" class="all-date">Указать свободные даты и время консультаций</a>
                    </div>
                  </div>
                  <div class="tabs__content">
                    <div class="tabs-consult">
                      <div class="table-consult">
                        <table>
                          <col style="width:33%">
                          <col style="width:33%">
                          <col style="width:33%">
                          <tr class="table-head">
                            <th>Специалист</th>
                            <th>Дата консультации</th>
                            <th>Чат консультации</th>
                          </tr>
                          <tr>
                            <td class="name-specialist">
                              <div class="avatar">
                                <img src="./assets/img/table-avatar.jpg" alt="">
                              </div>
                              <span class="name">Иванов Иван Иванович</span>
                            </td>
                            <td class="date-consult">29 мая в 12:00</td>
                            <td class="history-chat"><a href="#">История чата</a></td>
                          </tr>
                          <tr>
                            <td class="name-specialist">
                              <div class="avatar">
                                <img src="./assets/img/table-avatar.jpg" alt="">
                              </div>
                              <span class="name">Иванов Иван Иванович</span>
                            </td>
                            <td class="date-consult">29 мая в 12:00</td>
                            <td class="history-chat"><a href="#">История чата</a></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar"></div>
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