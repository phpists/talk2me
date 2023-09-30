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
        <section class="sec-personalquestions">
          <div class="container-item type2">
            <div class="title">
              <h2>Личные вопросы</h2>
            </div>
            <form action="#">
              <label class="main-label">
                Вид консультации
                <div class="radio-items">
                  <label class="container-radio active">Индивидуальные
                    <input type="radio" checked="checked" name="radio1">
                    <span class="checkmark-radio"></span>
                  </label>
                  <label class="container-radio">Парные
                    <input type="radio" name="radio1">
                    <span class="checkmark-radio"></span>
                  </label>
                </div>
              </label>
              <div class="selected-items">
                <span class="selected-title">Что вы хотели бы обсудить в первую очередь?</span>
                <span class="selected-descr">Выберите один или несколько вариантов</span>
                <div class="tabs-parentcontainer">
                  <div class="tabs-dropdown">
                    <div class="tab-dropdown tab-dropdown-desktop active" data-tab="tab1">Моё состояние</div>
                    <div class="tab-dropdown tab-dropdown-desktop" data-tab="tab2">Отношения</div>
                    <div class="tab-dropdown tab-dropdown-desktop" data-tab="tab3">Работа, учеба</div>
                    <div class="tab-dropdown tab-dropdown-desktop" data-tab="tab4">События в жизни</div>
                    <div class="mobile-dropdown">
                      <div class="custom-select">
                        <select>
                          <option value="0">Мое состояние</option>
                          <option value="1">Мое состояние</option>
                          <option value="2">Отношения</option>
                          <option value="3">Работа, учеба</option>
                          <option value="4">События в жизни</option>
                        </select>
                      </div>

                    </div>
                  </div>
                  <div class="tab-content-dropdown" id="tab1" style="display: flex;">
                    <div class="custom-checkbox-selected">
                      <label class="container">Стресс
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Нестабильная самооценка
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Перепады настроения
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Обсессивно-компульсивное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Сложности с алкоголем
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Расстройство личности
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Генерализованное тревожное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Панические атаки
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Сложности с алкоголем
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Расстройство личности
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Генерализованное тревожное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Панические атаки
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <a href="#" class="show-all">смотреть все</a>
                  </div>
                  <div class="tab-content-dropdown" id="tab2" style="display: none;">
                    <div class="custom-checkbox-selected">
                      <label class="container">Стресс
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Нестабильная самооценка
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Перепады настроения
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Обсессивно-компульсивное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Сложности с алкоголем
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Расстройство личности
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Генерализованное тревожное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Панические атаки
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Сложности с алкоголем
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Расстройство личности
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Генерализованное тревожное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Панические атаки
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <a href="#" class="show-all">смотреть все</a>
                  </div>
                  <div class="tab-content-dropdown" id="tab3" style="display: none;">
                    <div class="custom-checkbox-selected">
                      <label class="container">Стресс
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Нестабильная самооценка
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Перепады настроения
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Обсессивно-компульсивное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Сложности с алкоголем
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Расстройство личности
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Генерализованное тревожное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Панические атаки
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Сложности с алкоголем
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Расстройство личности
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Генерализованное тревожное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Панические атаки
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <a href="#" class="show-all">смотреть все</a>
                  </div>
                  <div class="tab-content-dropdown" id="tab4" style="display: none;">
                    <div class="custom-checkbox-selected">
                      <label class="container">Стресс
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Нестабильная самооценка
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Перепады настроения
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Обсессивно-компульсивное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Сложности с алкоголем
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Расстройство личности
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Генерализованное тревожное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Панические атаки
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Сложности с алкоголем
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Расстройство личности
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Генерализованное тревожное расстройство
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Панические атаки
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <a href="#" class="show-all">смотреть все</a>
                  </div>
                </div>
              </div>
              <label class="main-label">
                С кем Вам комфортнее работать
                <div class="radio-items">
                  <label class="container-radio active">С женщиной
                    <input type="radio" checked="checked" name="radio5">
                    <span class="checkmark-radio"></span>
                  </label>
                  <label class="container-radio">С мужчиной
                    <input type="radio" name="radio5">
                    <span class="checkmark-radio"></span>
                  </label>
                  <label class="container-radio">Всё равно
                    <input type="radio" name="radio5">
                    <span class="checkmark-radio"></span>
                  </label>
                </div>
              </label>
              <label class="main-label">
                Предпочтение по встрече
                <div class="radio-items">
                  <label class="container-radio active">Лично
                    <input type="radio" checked="checked" name="radio6">
                    <span class="checkmark-radio"></span>
                  </label>
                  <label class="container-radio">Онлайн
                    <input type="radio" name="radio5">
                    <span class="checkmark-radio"></span>
                  </label>
                </div>
              </label>
              <div class="selected-items selected-notdropdown">
                <span class="selected-title">Выберите специалиста, если вы знаете к кому хотите обратиться</span>
                <div class="tabs-parentcontainer">
                  <div class="tab-content">
                    <div class="custom-checkbox-selected">
                      <label class="container">Не знаю
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Психолог
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Психотерапевт
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Невролог
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Психиатр
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Коуч
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Гипнолог
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Сексолог
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Клинический психолог
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Подростковый психолог
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Семейный психолог
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Нейропсихолог
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Детский психолог
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dropdown-item">
                <span>Предпочтение по стоимости</span>
                <div class="custom-select dropdown-firststyle">
                  <select>
                    <option value="0">KZT</option>
                    <option value="1">KZT</option>
                    <option value="2">KZT</option>
                    <option value="3">KZT</option>
                    <option value="4">KZT</option>
                    <option value="5">KZT</option>
                    <option value="6">KZT</option>
                    <option value="7">KZT</option>
                    <option value="8">KZT</option>
                    <option value="9">KZT</option>
                    <option value="10">KZT</option>
                    <option value="11">KZT</option>
                    <option value="12">KZT</option>
                  </select>
                </div>
              </div>
              <div class="swiper mySwiperCurrency">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <label class="container-radio active">
                      <div class="top-radio">
                        <span class="price">16 050 ₸</span>
                        <input type="radio" checked="checked" name="radio7">
                        <span class="checkmark-radio"></span>
                      </div>
                      <div class="descr-item">
                        <p>Опыт от 3 лет. Прошли личное собеседование, подтвердили образование, предоставили
                          рекомендацию.</p>
                        <span>927 специалистов</span>
                      </div>
                    </label>
                  </div>
                  <div class="swiper-slide">
                    <label class="container-radio">
                      <div class="top-radio">
                        <span class="price">22 250 ₸</span>
                        <input type="radio" name="radio7">
                        <span class="checkmark-radio"></span>
                      </div>
                      <div class="descr-item">
                        <p>Опыт от 5 лет. Работают в TALK2ME более года и за это время зарекомендовали себя наилучшим образом.</p>
                        <span>48 специалистов</span>
                      </div>
                    </label>
                  </div>
                  <div class="swiper-slide">
                    <label class="container-radio">
                      <div class="top-radio">
                        <span class="price">27 850 ₸</span>
                        <input type="radio" name="radio7">
                        <span class="checkmark-radio"></span>
                      </div>
                      <div class="descr-item">
                        <p>Опыт от 7 лет. Самовостребованные психологи: супервизоры, члены ассоциаций.</p>
                        <span>8 специалистов</span>
                      </div>
                    </label>
                  </div>
                </div>
                <div class="swiper-paginationcurrency"></div>
              </div>
              <button>далее <img src="./assets/img/formarrow-next.svg" alt=""></button>
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