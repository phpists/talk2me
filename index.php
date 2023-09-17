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
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
  <link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
  <link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

  <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
  <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
  <header class="flex wrapper">
    <img src="./assets/img/logo.svg" alt="" class="header_logo" />
    <div class="flex desktop-header">
      <button class="submenu-main submenu header_menu_btn flex items-center">
        <img src="./assets/img/burger.svg" alt="" />
        <span>Меню</span>
        <ul class="submenu-content">
          <li class="submenu">
            <a href="#">Психологи</a>
            <ul class="submenu-content1">
              <li><a href="#">Сексологи</a></li>
              <li><a href="#">Семейные психологи</a></li>
              <li><a href="#">Подростковые психологи</a></li>
              <li><a href="#">Клинические психологи</a></li>
              <li><a href="#">Детские психологи</a></li>
              <li><a href="#">Психологи казакша</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="#">Психотерапевты</a>
            <ul class="submenu-content1">
              <li><a href="#">Подпункт 1</a></li>
              <li><a href="#">Подпункт 2</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="#">Неврологи</a>
            <ul class="submenu-content1">
              <li><a href="#">Подпункт 1</a></li>
              <li><a href="#">Подпункт 2</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="#">Психиатры</a>
            <ul class="submenu-content1">
              <li><a href="#">Подпункт 1</a></li>
              <li><a href="#">Подпункт 2</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="#">Коучи</a>
            <ul class="submenu-content1">
              <li><a href="#">Подпункт 1</a></li>
              <li><a href="#">Подпункт 2</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="#">Методы лечения</a>
            <ul class="submenu-content1">
              <li><a href="#">Подпункт 1</a></li>
              <li><a href="#">Подпункт 2</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="#">Гипнотерапия</a>
            <ul class="submenu-content1">
              <li><a href="#">Подпункт 1</a></li>
              <li><a href="#">Подпункт 2</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="#">Заболевания</a>
            <ul class="submenu-content1">
              <li><a href="#">Подпункт 1</a></li>
              <li><a href="#">Подпункт 2</a></li>
            </ul>
          </li>
        </ul>
      </button>
      <a href="#" class="header_menu_link">О нас</a>
      <a href="#" class="header_menu_link">Сотрудничество</a>
      <a href="#" class="header_menu_link">Блог</a>
      <a class="flex items-start header_phone" href="tel:70000000000">
        <img src="./assets/img/phone.svg" alt="" />
        <div>
          <div class="title">7 (000) 000-00-00</div>
          <div class="subtitle">Ежедневно с 9:00 до 20:00</div>
        </div>
      </a>
      <a href="#" class="header_login_btn">Вход</a>
      <a href="#" class="header_registration_btn">Регистрация</a>
    </div>
    <div class="flex mobile-header">
      <button class="header_login_btn">Вход</button>
      <button class="header_menu_btn flex items-center">
        <img src="./assets/img/burger.svg" alt="" />
      </button>
    </div>
  </header>
  <section class="hero">
    <div class="flex items-end wrapper">
      <div class="hero-text desktop">
        <div class="hero_steps flex items-center justify-center">
          <span>Онлайн</span>
          <div class="divider"></div>
          <span>В переписке</span>
          <div class="divider"></div>
          <span>Лично</span>
        </div>
        <div class="title">
          <div class="blue">8 из 10 клиентов</div>
          чувствуют результат <br />
          уже
          <span class="bold">после 3 сессии</span>
        </div>
        <div class="subtitle flex items-start">
          <img src="./assets/img/rounds.svg" alt="" />
          <div>
            Благодаря <b>методике, разработанной супервизорами </b><br />
            <b> и членами Общества Практикующих психологов,</b> <br />
            работающих в TALK<span>2</span>ME
          </div>
        </div>
        <div class="footer flex items-start">
          <button class="select_specialist">
            Выбрать специалиста
            <img src="./assets/img/arrow.svg" alt="" class="arrow" />
          </button>
          <div class="flex items-start info">
            <img src="./assets/img/form.svg" alt="" />
            <div class="text">
              Ответьте на <b>9 вопросов</b> <br />
              и получите
              <span class="green d-block">скидку 20%</span>
              <br />
              на первую сессию
            </div>
          </div>
        </div>
      </div>
      <div class="hero-text-mobile w-full">
        <div class="flex align-center mb-2.5">
          <div class="title">
            8 из 10 <br />
            клиентов
          </div>
          <div class="mobile-steps">
            <div class="flex items-center">
              <div class="divider"></div>
              <span>Онлайн</span>
            </div>
            <div class="flex items-center">
              <div class="divider"></div>
              <span>В переписке</span>
            </div>
            <div class="flex items-center">
              <div class="divider"></div>
              <span>Лично</span>
            </div>
          </div>
        </div>
        <div class="subtitle">
          чувствуют результат <br />
          уже после 3 сессии
        </div>
        <div class="subtitle subtitle-info flex items-start">
          <img src="./assets/img/rounds.svg" alt="" />
          <div>
            Благодаря
            <b>методике, разработанной <br />
              супервизорами
            </b>
            <b>
              и членами Общества <br />
              Практикующих психологов,</b>
            работающих <br />
            в TALK<span>2</span>ME
          </div>
        </div>
      </div>
      <div class="relative select-none specialist-wrapper">
        <img src="./assets/img/specialist.png" alt="" class="select-none specialist-img" draggable="false" />
        <img src="./assets/img/specialist-round.svg" alt="" class="select-none specialist-round" draggable="false" />
      </div>
      <button class="select_specialist">
        Выбрать специалиста
        <img src="./assets/img/mobile-hero-more.svg" alt="" class="arrow" />
      </button>
    </div>
  </section>
  <div class="home-content">
    <section class="statistics">
      <div class="wrapper statistics-cards flex items-start">
        <div class="statistics-card sesion">
          <div class="header flex items-start">
            <div class="icon">
              <img src="./assets/img/lightning.svg" alt="" />
            </div>
            <div class="title">100+</div>
          </div>
          <div class="text">
            Сессий проходит <br />
            ежедневно
          </div>
        </div>
        <div class="divider"></div>
        <div class="statistics-card clients">
          <div class="header flex items-start">
            <div class="icon">
              <img src="./assets/img/star.svg" alt="" />
            </div>
            <div class="title">1490+</div>
          </div>
          <div class="text">
            Успешных кейсов <br />
            и счастливых клиентов
          </div>
        </div>
        <div class="divider"></div>
        <div class="statistics-card spec">
          <div class="header flex items-start">
            <div class="icon">
              <img src="./assets/img/spec.svg" alt="" />
            </div>
            <div class="title">990+</div>
          </div>
          <div class="text">
            Специалистов <br />
            в штате
          </div>
        </div>
        <div class="divider"></div>
        <div class="statistics-card security">
          <div class="header flex items-start">
            <div class="icon">
              <img src="./assets/img/security.svg" alt="" />
            </div>
            <div class="title">100%</div>
          </div>
          <div class="text">Конфиденциальность</div>
        </div>
      </div>
    </section>
    <section class="help-list wrapper">
      <div class="title">
        Специалисты
        <span class="blue">TALK<span class="num">2</span>ME</span> <br />
        помогут разобраться
      </div>
      <div class="cards">
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/paranoya.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span>
            Обсессивно- <br />
            компульсивное <br />
            расстройство
          </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/anorexia.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span> Анорексия </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/shizofrenia.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span>
            Шизофрения <br />
            и шизофреноподобные <br />
            расстройства
          </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/panic-attack.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span> Панические атаки </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/psychomatica.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span>
            Психосоматическое <br />
            расстройство
          </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/food-disorder.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span>
            Расстройство <br />
            пищевого поведения
          </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/post-trauma.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span>
            Посттравматическое <br />
            стрессовое <br />
            расстройство
          </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/nevroz.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span> Невроз </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/boolimia.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span> Булимия </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/sleep-problem.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span> Бессонница </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/paraniya.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span>
            Параноидное <br />
            расстройство личности <br />
            (паранойя)
          </span>
        </div>
        <div class="help-card">
          <div class="photo" style="
                background: url(./assets/img/tired.png) center/cover
                  no-repeat;
              ">
            <img src="./assets/img/check.svg" alt="" />
          </div>
          <span>
            Хроническая усталость <br />
            и сонливость
          </span>
        </div>
      </div>
      <button class="show-more">
        показать еще <img src="./assets/img/arrow-down.svg" alt="" />
      </button>
      <img src="./assets/img/dots.svg" alt="" class="dots" />
    </section>
    <section class="wrapper didnt-find">
      <div class="didnt-find-content">
        <div class="title">
          Не нашли <br />
          свой случай?
        </div>
        <div class="info">
          <img src="./assets/img/rounds.svg" alt="" />
          <div>
            Мы подберем профильного специалиста, <br />
            который <b>решит вашу проблему </b><br />
            <b>за несколько сеансов</b>
          </div>
        </div>
        <button class="select-specialist">подобрать психолога</button>
      </div>
      <button class="select-specialist">подобрать психолога</button>
    </section>
    <section class="form wrapper flex items-start">
      <div>
        <div class="header">
          <div class="title">Ответьте на 9 вопросов</div>
          <div class="subtitle">
            <img src="./assets/img/discount.svg" alt="" />
            и получите <b class="mx-1">скидку 20%</b> на первую сессию
          </div>
        </div>
        <div class="step">
          <div class="status-title"><b>1</b> из 9</div>
          <div class="title">Как вас зовут?</div>
          <input type="text" class="step-input" placeholder="ФИО" />
          <div class="status-info">
            Ваше имя или псевдоним, будет доступно вашему психологу
          </div>
          <div class="flex items-center step-footer">
            <div class="progress-wrapper">
              <div class="progress">
                <div style="width: 20%"></div>
              </div>
              <div class="progress-title">осталось еще <b>8 вопросов</b></div>
            </div>
            <div class="flex items-center btns">
              <img src="./assets/img/back.svg" alt="" class="back-btn" />
              <button class="next-btn flex items-center">
                Далее <img src="./assets/img/next-arrow.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
        <!-- <div class="step">
            <div class="status-title"><b>2</b> из 9</div>
            <div class="title">Сколько вам лет?</div>
            <input type="text" class="step-input" placeholder="16 или больше" />
            <div class="status-info">
              Для получения услуг вам должно быть 16 или больше лет
            </div>
            <div class="flex items-center step-footer">
              <div class="progress-wrapper">
                <div class="progress">
                     <div style="width: 20%"></div>
                </div>
                <div class="progress-title">осталось еще <b>7 вопросов</b></div>
              </div>
              <div class="flex items-center btns">
                <img src="./assets/img/back.svg" alt="" class="back-btn" />
                <button class="next-btn flex items-center">
                  Далее <img src="./assets/img/next-arrow.svg" alt="" />
                </button>
              </div>
            </div>
          </div> 
          <div class="step">
            <div class="status-title"><b>3</b> из 9</div>
            <div class="title">Был ли у вас опыт терапии?</div>
            <div class="options-step-3">
              <div class="option-card active">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Да</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Нет</span>
              </div>
            </div>
            <div class="flex items-center step-footer footer-no-status-info">
              <div class="progress-wrapper">
                <div class="progress">
                  <div style="width: 30%"></div>
                </div>
                <div class="progress-title">осталось еще <b>6 вопросов</b></div>
              </div>
              <div class="flex items-center btns">
                <img src="./assets/img/back.svg" alt="" class="back-btn" />
                <button class="next-btn flex items-center">
                  Далее <img src="./assets/img/next-arrow.svg" alt="" />
                </button>
              </div>
            </div>
          </div>
          <div class="step">
            <div class="status-title"><b>4</b> из 9</div>
            <div class="title">Вид консультации</div>
            <div class="options-step-4">
              <div class="option-card active">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Индивидуальная</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Парная</span>
              </div>
            </div>
            <div class="flex items-center step-footer footer-no-status-info">
              <div class="progress-wrapper">
                <div class="progress">
                  <div style="width: 44%"></div>
                </div>
                <div class="progress-title">осталось еще <b>5 вопросов</b></div>
              </div>
              <div class="flex items-center btns">
                <img src="./assets/img/back.svg" alt="" class="back-btn" />
                <button class="next-btn flex items-center">
                  Далее <img src="./assets/img/next-arrow.svg" alt="" />
                </button>
              </div>
            </div>
          </div>
          <div class="step step-5">
            <div class="status-title"><b>5</b> из 9</div>
            <div class="title mb-0">
              Что вы хотели бы обсудить в первую очередь?
            </div>
            <div class="status-info">Выберите один или несколько вариантов</div>
            <div class="step-tabs">
              <div class="active">Моё состояние</div>
              <div>Отношения</div>
              <div>Работа, учеба</div>
              <div>События в жизни</div>
            </div>
            <div class="options-step-5">
              <div class="option-card active">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Стресс</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Нестабильная самооценка</span>
              </div>
              <div class="option-card active">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Перепады настроения</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Сложности с алкоголем</span>
              </div>
              <div class="option-card active">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Обсессивно- компульсивное расстройство</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Панические атаки</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Психосоматическое</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Анорексия</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Бессонница</span>
              </div>
            </div>
            <div class="flex items-center step-footer footer-no-status-info">
              <div class="progress-wrapper">
                <div class="progress">
                  <div style="width: 55%"></div>
                </div>
                <div class="progress-title">осталось еще <b>4 вопросов</b></div>
              </div>
              <div class="flex items-center btns">
                <img src="./assets/img/back.svg" alt="" class="back-btn" />
                <button class="next-btn flex items-center">
                  Далее <img src="./assets/img/next-arrow.svg" alt="" />
                </button>
              </div>
            </div>
          </div>
          <div class="step step-6">
            <div class="status-title"><b>6</b> из 9</div>
            <div class="title">С кем вам комфортнее работать?</div>

            <div class="options-step-6">
              <div class="option-card active">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>С женщиной</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>С мужчиной</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Всё равно</span>
              </div>
            </div>
            <div class="flex items-center step-footer footer-no-status-info">
              <div class="progress-wrapper">
                <div class="progress">
                  <div style="width: 66%"></div>
                </div>
                <div class="progress-title">осталось еще <b>3 вопросов</b></div>
              </div>
              <div class="flex items-center btns">
                <img src="./assets/img/back.svg" alt="" class="back-btn" />
                <button class="next-btn flex items-center">
                  Далее <img src="./assets/img/next-arrow.svg" alt="" />
                </button>
              </div>
            </div>
          </div>
          <div class="step">
            <div class="status-title"><b>7</b> из 9</div>
            <div class="title">Предпочтения по встрече</div>
            <div class="options-step-7">
              <div class="option-card active">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Лично</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Онлайн</span>
              </div>
            </div>
            <div class="flex items-center step-footer">
              <div class="progress-wrapper">
                <div class="progress">
                  <div style="width: 77%"></div>
                </div>
                <div class="progress-title">осталось еще <b>2 вопросов</b></div>
              </div>
              <div class="flex items-center btns">
                <img src="./assets/img/back.svg" alt="" class="back-btn" />
                <button class="next-btn flex items-center">
                  Далее <img src="./assets/img/next-arrow.svg" alt="" />
                </button>
              </div>
            </div>
          </div>
          <div class="step step-8">
            <div class="status-title"><b>8</b> из 9</div>
            <div class="title">
              Выберите специалиста, если вы знаете к кому хотите обратиться
            </div>
            <div class="options-step-8">
              <div class="option-card active">
                <img src="./assets/img/opt-checked.svg" alt="" />
                <span>Не знаю</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Психолог</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Психотерапевт</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Невролог</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Психиатр</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Коуч</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Гипнолог</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Клинический психолог</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Сексолог</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Семейный психолог</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Нейропсихолог</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Подростковый психолог</span>
              </div>
              <div class="option-card">
                <img src="./assets/img/opt-not-checked.svg" alt="" />
                <span>Детский психолог</span>
              </div>
            </div>
            <div class="flex items-center step-footer">
              <div class="progress-wrapper">
                <div class="progress">
                  <div style="width: 88%"></div>
                </div>
                <div class="progress-title">осталось еще <b>1 вопросов</b></div>
              </div>
              <div class="flex items-center btns">
                <img src="./assets/img/back.svg" alt="" class="back-btn" />
                <button class="next-btn flex items-center">
                  Далее <img src="./assets/img/next-arrow.svg" alt="" />
                </button>
              </div>
            </div>
          </div>
          <div class="step step-9">
            <div class="status-title"><b>9</b> из 9</div>
            <div class="title">Предпочтение по стоимости</div>
            <div class="step-9-select">
              KZT <img src="./assets/img/select-arrow.svg" alt="" />
            </div>
            <div class="options-step-9">
              <div>
                <div class="option-card active">
                  <img src="./assets/img/opt-checked.svg" alt="" />
                  <span>16 050 ₸</span>
                </div>
                <div class="tarif-info-card active">
                  <div class="text">
                    Опыт от 3 лет. Прошли личное <br />
                    собеседование, подтвердили <br />
                    образование, предоставили <br />
                    рекомендацию.
                  </div>
                  <button>927 специалистов</button>
                </div>
              </div>
              <div>
                <div class="option-card">
                  <img src="./assets/img/opt-not-checked.svg" alt="" />
                  <span>22 250 ₸</span>
                </div>
                <div class="tarif-info-card">
                  <div class="text">
                    Опыт от 5 лет. Работают <br />
                    в TALK2ME более года и за это <br />
                    время зарекомендовали себя <br />
                    наилучшим образом.
                  </div>
                  <button>48 специалистов</button>
                </div>
              </div>
              <div>
                <div class="option-card">
                  <img src="./assets/img/opt-not-checked.svg" alt="" />
                  <span>27 850 ₸</span>
                </div>
                <div class="tarif-info-card">
                  <div class="text">
                    Опыт от 7 лет. <br />
                    Самовостребованные <br />
                    психологи: супервизоры, <br />
                    члены ассоциаций.
                  </div>
                  <button>8 специалистов</button>
                </div>
              </div>
            </div> -->
        <!-- <div class="flex items-center step-footer">
              <div class="progress-wrapper">
                <div class="progress">
                  <div style="width: 100%"></div>
                </div>
                <div class="progress-title">осталось еще <b>0 вопросов</b></div>
              </div>
              <div class="flex items-center btns">
                <img src="./assets/img/back.svg" alt="" class="back-btn" />
                <button class="next-btn flex items-center">
                  Далее <img src="./assets/img/next-arrow.svg" alt="" />
                </button>
              </div>
            </div>
          </div> -->
      </div>
      <div class="manager-card">
        <div class="avatar" style="
              background: url(./assets/img/manager.png) center/cover
                  no-repeat,
                #d9d9d9;
              background-size: 247%;
              background-position: 65% -6%;
            ">
          <div></div>
        </div>
        <div class="name">Алексеева Ольга</div>
        <div class="decr">Менеджер со знаниями основ психологии</div>
        <div class="info">
          После ваших ответов мы сможем подобрать специалиста, который сможет
          <b> максимально эффективно помочь в вашей ситуации</b>
        </div>
      </div>
    </section>
    <section class="specialists">
      <div class="title wrapper">
        Все специалисты проходят обучение <br />
        от нашего центра <span>edu.talk2me.kz</span>
      </div>
      <div class="subtitle wrapper">
        которое позволяет решать психологические <br />
        проблемы в <b>8,5 раз быстрее</b>, чем у классических психологов
      </div>
      <div class="specialists-tabs wrapper">
        <div class="active">Психолог</div>
        <div>Семейный психолог</div>
        <div>Подростковый психолог</div>
        <div>Детский психолог</div>
        <div>Коуч</div>
      </div>
      <div class="specialists-all wrapper">
        все специалисты <img src="./assets/img/select-arrow.svg" alt="" />
      </div>
      <div class="wrapper">
        <div class="specialist-select">
          Психолог <img src="./assets/img/select-arrow.svg" alt="" />
        </div>
      </div>
      <div class="specialists-list">
        <div class="specialist-card">
          <div class="photo"></div>
          <div class="header">
            <div class="rate-info">
              <div class="rate-title">Средняя оценка</div>
              <div class="flex">
                <div class="rate-value">5/5</div>
                <img src="./assets/img/stars.svg" alt="" />
              </div>
            </div>
            <div class="reviews-link">250 отзывов</div>
          </div>
          <div class="name">
            Андреева <br />
            Оксана Валерьевна
          </div>
          <div class="role">Психолог, психолог</div>
          <div class="experience">Опыт работы - 6 лет</div>
          <div class="directions-title">Направления работы:</div>
          <div class="directions-item">Направление 1</div>
          <div class="directions-item">Направление 2</div>
          <div class="directions-item">Направление 3</div>
          <div class="directions-show-all">смотреть все направления</div>
          <div class="flex items-center">
            <button class="specialist-more-btn">подробнее</button>
            <button class="specialist-sing-btn">записаться</button>
          </div>
        </div>
        <div class="specialist-card">
          <div class="photo"></div>
          <div class="header">
            <div class="rate-info">
              <div class="rate-title">Средняя оценка</div>
              <div class="flex">
                <div class="rate-value">5/5</div>
                <img src="./assets/img/stars.svg" alt="" />
              </div>
            </div>
            <div class="reviews-link">250 отзывов</div>
          </div>
          <div class="name">
            Андреева <br />
            Оксана Валерьевна
          </div>
          <div class="role">Психолог, психолог</div>
          <div class="experience">Опыт работы - 6 лет</div>
          <div class="directions-title">Направления работы:</div>
          <div class="directions-item">Направление 1</div>
          <div class="directions-item">Направление 2</div>
          <div class="directions-item">Направление 3</div>
          <div class="directions-show-all">смотреть все направления</div>
          <div class="flex items-center">
            <button class="specialist-more-btn">подробнее</button>
            <button class="specialist-sing-btn">записаться</button>
          </div>
        </div>
        <div class="specialist-card">
          <div class="photo"></div>
          <div class="header">
            <div class="rate-info">
              <div class="rate-title">Средняя оценка</div>
              <div class="flex">
                <div class="rate-value">5/5</div>
                <img src="./assets/img/stars.svg" alt="" />
              </div>
            </div>
            <div class="reviews-link">250 отзывов</div>
          </div>
          <div class="name">
            Андреева <br />
            Оксана Валерьевна
          </div>
          <div class="role">Психолог, психолог</div>
          <div class="experience">Опыт работы - 6 лет</div>
          <div class="directions-title">Направления работы:</div>
          <div class="directions-item">Направление 1</div>
          <div class="directions-item">Направление 2</div>
          <div class="directions-item">Направление 3</div>
          <div class="directions-show-all">смотреть все направления</div>
          <div class="flex items-center">
            <button class="specialist-more-btn">подробнее</button>
            <button class="specialist-sing-btn">записаться</button>
          </div>
        </div>
        <div class="specialist-card">
          <div class="photo"></div>
          <div class="header">
            <div class="rate-info">
              <div class="rate-title">Средняя оценка</div>
              <div class="flex">
                <div class="rate-value">5/5</div>
                <img src="./assets/img/stars.svg" alt="" />
              </div>
            </div>
            <div class="reviews-link">250 отзывов</div>
          </div>
          <div class="name">
            Андреева <br />
            Оксана Валерьевна
          </div>
          <div class="role">Психолог, психолог</div>
          <div class="experience">Опыт работы - 6 лет</div>
          <div class="directions-title">Направления работы:</div>
          <div class="directions-item">Направление 1</div>
          <div class="directions-item">Направление 2</div>
          <div class="directions-item">Направление 3</div>
          <div class="directions-show-all">смотреть все направления</div>
          <div class="flex items-center">
            <button class="specialist-more-btn">подробнее</button>
            <button class="specialist-sing-btn">записаться</button>
          </div>
        </div>
        <div class="specialist-card">
          <div class="photo"></div>
          <div class="header">
            <div class="rate-info">
              <div class="rate-title">Средняя оценка</div>
              <div class="flex">
                <div class="rate-value">5/5</div>
                <img src="./assets/img/stars.svg" alt="" />
              </div>
            </div>
            <div class="reviews-link">250 отзывов</div>
          </div>
          <div class="name">
            Андреева <br />
            Оксана Валерьевна
          </div>
          <div class="role">Психолог, психолог</div>
          <div class="experience">Опыт работы - 6 лет</div>
          <div class="directions-title">Направления работы:</div>
          <div class="directions-item">Направление 1</div>
          <div class="directions-item">Направление 2</div>
          <div class="directions-item">Направление 3</div>
          <div class="directions-show-all">смотреть все направления</div>
          <div class="flex items-center">
            <button class="specialist-more-btn">подробнее</button>
            <button class="specialist-sing-btn">записаться</button>
          </div>
        </div>
        <div class="specialist-card">
          <div class="photo"></div>
          <div class="header">
            <div class="rate-info">
              <div class="rate-title">Средняя оценка</div>
              <div class="flex">
                <div class="rate-value">5/5</div>
                <img src="./assets/img/stars.svg" alt="" />
              </div>
            </div>
            <div class="reviews-link">250 отзывов</div>
          </div>
          <div class="name">
            Андреева <br />
            Оксана Валерьевна
          </div>
          <div class="role">Психолог, психолог</div>
          <div class="experience">Опыт работы - 6 лет</div>
          <div class="directions-title">Направления работы:</div>
          <div class="directions-item">Направление 1</div>
          <div class="directions-item">Направление 2</div>
          <div class="directions-item">Направление 3</div>
          <div class="directions-show-all">смотреть все направления</div>
          <div class="flex items-center">
            <button class="specialist-more-btn">подробнее</button>
            <button class="specialist-sing-btn">записаться</button>
          </div>
        </div>
        <div class="specialist-card">
          <div class="photo"></div>
          <div class="header">
            <div class="rate-info">
              <div class="rate-title">Средняя оценка</div>
              <div class="flex">
                <div class="rate-value">5/5</div>
                <img src="./assets/img/stars.svg" alt="" />
              </div>
            </div>
            <div class="reviews-link">250 отзывов</div>
          </div>
          <div class="name">
            Андреева <br />
            Оксана Валерьевна
          </div>
          <div class="role">Психолог, психолог</div>
          <div class="experience">Опыт работы - 6 лет</div>
          <div class="directions-title">Направления работы:</div>
          <div class="directions-item">Направление 1</div>
          <div class="directions-item">Направление 2</div>
          <div class="directions-item">Направление 3</div>
          <div class="directions-show-all">смотреть все направления</div>
          <div class="flex items-center">
            <button class="specialist-more-btn">подробнее</button>
            <button class="specialist-sing-btn">записаться</button>
          </div>
        </div>
        <div class="specialist-card">
          <div class="photo"></div>
          <div class="header">
            <div class="rate-info">
              <div class="rate-title">Средняя оценка</div>
              <div class="flex">
                <div class="rate-value">5/5</div>
                <img src="./assets/img/stars.svg" alt="" />
              </div>
            </div>
            <div class="reviews-link">250 отзывов</div>
          </div>
          <div class="name">
            Андреева <br />
            Оксана Валерьевна
          </div>
          <div class="role">Психолог, психолог</div>
          <div class="experience">Опыт работы - 6 лет</div>
          <div class="directions-title">Направления работы:</div>
          <div class="directions-item">Направление 1</div>
          <div class="directions-item">Направление 2</div>
          <div class="directions-item">Направление 3</div>
          <div class="directions-show-all">смотреть все направления</div>
          <div class="flex items-center">
            <button class="specialist-more-btn">подробнее</button>
            <button class="specialist-sing-btn">записаться</button>
          </div>
        </div>
        <div class="specialist-card">
          <div class="photo"></div>
          <div class="header">
            <div class="rate-info">
              <div class="rate-title">Средняя оценка</div>
              <div class="flex">
                <div class="rate-value">5/5</div>
                <img src="./assets/img/stars.svg" alt="" />
              </div>
            </div>
            <div class="reviews-link">250 отзывов</div>
          </div>
          <div class="name">
            Андреева <br />
            Оксана Валерьевна
          </div>
          <div class="role">Психолог, психолог</div>
          <div class="experience">Опыт работы - 6 лет</div>
          <div class="directions-title">Направления работы:</div>
          <div class="directions-item">Направление 1</div>
          <div class="directions-item">Направление 2</div>
          <div class="directions-item">Направление 3</div>
          <div class="directions-show-all">смотреть все направления</div>
          <div class="flex items-center">
            <button class="specialist-more-btn">подробнее</button>
            <button class="specialist-sing-btn">записаться</button>
          </div>
        </div>
      </div>
      <div class="specialists-arrows flex items-center justify-center wrapper">
        <img src="./assets/img/arrow-back.svg" alt="" class="arrow" />
        <img src="./assets/img/arrow-next.svg" alt="" class="arrow" />
        <img src="./assets/img/dots.svg" alt="" class="dots" />
      </div>
    </section>
    <section class="info-block-1">
      <div class="title">Только <span>6% кандидатов</span></div>
      <div class="subtitle">проходят отбор в нашу команду</div>
      <div class="criteria-wrapper">
        <div class="criteria-title">Какие критерии проверяем:</div>
        <div class="criteria-list">
          <div>
            <img src="./assets/img/education.svg" alt="" />
            Образование
          </div>
          <div>
            <img src="./assets/img/super-vision.svg" alt="" />
            Прохождение супервизии
          </div>
          <div>
            <img src="./assets/img/expirience.svg" alt="" />
            Опыт работы
          </div>
          <div>
            <img src="./assets/img/hours.svg" alt="" />
            Часы личной терапии
          </div>
          <div>
            <img src="./assets/img/recomedation.svg" alt="" />
            Рекомендации коллег
          </div>
        </div>
      </div>
      <div class="info">
        <img src="./assets/img/text.svg" alt="" />
        <div>
          А ещё каждый наш психолог проходит <br />
          <span>тест на толерантность и умение работать <br />
            с уязвимыми группами</span>
        </div>
      </div>
    </section>
    <section class="info-block-2">
      <div class="info-content desktop">
        <div class="expert"></div>
        <div class="title">
          Сервис, созданный <br />
          <span>психологами</span>
          <img src="./assets/img/verify-icon.svg" alt="" />
        </div>
        <div class="quote-wrapper">
          <img src="./assets/img/quote.svg" alt="" class="quote-icon" />
          <div class="quote-title">
            «Мы довольно строго отбираем психологов и работаем только с теми,
            кого смело могли бы порекомендовать собственным друзьям»
          </div>
          <div class="divider"></div>
          <div class="name">Екатерина Артеменко</div>
          <div class="desrc">
            Гештальт-терапевт, супервизор, член Общества Практикующих
            психологов «Гештальт-подход», Комьюнити директор «Ясно»
          </div>
        </div>
        <div class="dots-wrapper">
          <img src="./assets/img/dots.svg" alt="" class="dots" />
          <button class="select-btn">подобрать психолога</button>
        </div>
      </div>
      <div class="info-content-mobile">
        <div class="expert"></div>
        <img src="./assets/img/verify-icon.svg" alt="" />
        <div class="title">
          Сервис, созданный <br /><span> психологами</span>
        </div>
        <div class="quote-wrapper">
          <img src="./assets/img/quote.svg" alt="" class="quote-icon" />
          <div class="quote-title">
            «Мы довольно строго отбираем психологов и работаем только с теми,
            кого смело могли бы порекомендовать собственным друзьям»
          </div>
          <div class="divider"></div>
          <div class="name">Екатерина Артеменко</div>
          <div class="desrc">
            Гештальт-терапевт, супервизор, член Общества Практикующих
            психологов «Гештальт-подход», Комьюнити директор «Ясно»
          </div>
        </div>
        <img src="./assets/img/dots.svg" alt="" class="dots" />
        <button class="select-btn">подобрать психолога</button>
      </div>
    </section>
    <section class="info-block-3">
      <div class="title">Сервис устроен <span>легко и удобно</span></div>
      <div class="subtitle">
        Это не наши слова — <b>так считают наши пользователи</b>
      </div>
      <div class="info-cards">
        <div class="info-card" style="
              background: url(./assets/img/about-1.png) center/cover
                no-repeat;
            ">
          <div class="info-card-title">
            Консультации <br />
            по безопасному видеочату
          </div>
          <div class="info-card-descr">
            На нашей платформе <br />
            видеоконсультации проходят в <br />
            <b>защищенном личном кабинете.</b> <br />
            Конфиденциальные сессии <br />
            с вашим психологом доступны <br />
            из любой точки мира
          </div>
        </div>
        <div class="info-card" style="
              background: url(./assets/img/about-2.png) center/cover
                no-repeat;
            ">
          <div class="info-card-title">
            Сопровождение <br />
            на всех этапах
          </div>
          <div class="info-card-descr">
            <b>Ответим на вопросы</b> <br />
            <b> о психологии</b>, поможем, <br />
            поддержим, объясним, <br />направим
          </div>
        </div>
        <div class="info-card" style="
              background: url(./assets/img/about-3.png) center/cover
                no-repeat;
            ">
          <div class="info-card-title">От 15000 тг за сессию</div>
          <div class="info-card-descr">
            Мы установили <br />
            минимально возможную <br />
            цену, чтобы терапия была <br />
            <b>доступна каждому</b>
          </div>
        </div>
        <div class="info-card" style="
              background: url(./assets/img/about-4.png) center/cover
                no-repeat;
            ">
          <div class="info-card-title">
            Простое управление <br />
            расписанием
          </div>
          <div class="info-card-descr">
            Назначайте и переносите, <br />
            <b>мы напомним</b> и не дадим <br />
            вам забыть
          </div>
        </div>
      </div>
      <div class="info-footer">
        <div class="footer-title">
          <span>81% наших клиентов</span> чувствуют результат <br />
          уже после третьей консультации
        </div>
        <button class="select-btn">начать терапию сейчас</button>
      </div>
    </section>
    <section class="info-block-4">
      <div class="title">Остались <span>вопросы?</span></div>
      <div class="subtitle">
        Пишите — мы всегда на связи!
        <img src="./assets/img/info-block-4-info.svg" alt="" />
        <img src="./assets/img/question-info-mobile.svg" alt="" class="mobile" />
      </div>
      <div class="info-socmedia-list">
        <img src="./assets/img/telegram.svg" alt="" />
        <img src="./assets/img/watsup.svg" alt="" />
        <img src="./assets/img/chat.svg" alt="" />
      </div>
      <div class="info-text">Посмотреть все контакты</div>
    </section>
    <section class="info-block-5 wrapper">
      <div class="photo"></div>
      <img src="./assets/img/approve.svg" alt="" class="icon-mobile" />

      <div class="title">Более <span>3000 клиентов</span></div>
      <div class="subtitle">
        нашли своего психолога в <b>TALK2ME</b>
        <img src="./assets/img/approve.svg" alt="" />
      </div>
      <div class="rate-card">
        <div class="rate-title-wrapper flex items-center">
          <div>
            <img src="./assets/img/stars.svg" alt="" />
            <div class="rate-title">Рейтинг</div>
          </div>
          <div class="rate-main mobile">4.8</div>
        </div>
        <div class="flex items-center w-full">
          <div class="rate-main">4.8</div>
          <div class="rate-descr">
            На основании <span>1500 отзывов</span> <br />
            и 150 оценок
          </div>
        </div>
      </div>
      <div class="flex feedback">
        <div class="relative">
          <img src="./assets/img/96%.svg" alt="" class="recomedation-96-img" />
          <img src="./assets/img/user-recomendation.svg" alt="" class="recomedation-img" />
        </div>
        <button class="select-btn">
          оставить отзыв
          <div class="photo-mobile"></div>
        </button>
      </div>
      <div class="sort-wrapper">
        <div class="sort-title">Сортировать:</div>
        <div class="sort-dropdown">
          Сначала новые <img src="./assets/img/select-arrow.svg" alt="" />
        </div>
      </div>
    </section>
    <section class="reviews">
      <div class="review-card wrapper">
        <div class="flex mb-2.5">
          <div class="name">Елена Духина</div>
          <div class="subtitle">Номер заказа: CC57366</div>
        </div>
        <div class="flex">
          <img src="./assets/img/stars.svg" alt="" class="stars" />
          <div class="subtitle">11 августа 2021 г.</div>
        </div>
        <div class="text">
          Мастера очень внимательные. Все вопросы, связанные с ремонтом,
          решают быстро и оперативно. Спасибо Вам большое
        </div>
        <button class="show-more-btn">развернуть</button>
      </div>
      <div class="review-card wrapper">
        <div class="flex mb-2.5">
          <div class="name">Елена Духина</div>
          <div class="subtitle">Номер заказа: CC57366</div>
        </div>
        <div class="flex">
          <img src="./assets/img/stars.svg" alt="" class="stars" />
          <div class="subtitle">11 августа 2021 г.</div>
        </div>
        <div class="text">
          Мастера очень внимательные. Все вопросы, связанные с ремонтом,
          решают быстро и оперативно. Спасибо Вам большое
        </div>
        <button class="show-more-btn">развернуть</button>
      </div>
      <div class="review-card wrapper">
        <div class="flex mb-2.5">
          <div class="name">Елена Духина</div>
          <div class="subtitle">Номер заказа: CC57366</div>
        </div>
        <div class="flex">
          <img src="./assets/img/stars.svg" alt="" class="stars" />
          <div class="subtitle">11 августа 2021 г.</div>
        </div>
        <div class="text">
          Мастера очень внимательные. Все вопросы, связанные с ремонтом,
          решают быстро и оперативно. Спасибо Вам большое
        </div>
        <button class="show-more-btn">развернуть</button>
      </div>
      <div class="review-card wrapper">
        <div class="flex mb-2.5">
          <div class="name">Елена Духина</div>
          <div class="subtitle">Номер заказа: CC57366</div>
        </div>
        <div class="flex">
          <img src="./assets/img/stars.svg" alt="" class="stars" />
          <div class="subtitle">11 августа 2021 г.</div>
        </div>
        <div class="text">
          Мастера очень внимательные. Все вопросы, связанные с ремонтом,
          решают быстро и оперативно. Спасибо Вам большое
        </div>
        <button class="show-more-btn">развернуть</button>
      </div>
      <div class="review-card wrapper">
        <div class="flex mb-2.5">
          <div class="name">Елена Духина</div>
          <div class="subtitle">Номер заказа: CC57366</div>
        </div>
        <div class="flex">
          <img src="./assets/img/stars.svg" alt="" class="stars" />
          <div class="subtitle">11 августа 2021 г.</div>
        </div>
        <div class="text">
          Мастера очень внимательные. Все вопросы, связанные с ремонтом,
          решают быстро и оперативно. Спасибо Вам большое
        </div>
        <button class="show-more-btn">развернуть</button>
      </div>
    </section>
    <img src="./assets/img/dots.svg" alt="" class="reviews-dots-mobile" />

    <div class="reviews-footer wrapper">
      <button class="show-more">показать еще отзывы</button>
      <button class="add-review-btn">оставить отзыв</button>
    </div>
    <section class="rating">
      <div class="title">Независимый <span>рейтинг</span></div>
      <div class="subtitle">честных отзывов от наших клиентов</div>
      <div class="cards">
        <div class="card">
          <div class="header flex items-center">
            <img src="./assets/img/google.svg" alt="" class="logo" />
            <div class="flex">
              <div>
                <div class="flex items-center">
                  <img src="./assets/img/star-blue.svg" alt="" class="star" />
                  <div class="flex items-end">
                    <div class="rate">4.8</div>
                    <div class="from">из 5</div>
                  </div>
                </div>
                <div class="link">в отзывах Google</div>
              </div>
            </div>
          </div>
          <div class="text">
            Зарабатываем репутацию в главном <br />
            поисковике мира
          </div>
        </div>
        <div class="card">
          <div class="header flex items-center">
            <img src="./assets/img/zoon.svg" alt="" class="logo" />
            <div class="flex">
              <div>
                <div class="flex items-center">
                  <img src="./assets/img/star-blue.svg" alt="" class="star" />
                  <div class="flex items-end">
                    <div class="rate">4.7</div>
                    <div class="from">из 5</div>
                  </div>
                </div>
                <div class="link">в отзывах ZOON</div>
              </div>
            </div>
          </div>
          <div class="text">
            Зарабатываем репутацию в главном <br />
            поисковике мира
          </div>
        </div>
        <div class="card">
          <div class="header flex items-center">
            <img src="./assets/img/2gis.svg" alt="" class="logo" />
            <div class="flex">
              <div>
                <div class="flex items-center">
                  <img src="./assets/img/star-blue.svg" alt="" class="star" />
                  <div class="flex items-end">
                    <div class="rate">4.9</div>
                    <div class="from">из 5</div>
                  </div>
                </div>
                <div class="link">в отзывах 2GIS</div>
              </div>
            </div>
          </div>
          <div class="text">
            Зарабатываем репутацию в главном <br />
            поисковике мира
          </div>
        </div>
        <div class="card">
          <div class="header flex items-center">
            <img src="./assets/img/irecomend.svg" alt="" class="logo" />
            <div class="flex">
              <div>
                <div class="flex items-center">
                  <img src="./assets/img/star-blue.svg" alt="" class="star" />
                  <div class="flex items-end">
                    <div class="rate">4.9</div>
                    <div class="from">из 5</div>
                  </div>
                </div>
                <div class="link">в отзывах Irecommend</div>
              </div>
            </div>
          </div>
          <div class="text">
            Зарабатываем репутацию в главном <br />
            поисковике мира
          </div>
        </div>
      </div>
      <img src="./assets/img/dots.svg" alt="" class="reviews-dots-mobile" />
    </section>
    <section class="history">
      <div class="wrapper">
        <div class="content">
          <div class="title">История развития <span>TALK2ME</span></div>
          <div class="text-wrapper">
            <div class="text">
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum."
              <br />
              <br />
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
          </div>
          <div class="info-cards">
            <div class="info-card">
              <div class="flex items-center">
                <img src="./assets/img/star-icon.svg" alt="" />
                <span class="info-title">1000+</span>
              </div>
              <div class="text">
                Авторских статей <br />
                по психологии
              </div>
            </div>
            <div class="info-card">
              <div class="flex items-center">
                <img src="./assets/img/star-icon.svg" alt="" />
                <span class="info-title">15 лет</span>
              </div>
              <div class="text">Опыта в психологии</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="serificates">
      <div class="title">Сертификаты и дипломы</div>
      <div class="subtitle">
        <img src="./assets/img/magnifisent-glass.svg" alt="">
        Кликните, чтобы увеличить
      </div>
      <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none"
          class="prev-arrow">
          <circle cx="23" cy="22.8027" r="22.5" fill="url(#paint0_linear_488_56108)" />
          <path d="M27.543 33.3027L17.4995 22.8027L27.543 12.3027" stroke="white" stroke-width="1.82609"
            stroke-linecap="round" />
          <defs>
            <linearGradient id="paint0_linear_488_56108" x1="4" y1="9.30273" x2="37.5" y2="41.8027"
              gradientUnits="userSpaceOnUse">
              <stop stop-color="#4E869F" />
              <stop offset="0.479167" stop-color="#71AECA" />
              <stop offset="1" stop-color="#4E869F" />
            </linearGradient>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none"
          class="next-arrow">
          <circle cx="23" cy="22.8027" r="22.5" fill="url(#paint0_linear_488_56108)" />
          <path d="M18.9766 33.3027L29.02 22.8027L18.9766 12.3027" stroke="white" stroke-width="1.82609"
            stroke-linecap="round" />
          <defs>
            <linearGradient id="paint0_linear_488_56108" x1="4" y1="9.30273" x2="37.5" y2="41.8027"
              gradientUnits="userSpaceOnUse">
              <stop stop-color="#4E869F" />
              <stop offset="0.479167" stop-color="#71AECA" />
              <stop offset="1" stop-color="#4E869F" />
            </linearGradient>
          </defs>
        </svg>
        <div class="list">
          <div class="card"></div>
          <div class="card"></div>
          <div class="card"></div>
        </div>
      </div>
      <img src="./assets/img/dots.svg" alt="" class="dots" />
    </section>
    <section class="faq">
      <div class="title">
        Ответы на
        <span>часто <br />
          задаваемые вопросы
        </span>
      </div>
      <div class="faq-cards wrapper">
        <div class="faq-card active">
          <div class="faq-card-header">
            <div class="faq-title">Что спрашивает психолог на приеме?</div>
            <img src="./assets/img/close-faq.svg" alt="" />
          </div>
          <div class="divider"></div>
          <div class="text">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum."
          </div>
        </div>
        <div class="faq-card">
          <div class="faq-card-header">
            <div class="faq-title">Что спрашивает психолог на приеме?</div>
            <img src="./assets/img/open-faq.svg" alt="" />
          </div>
        </div>
        <div class="faq-card">
          <div class="faq-card-header">
            <div class="faq-title">Что спрашивает психолог на приеме?</div>
            <img src="./assets/img/open-faq.svg" alt="" />
          </div>
        </div>
        <div class="faq-card">
          <div class="faq-card-header">
            <div class="faq-title">Что спрашивает психолог на приеме?</div>
            <img src="./assets/img/open-faq.svg" alt="" />
          </div>
        </div>
        <div class="faq-card">
          <div class="faq-card-header">
            <div class="faq-title">Что спрашивает психолог на приеме?</div>
            <img src="./assets/img/open-faq.svg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="title">О нас пишут</div>
      <div class="list">
        <img src="./assets/img/Logo.png" alt="" />
        <img src="./assets/img/Logo (1).png" alt="" />
        <img src="./assets/img/Logo (2).png" alt="" />
        <img src="./assets/img/Logo (3).png" alt="" />
        <img src="./assets/img/Logo (4).png" alt="" />
        <img src="./assets/img/Logo.png" alt="" />
        <img src="./assets/img/Logo (1).png" alt="" />
        <img src="./assets/img/Logo (2).png" alt="" />
        <img src="./assets/img/Logo (3).png" alt="" />
        <img src="./assets/img/Logo (4).png" alt="" />
      </div>
    </section>
    <section class="articles wrapper">
      <div class="title">Актуальные статьи</div>
      <div class="articles-list">
        <div class="article-card">
          <div class="photo" style="
                background: url(./assets/img/article-bg.png) center/cover
                  no-repeat;
              "></div>
          <div class="article-title">
            6 признаков невротика — <br />
            проверьте себя и свое <br />
            окружение <br />
            строка еще текст
          </div>
          <div class="flex items-center justify-between footer">
            <div class="flex items-center">
              <img src="./assets/img/time.svg" alt="" /> Время чтения 55
              мин
            </div>
            21 августа 2021 г.
          </div>
        </div>
        <div class="article-card">
          <div class="photo" style="
                background: url(./assets/img/article-bg.png) center/cover
                  no-repeat;
              "></div>
          <div class="article-title">
            6 признаков невротика — <br />
            проверьте себя и свое <br />
            окружение <br />
            строка еще текст
          </div>
          <div class="flex items-center justify-between footer">
            <div class="flex items-center">
              <img src="./assets/img/time.svg" alt="" /> Время чтения 55
              мин
            </div>
            21 августа 2021 г.
          </div>
        </div>
        <div class="article-card">
          <div class="photo" style="
                background: url(./assets/img/article-bg.png) center/cover
                  no-repeat;
              "></div>
          <div class="article-title">
            6 признаков невротика — <br />
            проверьте себя и свое <br />
            окружение <br />
            строка еще текст
          </div>
          <div class="flex items-center justify-between footer">
            <div class="flex items-center">
              <img src="./assets/img/time.svg" alt="" /> Время чтения 55
              мин
            </div>
            21 августа 2021 г.
          </div>
        </div>
      </div>
      <button class="show-more">смотреть все</button>
      <img src="./assets/img/dots.svg" style="display: none" class="dots" />
    </section>
    <section class="description wrapper">
      <div class="title">
        Центр психологической <br />
        помощи <span>Алматы</span>
      </div>
      <div class="text">
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum." <br /><br />
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum." <br /><br />
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum."
      </div>
      <button class="show-more">смотреть все</button>
    </section>
    <footer class="footer">
      <div class="wrapper content">
        <div class="title">Talk2me</div>
        <div class="col">
          <div class="link">Услуги</div>
          <div class="link">Специалисты</div>
          <div class="link">Цены</div>
          <div class="link">О нас</div>
          <div class="link">Блог</div>
        </div>
        <div class="col socmedias-wrapper socmedias-mobile" style="display: none">
          <div class="link col-title">Соц. сети:</div>
          <div class="socmedias">
            <img src="./assets/img/vk.svg" alt="" />
            <img src="./assets/img/youtube.svg" alt="" />
            <img src="./assets/img/instagram.svg" alt="" />
            <img src="./assets/img/twitter.svg" alt="" />
            <img src="./assets/img/facebook.svg" alt="" />
          </div>
        </div>
        <div class="col contacts">
          <div class="link col-title">Контакты</div>
          <div class="link">+7 (000) 000-00-00</div>
          <div class="link">
            <div class="footer-card">
              <div class="card-title email">Электронная почта</div>
              <div class="descr">info@sitename.ru</div>
            </div>
          </div>
          <div class="link">
            <div class="footer-card">
              <div class="card-title">Адрес</div>
              <div class="descr">
                г. Алматы ул. Петровско <br />
                разумовская, 145, оф. 34
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col justify-between h-full">
          <div class="col socmedias-wrapper">
            <div class="link col-title">Соц. сети:</div>
            <div class="socmedias">
              <img src="./assets/img/vk.svg" alt="" />
              <img src="./assets/img/youtube.svg" alt="" />
              <img src="./assets/img/instagram.svg" alt="" />
              <img src="./assets/img/twitter.svg" alt="" />
              <img src="./assets/img/facebook.svg" alt="" />
            </div>
          </div>
          <div class="company-card">
            <span class="card-title">Название компании или ИП</span>
            <div>© nazvaniesaita.ru, 2034</div>
            <div>ОГРН 0000000000000</div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <?php require "modal.php" ?>
  <?php require "footer.php" ?>