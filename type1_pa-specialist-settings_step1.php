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
            <div class="tabs-parentcontainer">
              <div class="tabs-dropdown">
                <div class="tab-dropdown tab-dropdown-desktop active" data-tab="tab1">Личные данные</div>
                <div class="tab-dropdown tab-dropdown-desktop" data-tab="tab2">Изменить пароль</div>
                <div class="tab-dropdown tab-dropdown-desktop" data-tab="tab3">История платежей</div>
                <div class="tab-dropdown tab-dropdown-desktop" data-tab="tab4">Специализация</div>
                <div class="tab-dropdown tab-dropdown-desktop" data-tab="tab5">Дипломы и сертификаты</div>
                <div class="tab-dropdown tab-dropdown-desktop" data-tab="tab6">Личные сообщения</div>
                <div class="mobile-dropdown" id="mobiledropdown1">
                  <div class="custom-select">
                    <select>
                      <option value="0">Личные данные</option>
                      <option value="1">Личные данные</option>
                      <option value="2">Изменить пароль</option>
                      <option value="3">История платежей</option>
                      <option value="4">Специализация</option>
                      <option value="5">Дипломы и сертификаты</option>
                      <option value="6">Личные сообщения</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="tab-content-dropdown personal-data" id="tab1" style="display: none;">
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
              <div class="tab-content-dropdown change-password" id="tab2" style="display: none;">
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
              <div class="tab-content-dropdown payments-history" id="tab3" style="display: none;">
                <div class="title">
                  <h3>история платежей</h3>
                </div>
                <div class="table-parent">
                  <div class="table">
                    <div class="table-head">
                      <div style="width: 50%">Назначение платежа</div>
                      <div style="width: 17%">Дата платежа</div>
                      <div style="width: 17%">Сумма</div>
                      <div style="width: 17%">Статус</div>
                    </div>
                    <div class="table-main-contents">
                      <div class="table-content">
                        <div style="width: 50%">Оплата за консультацию,<br>ФИО</div>
                        <div style="width: 17%">29 мая 2023</div>
                        <div style="width: 17%">1500 ₸</div>
                        <div style="width: 17%" class="blue">оплачено</div>
                      </div>
                      <div class="table-content">
                        <div style="width: 50%">Оплата за консультацию,<br>ФИО</div>
                        <div style="width: 17%">29 мая 2023</div>
                        <div style="width: 17%">1500 ₸</div>
                        <div style="width: 17%" class="blue">оплачено</div>
                      </div>
                      <div class="pages">
                        <form action="#">
                          <span>Страница</span>
                          <input type="text" value="1">
                          <span>из 1</span>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="total-withdraw">
                  <form action="#">
                    <div class="bill-amount">
                      <span>Мой счет:</span>
                      <span class="summ">1500 ₸</span>
                    </div>
                    <div class="input-item">
                      <input type="number" placeholder="Введите сумму для вывода">
                      <button>Вывести</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="tab-content-dropdown" id="tab4" style="display: flex;">
                <div class="tabcontent-questions">
                  <div class="title">
                    <h3>Специализация</h3>
                    <p>Заполните информацию о себе, вашем опыте работы и услугах</p>
                  </div>
                  <form action="#">
                    <div class="main-label-cont">
                      <label class="main-label">
                        Выберите Ваш пол
                        <div class="radio-items">
                          <label class="container-radio active">Женщина
                            <input type="radio" checked="checked" name="radio1">
                            <span class="checkmark-radio"></span>
                          </label>
                          <label class="container-radio">Мужчина
                            <input type="radio" name="radio1">
                            <span class="checkmark-radio"></span>
                          </label>
                        </div>
                      </label>
                      <label class="main-label">
                        Ваш опыт работы
                        <div class="input-cont">
                          <input type="text">
                          Лет
                        </div>
                      </label>
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
                    <div class="selected-items">
                      <span class="selected-title">Выберите темы, с которыми Вы работаете</span>
                      <span class="selected-descr">Выберите один или несколько вариантов</span>
                      <div class="tabs-parentcontainer">
                        <div class="tabs-dropdown">
                          <div class="tab-dropdown-inner tab-dropdown-desktop active" data-tab="tab7">Моё состояние
                          </div>
                          <div class="tab-dropdown-inner tab-dropdown-desktop" data-tab="tab8">Отношения</div>
                          <div class="tab-dropdown-inner tab-dropdown-desktop" data-tab="tab9">Работа, учеба</div>
                          <div class="tab-dropdown-inner tab-dropdown-desktop" data-tab="tab10">События в жизни</div>
                          <div class="mobile-dropdown" id="mobiledropdown2">
                            <div class="custom-select">
                              <select>
                                <option value="7">Мое состояние</option>
                                <option value="7">Мое состояние</option>
                                <option value="8">Отношения</option>
                                <option value="9">Работа, учеба</option>
                                <option value="10">События в жизни</option>
                              </select>
                            </div>

                          </div>
                        </div>
                        <div class="tab-content-dropdown-inner" id="tab7" style="display: flex;">
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
                          <a href="#" class="show-all">показать еще</a>
                        </div>
                        <div class="tab-content-dropdown-inner" id="tab8" style="display: none;">
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
                          <a href="#" class="show-all">показать еще</a>
                        </div>
                        <div class="tab-content-dropdown-inner" id="tab9" style="display: none;">
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
                          <a href="#" class="show-all">показать еще</a>
                        </div>
                        <div class="tab-content-dropdown-inner" id="tab10" style="display: none;">
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
                          <a href="#" class="show-all">показать еще</a>
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
                    <button>сохранить</button>
                  </form>
                </div>
              </div>
              <div class="tab-content-dropdown sertificates-tab" id="tab5" style="display: none;">
                <div class="title">
                  <h3>Дипломы и сертификаты</h3>
                  <p>Загрузите ваши дипломы и сертификаты</p>
                </div>
                <form action="#">
                  <div class="items">
                    <div class="item">
                      <div class="sertificat">
                        <img src="./assets/img/sertificat-photo.jpg" alt="">
                        <a href="#">Редактировать</a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="sertificat">
                        <img src="./assets/img/sertificat-photo.jpg" alt="">
                        <a href="#">Редактировать</a>
                      </div>
                    </div>
                  </div>
                  <button>загрузить файл</button>
                </form>
              </div>
              <div class="tab-content-dropdown private-message" id="tab6" style="display: none;">
                <div class="title">
                  <h3>Личные сообщения</h3>
                </div>
                <div class="items">
                  <div class="item">
                    <div class="name-content">
                      <div class="avatar"><img src="./assets/img/privat-message-avatar.jpg" alt=""></div>
                      <span class="name">Иванов Иван Иванович</span>
                    </div>
                    <a href="#">перейти к диалогу с клиентом</a>
                  </div>
                  <div class="item">
                    <div class="name-content">
                      <div class="avatar"><img src="./assets/img/privat-message-avatar.jpg" alt=""></div>
                      <span class="name">Иванов Иван Иванович</span>
                    </div>
                    <a href="#">перейти к диалогу с клиентом</a>
                  </div>
                </div>
                <div class="pages">
                  <form action="#">
                    <span>Страница</span>
                    <input type="text" value="1">
                    <span>из 1</span>
                  </form>
                </div>
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