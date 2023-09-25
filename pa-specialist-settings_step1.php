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
        <section class="sec-pa-settings-specialist__step1">
          <div class="container-item">
            <div class="title">
              <h2>Управление аккаунтом</h2>
            </div>
            <div class="tabs">
              <ul class="tabs__caption">
                <li class="tabs__item">Личные данные</li>
                <li class="tabs__item">Изменить пароль</li>
                <li class="tabs__item">История платежей</li>
                <li class="tabs__item">Специализация</li>
                <li class="tabs__item">Дипломы и сертификаты</li>
                <li class="tabs__item">Личные сообщения</li>
              </ul>
              <div class="tabs__content personal-data">
                <div class="title">
                  <h3>Личные данные</h3>
                  <p>Вы можете изменить электронную почту, телефон или фотографию. Для создания быстрой аватарки
                    необходим доступ к веб-камере.</p>
                </div>
                <div class="personal-data-content">
                  <form action="#">
                    <div class="avatar-item">
                      <div class="avatar"><img src="./assets/img/personal-data-avatar.jpg" alt=""></div>
                      <a href="#">Изменить фото</a>
                    </div>
                    <div class="inputs">
                      <label><input id="nameInput" type="text" value="Андреева Оксана Валерьевна" disabled></label>
                      <label><input id="birthdateInput" type="text" value="22 сентября 1990 год" disabled>
                        <p>Дата рождения</p>
                      </label>
                      <label><input id="phoneInput" type="text" value="+7 (999) 999-99-99" disabled>
                        <p>Телефон нужен для подтверждения операций с аккаунта</p>
                      </label>
                      <label><input id="emailInput" type="text" value="mail.mail@mail.com" disabled>
                        <p>Электронная почта используется для входа в личный кабинет и уведомлений</p>
                      </label>
                      <a id="editButton" href="#">Редактировать</a>
                      <button id="saveButton" style="display: none;">Сохранить изменения</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="tabs__content change-password">
                <div class="title">
                  <h3>Изменить пароль</h3>
                </div>
                <form action="#">
                  <label>
                    Введите старый пароль
                    <div class="container-input">
                      <input type="password" placeholder="***************">
                    </div>
                  </label>
                  <label>
                    Введите новый пароль
                    <div class="container-input">
                      <input type="password" placeholder="***************">
                    </div>
                  </label>
                  <label>
                    Повторите новый пароль
                    <div class="container-input">
                      <input type="password" placeholder="***************">
                    </div>
                  </label>
                  <button>сохранить изменения</button>
                </form>
              </div>
              <div class="tabs__content">
                Контент 3 таба
              </div>
              <div class="tabs__content">
                Контент 4 таба
              </div>
              <div class="tabs__content">
                Контент 5 таба
              </div>
              <div class="tabs__content">
                Контент 6 таба
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