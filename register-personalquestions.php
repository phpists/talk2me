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
          <div class="container-item">
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
                  <label class="container-radio">Все варианты
                    <input type="radio" name="radio1">
                    <span class="checkmark-radio"></span>
                  </label>
                </div>
              </label>
              <label class="main-label">
                Как принимаете
                <div class="radio-items">
                  <label class="container-radio active">Онлайн
                    <input type="radio" checked="checked" name="radio2" id="hideRadio">
                    <span class="checkmark-radio"></span>
                  </label>
                  <label class="container-radio">Лично
                    <input type="radio" name="radio2" id="showRadio">
                    <span class="checkmark-radio"></span>
                  </label>
                </div>
                <div id="hiddenBlock">
                  <span>Напишите адрес приема</span>
                  <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
              </label>
              <div class="selected-items">
                <span class="selected-title">Выберите темы, с которыми Вы работаете</span>
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
                Расскажите о себе
                <textarea name="" id="" cols="30" rows="10"></textarea>
              </label>
              <label class="main-label">
                Расскажите о Вашем образовании
                <textarea name="" id="" cols="30" rows="10"></textarea>
              </label>
              <div class="selected-items selected-notdropdown">
                <span class="selected-title">Какая у Вас специальность</span>
                <div class="tabs-parentcontainer">
                  <div class="tab-content">
                    <div class="custom-checkbox-selected">
                      <label class="container">Все
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
              <div class="selected-items selected-notdropdown">
                <span class="selected-title">Выберите методы Вашей работы</span>
                <div class="tabs-parentcontainer">
                  <div class="tab-content">
                    <div class="custom-checkbox-selected">
                      <label class="container">Гештальт-терапия
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Психодрама
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Экзистенциаль-ная психотерапия
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Юнгианский анализ
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Психоаналитичес-кая терапия
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Системный семейный подход
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Понимающая психотерапия
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Телесно-ориентированная психотерапия
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="custom-checkbox-selected">
                      <label class="container">Позитивная психотерапия
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <a href="javascript:void(0)" class="show-add-options">Добавить свой вариант вручную</a>
                  <div class="option-item">
                    <input type="text">
                  </div>
                </div>
              </div>
              <div class="dropdown-item">
                <span>Выберите тариф консультации</span>
                <div class="custom-select dropdown-firststyle">
                  <select>
                    <option value="0">16 050 ₸</option>
                    <option value="1">16 050 ₸</option>
                    <option value="2">16 050 ₸</option>
                    <option value="3">16 050 ₸</option>
                    <option value="4">16 050 ₸</option>
                    <option value="5">16 050 ₸</option>
                    <option value="6">16 050 ₸</option>
                    <option value="7">16 050 ₸</option>
                    <option value="8">16 050 ₸</option>
                    <option value="9">16 050 ₸</option>
                    <option value="10">16 050 ₸</option>
                  </select>
                </div>
              </div>
              <button>зарегистрироваться</button>
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
  <?php require "modal.php" ?>
  <?php require "footer.php" ?>