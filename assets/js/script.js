// ---------------------------------------------------------------------

$(document).click(function (e) { // скрипт для клика по элементу и вне его
  if ($(e.target).closest(".pop-up").length) {
    // вместо .pop-up ставим свой клас
    // клик по элементу .pop-up
    return;
  }
  // условие по клику снаружи элемента
});


// ---------------------------------------------------------------------

var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function (e) {
      /* When an item is clicked, update the original select box,
      and the selected item: */
      var y, i, k, s, h, sl, yl;
      s = this.parentNode.parentNode.getElementsByTagName("select")[0];
      sl = s.length;
      h = this.parentNode.previousSibling;
      for (i = 0; i < sl; i++) {
        if (s.options[i].innerHTML == this.innerHTML) {
          s.selectedIndex = i;
          h.innerHTML = this.innerHTML;
          y = this.parentNode.getElementsByClassName("same-as-selected");
          yl = y.length;
          for (k = 0; k < yl; k++) {
            y[k].removeAttribute("class");
          }
          this.classList.add("same-as-selected");
          break;
        }
      }
      h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function (e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

document.addEventListener("click", closeAllSelect);


// ---------------------------------------------------------------------



// начало скрипт аккордеона

let accordeon = document.querySelectorAll('.accordeon');

accordeon.forEach(element => {
  let aLine = element.querySelectorAll('.accordeon__line');
  let aContent = element.querySelectorAll('.accordeon__content');

  accordeonHideContent();
  accordeonShowContent();

  element.addEventListener('click', function (e) {
    if (e.target && e.target.classList.contains('accordeon__line')) {
      aLine.forEach((element, i) => {
        if (e.target == element) {
          accordeonHideContent();
          accordeonShowContent(i);
        }
      });
    }
  });

  function accordeonHideContent() {
    aLine.forEach(element => {
      element.classList.remove('active');
    });
    aContent.forEach(element => {
      element.classList.remove('active');
    });
  }

  function accordeonShowContent(i = 0) {
    aLine[i].classList.add('active');
    aContent[i].classList.add('active');
  }
});

// конец скрипт аккордеона


// начало скрипт табов //

let tabBlock = document.querySelectorAll('.tabs');

tabBlock.forEach(element => {
  let tabsParent = element.querySelector('ul');
  let tabs = tabsParent.querySelectorAll('li');
  let tabsContent = element.querySelectorAll('.tabs__content');

  tabHideContent();
  tabShowContent();

  tabsParent.addEventListener('click', function (e) {
    if (e.target) {
      tabs.forEach((element, i) => {
        if (e.target == element) {
          tabHideContent();
          tabShowContent(i);
        }
      });
    }
  });

  function tabHideContent() {
    tabs.forEach(element => {
      element.classList.remove('active');
    });

    tabsContent.forEach(element => {
      element.classList.remove('active');
    });
  }

  function tabShowContent(i = 0) {
    tabs[i].classList.add('active');
    tabsContent[i].classList.add('active');
  }
});


// конец скрипт табов //

// ---------------------------------------------------------------------

// const windowInnerWidth = window.innerWidth;

// if (windowInnerWidth >= 768) {
//   console.log(windowInnerWidth + 'больше 768')
// } else {
//   console.log(windowInnerWidth + 'меньше 768')
// }

// window.addEventListener('resize', function (event) {
//   const windowInnerWidth = window.innerWidth;
//   if (windowInnerWidth >= 768) {
//     console.log(windowInnerWidth + 'больше 768')
//   } else {
//     console.log(windowInnerWidth + 'меньше 768')
//   }
// });


// ---------------------------------------------------------------------

$(document).ready(function () {

  // ---------------------------------------------------------------------


  //  Плавный скролл к секции. Пример: <a href="#" class="scroll" data-target=".slide-1">Slide</a>
  $(".scroll").click(function (e) {
    e.preventDefault();
    var target = $(this).data("target");

    // на случай закрытия бургер меню: $('#burger-menu').click();

    $("html, body").animate({
        scrollTop: $(target).offset().top - 30,
      },
      400
    );
  });

  // ---------------------------------------------------------------------

  // Counter -----------------------
  /*
    var timeSpend = 86400000 * 50;

    if ($.cookie('firstOpen') != undefined) {
        var interval = ((new Date()).getTime() - $.cookie('firstOpen'));
        if (interval > timeSpend) {
            timeSpend = 0;
        } else {
            timeSpend -= interval;
        }
    } else {
        $.cookie('firstOpen', (new Date()).getTime());
    }

    $('.clock').countdown({
        until: timeSpend / 1000,
        format: 'DHMS'
    });
    */

  /*
    //var now = new Date();
    //var tomorrow = new Date(now.getFullYear(), now.getMonth(), now.getDate()+1);
    
    var now = parseInt(nowDateTime);
    var end = parseInt(endDateTime);
    
    if ( now > end ) {
    	hideBlock();
    }

    var diff = end - now;
    var timeSpend = Math.round(diff);

    $('.clock').countdown({until: timeSpend, format: 'DHM', onExpiry: hideBlock});
    */
});

/*
	900 		- 200
	screeHeight	- X
*/
var screeHeight = $(window).height();
var offSet = 200;

if (screeHeight > 930) {
  offSet = 200;
} else {
  offSet = (screeHeight * 200) / 900;
  offSet = offSet.toFixed();
}

// wow = new WOW({
//   animateClass: "animated",
//   offset: offSet,
//   callback: function (box) {
//     console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
//   },
// });

// wow.init();

// ---------------------------------------------------------------------


// ниже идет скрипт ютуб плеера, пример вставки: <div class="video-bl" data-video="zpOULjyy-n8"></div>
/*
var players = new Array();

$(document).ready(function () {
  $(document).on("click", ".yt-toggle-play", function () {
    var playBtn = $(this);
    var plBlock = playBtn.closest(".video-bl");
    var videoBlockId = plBlock.find(".embed-responsive-item").attr("id");

    playBtn.addClass("in-process");

    // Сначала останавливаем все плееры
    $(players).each(function () {
      let state = this.getPlayerState();

      if (state === 1) {
        this.pauseVideo();
      }

      $("#" + this.videoBlockId)
        .closest(".video-bl")
        .find(".yt-toggle-play")
        .removeClass("c-hide");
    });

    // Если плеер уже инициализирован
    if (plBlock.find("iframe").length) {
      $(players).each(function () {
        if (this.videoBlockId == videoBlockId) {
          var state = this.getPlayerState();

          if (state === 1) {
            this.pauseVideo();
            playBtn.removeClass("c-hide");
          } else {
            playBtn.addClass("c-hide");
            this.playVideo();
          }
        }
      });
      playBtn.removeClass("in-process");

      // Иначе инициализируем
    } else {
      var videoID = plBlock.data("video");

      var player = new YT.Player(videoBlockId, {
        playerVars: {
          controls: 0,
          showinfo: 0,
          rel: 0,
          autoplay: 0,
        },
        videoId: videoID,
      });

      player.videoBlockId = videoBlockId;

      players.push(player);

      var playVideoInt = setInterval(function () {
        $(players).each(function () {
          if (this.videoBlockId == videoBlockId && this.getPlayerState()) {
            clearInterval(playVideoInt);

            playBtn.addClass("c-hide");

            var state = this.getPlayerState();

            if (state === 1) {
              this.pauseVideo();
            } else {
              this.playVideo();
            }
          }
        });
        playBtn.removeClass("in-process");
      }, 200);
    }
  });
});

function onYouTubeIframeAPIReady() {
  $(".video-bl").each(function (key) {
    let videoID = $(this).data("video");
    let bgImage = $(this).data("bg");
    let videoBlockId = "player" + key;

    if (!videoID) {
      return false;
    }

    if (bgImage) {
      var bgImageUrl = bgImage;
    } else {
      var bgImageUrl = "https://img.youtube.com/vi/" + videoID + "/0.jpg";
    }

    $(this).html(
      '<div class="embed-responsive embed-responsive-16by9"><div class="embed-responsive-item" id="' +
        videoBlockId +
        '"></div><div class="yt-toggle-play" style="background-image: url(' +
        bgImageUrl +
        ')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="play-icn"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg></div></div>'
    );
  });
}

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
*/

$('.help-list .show-more').click(function () {
  $('.help-list').toggleClass('active');
  if ($('.help-list').hasClass('active')) {
    $('.help-list .show-more').text('Спрятать');
    $('.help-list .show-more').addClass('active');
  } else {
    $('.help-list .show-more').text('Показать еще');
    $('.help-list .show-more').removeClass('active');
  }
});


if (window.innerWidth <= 768) {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    centeredSlides: true,
    spaceBetween: 10,
    grid: {
      rows: 4,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1.4,
        spaceBetween: 10,
      },
      // when window width is >= 480px
      575: {
        slidesPerView: 2.2,
        centeredSlides: false,
        spaceBetween: 10,
      }
    }
  });
}


if (window.innerWidth <= 768) {
  var swiper = new Swiper(".mySwiperIndex2", {
    slidesPerView: 1,
    spaceBetween: 10,
    // loop: true,
    grid: {
      rows: 2,
    },
    pagination: {
      el: ".swiper-pagination-index2",
      clickable: true,
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1.4,
        spaceBetween: 10,
      },
      // when window width is >= 480px
      575: {
        slidesPerView: 1.8,
        spaceBetween: 10,
      },
      // when window width is >= 480px
      767: {
        slidesPerView: 2,
        spaceBetween: 10,
      }
    }
  });
}


if (window.innerWidth <= 1220) {
  var swiper = new Swiper(".mySwiperIndex3", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination-index3",
      clickable: true,
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1.4,
        spaceBetween: 10,
      },
      // when window width is >= 480px
      575: {
        slidesPerView: 2.4,
        spaceBetween: 10,
      },
      // when window width is >= 480px
      767: {
        slidesPerView: 2.7,
        spaceBetween: 10,
      },
      // when window width is >= 480px
      840: {
        slidesPerView: 3.3,
        spaceBetween: 10,
      }
    }
  });
}


var swiper = new Swiper(".mySwiperSpecialists", {
  slidesPerView: 5.8,
  spaceBetween: 30,
  initialSlide: 1,
  observer: true,
  observeParents: true,
  // reverseDirection: true,
  centeredSlides: true,
  navigation: {
    nextEl: ".swiper-next",
    prevEl: ".swiper-prev",
  },
  pagination: {
    el: ".swiper-pagination-specialists",
    clickable: true,
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1.25,
      spaceBetween: 15,
      centeredSlides: false,
      initialSlide: 0,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1.55,
      spaceBetween: 15,
      centeredSlides: false,
      initialSlide: 0,
    },
    575: {
      slidesPerView: 1.9,
      spaceBetween: 15,
      centeredSlides: false,
      initialSlide: 0,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2.1,
      spaceBetween: 15,
      initialSlide: 0,
      centeredSlides: false,
    },
    767: {
      slidesPerView: 2.4,
      spaceBetween: 15,
      initialSlide: 0,
      centeredSlides: false,
    },
    800: {
      slidesPerView: 2.6,
      spaceBetween: 15,
      centeredSlides: false,
      initialSlide: 0,
    },
    900: {
      slidesPerView: 3,
      spaceBetween: 15,
      initialSlide: 0,
      centeredSlides: false,
    },
    1100: {
      slidesPerView: 3.6,
      spaceBetween: 15,
      centeredSlides: true,
    },
    1360: {
      slidesPerView: 4.4,
      spaceBetween: 15,
      centeredSlides: true,
    },
    1626: {
      slidesPerView: 5.1,
      spaceBetween: 30,
      centeredSlides: true,
      initialSlide: 1,
    },
    1850: {
      slidesPerView: 5.9,
      spaceBetween: 30,
      centeredSlides: true,
      initialSlide: 1,
    }
  }
});


var swiper = new Swiper(".mySwiperQuote", {
  pagination: {
    el: ".swiper-pagination",
  },
});

$(function () {
  $('.marquee').marquee({
    duration: 12000,
    startVisible: true,
    duplicated: true
  });
});


$('.faq-card').click(function () {
  $(this).toggleClass('active');
});


var swiper = new Swiper(".mySwiperSertificates", {
  slidesPerView: 2.41,
  spaceBetween: 150,
  loop: true,
  centeredSlides: true,
  navigation: {
    nextEl: ".swiperSertificates-next",
    prevEl: ".swiperSertificates-prev",
  },
  pagination: {
    el: ".swiperSertificates-pagination",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 50
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 100
    },
    // when window width is >= 640px
    900: {
      slidesPerView: 2.41,
      spaceBetween: 150
    }
  }
});



var swiper = new Swiper(".mySwiperQuestion", {
  spaceBetween: 50,
  mousewheel: false,
  slidesPerView: 1,
  allowTouchMove: false,
  // initialSlide: 7,
  observer: true,
  observeParents: true,
  observeSlideChildren: true,
  navigation: {
    nextEl: ".mySwiperQuestion-next",
    prevEl: ".mySwiperQuestion-prev",
  },
});


$('.container-radio').click(function () {
  var $parentContainer = $(this).closest('.radio-items'); // Замените '.parent-container' на селектор вашего контейнера
  if ($(this).find('input[type="radio"]').is(':checked')) {
    $parentContainer.find('.container-radio').removeClass('active');
    $(this).addClass('active');
  } else {
    $(this).removeClass('active');
  }
});


function toggleExperienceInput(enabled) {
  var experienceInput = document.getElementById("experienceInput");
  experienceInput.disabled = !enabled;
  var mainlabel = document.getElementById("mainlabel");
  var childlabel = document.getElementById("childlabel");

  if (experienceInput.disabled) {
    mainlabel.style.color = "#A0A0A0";
    childlabel.style.color = "#A0A0A0";
  } else {
    mainlabel.style.color = "#212121";
    childlabel.style.color = "#676767";
  }
}


function checkInput() {
  const inputElement = document.getElementById("registerpassword");
  const placeholderElement = document.querySelector(".placeholder");

  if (inputElement.value.trim() !== "") {
    placeholderElement.style.display = "none";
  } else {
    placeholderElement.style.display = "block";
  }
}



document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab-dropdown");
  const tabContents = document.querySelectorAll(".tab-content-dropdown");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      const tabId = tab.getAttribute("data-tab");

      tabContents.forEach((content) => {
        content.style.display = "none";
      });

      document.getElementById(tabId).style.display = "flex";
      // Удаляем класс "active" у всех табов
      tabs.forEach((t) => {
        t.classList.remove("active");
      });

      // Добавляем класс "active" только активному табу
      tab.classList.add("active");
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab-dropdown-inner");
  const tabContents = document.querySelectorAll(".tab-content-dropdown-inner");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      const tabId = tab.getAttribute("data-tab");

      tabContents.forEach((content) => {
        content.style.display = "none";
      });

      document.getElementById(tabId).style.display = "flex";
      // Удаляем класс "active" у всех табов
      tabs.forEach((t) => {
        t.classList.remove("active");
      });

      // Добавляем класс "active" только активному табу
      tab.classList.add("active");
    });
  });
});


document.addEventListener("DOMContentLoaded", function () {
  const checkboxes = document.querySelectorAll(".custom-checkbox-selected .container input[type='checkbox']");

  checkboxes.forEach(function (checkbox) {
    const container = checkbox.closest(".custom-checkbox-selected .container");
    if (!checkbox.checked) {
      container.style.backgroundColor = "#E5E7E9";
      container.style.color = "#9E9E9E";
    }
    checkbox.addEventListener("change", function () {
      const container = this.closest(".custom-checkbox-selected .container");
      if (!this.checked) {
        container.style.backgroundColor = "#E5E7E9";
        container.style.color = "#9E9E9E";
      } else {
        container.style.backgroundColor = "";
        container.style.color = "";
      }
    });
  });
});


const showRadio = document.getElementById('showRadio');
const hideRadio = document.getElementById('hideRadio');
const block = document.getElementById('hiddenBlock');

// Добавляем обработчики событий при изменении состояния радиокнопок
if (showRadio) {
  showRadio.addEventListener('change', function () {
    if (showRadio.checked) {
      block.style.display = 'flex'; // Показываем блок
    }
  });
}
if (hideRadio) {
  hideRadio.addEventListener('change', function () {
    if (hideRadio.checked) {
      block.style.display = 'none'; // Скрываем блок
    }
  });
}


$('.show-add-options').click(function () {
  $('.option-item').toggleClass('active')
});


const customSelects = document.querySelectorAll('#mobiledropdown1 .custom-select');

customSelects.forEach((customSelect, index) => {
  const selectItemsDivs = customSelect.querySelectorAll('.select-items div');

  selectItemsDivs.forEach((selectItem, tabIndex) => {
    selectItem.classList.add('tab-dropdown');
    selectItem.setAttribute('data-tab', `tab${tabIndex + 1}`);
  });
});



const customSelects1 = document.querySelectorAll('#mobiledropdown2 .custom-select');

customSelects1.forEach((customSelect1, index1) => {
  const selectItemsDivs1 = customSelect1.querySelectorAll('.select-items div');

  selectItemsDivs1.forEach((selectItem1, tabIndex1) => {
    selectItem1.classList.add('tab-dropdown-inner');
    selectItem1.setAttribute('data-tab', `tab${tabIndex1 + 6 + 1}`);
  });
});



const customSelects2 = document.querySelectorAll('#mobiledropdown3 .custom-select');

customSelects2.forEach((customSelect2, index2) => {
  const selectItemsDivs2 = customSelect2.querySelectorAll('.select-items div');

  selectItemsDivs2.forEach((selectItem2, tabIndex2) => {
    selectItem2.classList.add('tab-dropdown');
    selectItem2.setAttribute('data-tab', `tab${tabIndex2 + 1}`);
  });
});




$(function () {
  // Устанавливаем первым днем недели понедельник (по умолчанию 0 - воскресенье)
  $.datepicker.setDefaults({
    firstDay: 1,
    dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
    monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь']
  });

  // Список конкретных дат, которые будут неактивными (в формате 'гггг-мм-дд')
  var disabledDates = ['2023-09-05', '2023-09-12', '2023-09-19'];

  // Инициализируем Datepicker
  $('#datepicker').datepicker({
    dateFormat: 'DD, d MM yy',
    beforeShowDay: function (date) {
      // Преобразуем текущую дату в формат 'гггг-мм-дд' для сравнения
      var formattedDate = $.datepicker.formatDate('yy-mm-dd', date);

      // Проверяем, является ли текущая дата неактивной
      var isInactive = (disabledDates.indexOf(formattedDate) !== -1);

      // Возвращаем результат, указывая, активен ли день, и класс для стилизации (если нужно)
      return [!isInactive, ''];
    }
  });
});

// Получаем элемент инпута
var timeInput = document.getElementById('timeInput');

// Добавляем обработчик события на клик
if (timeInput) {
  timeInput.addEventListener('click', function () {
    // Устанавливаем значение инпута в пустую строку
    timeInput.value = '';

    // Добавляем маску "__:__" в инпут
    timeInput.placeholder = '__:__';
  });
}
if (timeInput) {
  // Добавляем обработчик события на убирание фокуса (клик вне инпута)
  timeInput.addEventListener('blur', function () {
    // Если значение инпута пустое, возвращаем маску "__:__"
    if (timeInput.value === '') {
      timeInput.placeholder = 'Укажите время консультации';
    }
  });
}
// Добавляем обработчик события на изменение значения инпута
if (timeInput) {
  timeInput.addEventListener('input', function () {
    // Оставляем только цифры введенного значения
    var inputValue = timeInput.value.replace(/\D/g, '');

    // Форматируем введенное значение как "99:99"
    if (inputValue.length >= 4) {
      var hours = inputValue.slice(0, 2);
      var minutes = inputValue.slice(2, 4);
      timeInput.value = hours + ':' + minutes;
    }
  });
}


// JavaScript код
const input = document.getElementById('message-input');
const buttons = document.querySelectorAll('.message-container .buttons a');
if (input) {
  input.addEventListener('focus', () => {
    // При фокусировке на input изменяем src изображений внутри <a>
    buttons.forEach(button => {
      const img = button.querySelector('img');
      if (img) {
        // Заменяем src изображения на значение data-src
        const dataSrc = button.getAttribute('data-src');
        img.src = dataSrc;
      }
    });
  });
}
if (input) {
  input.addEventListener('blur', () => {
    // При потере фокуса возвращаем изображения обратно
    buttons.forEach(button => {
      const img = button.querySelector('img');
      if (img) {
        img.src = img.getAttribute('alt'); // Возвращаем исходные изображения
      }
    });
  });
}


// Получаем ссылку "Редактировать" и инпуты
const editButton = document.getElementById("editButton");
const saveButton = document.getElementById("saveButton");
const nameInput = document.getElementById("nameInput");
const birthdateInput = document.getElementById("birthdateInput");
const phoneInput = document.getElementById("phoneInput");
const emailInput = document.getElementById("emailInput");

// Обработчик события клика на ссылке "Редактировать"
if (editButton) {
  editButton.addEventListener("click", function (event) {
    event.preventDefault(); // Предотвращаем переход по ссылке

    // Включаем редактирование для двух последних инпутов
    phoneInput.disabled = false;
    emailInput.disabled = false;

    // Скрываем ссылку "Редактировать" и показываем кнопку "Сохранить изменения"
    editButton.style.display = "none";
    saveButton.style.display = "inline-block";
  });
}
// Обработчик события клика на кнопке "Сохранить изменения"
if (saveButton) {
  saveButton.addEventListener("click", function (event) {
    event.preventDefault(); // Предотвращаем переход по кнопке

    // Здесь можно добавить код для сохранения изменений (например, отправку данных на сервер)

    // Выключаем редактирование для всех инпутов
    nameInput.disabled = true;
    birthdateInput.disabled = true;
    phoneInput.disabled = true;
    emailInput.disabled = true;

    // Скрываем кнопку "Сохранить изменения" и показываем ссылку "Редактировать"
    saveButton.style.display = "none";
    editButton.style.display = "flex";
  });
}


var swiper = new Swiper(".mySwiperCards", {
  allowTouchMove: true,
  // slidesPerView: 2,
  spaceBetween: 15,
  breakpoints: {
    // Когда ширина экрана меньше или равна 768px
    320: {
      slidesPerView: 1.2, // Количество видимых слайдов
      allowTouchMove: true,
    },
    480: {
      slidesPerView: 2.2, // Количество видимых слайдов
      allowTouchMove: true,
    },
    576: {
      slidesPerView: 2.4, // Количество видимых слайдов
      allowTouchMove: true,
    },
    768: {
      slidesPerView: 'auto', // Количество видимых слайдов
      allowTouchMove: false,
      spaceBetween: 0,
    },
  },
  pagination: {
    el: ".swiper-pagination-cards",
  },
});


$('.time-items .time-item:not(.nonactive)').click(function () {
  $('.time-items .time-item').removeClass('active')
  $(this).addClass('active')
});



document.addEventListener("DOMContentLoaded", function () {
  var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
  // console.log(scrollbar);
  if (input) {
    document.querySelector('[href="#openModal"]').addEventListener('click', function () {
      document.body.style.overflow = 'hidden';
      document.querySelector('#openModal').style.marginLeft = scrollbar;
    });
  }
  if (input) {
    document.querySelector('[href="#close"]').addEventListener('click', function () {
      document.body.style.overflow = 'visible';
      document.querySelector('#openModal').style.marginLeft = '0px';
    });
  }
});


var swiper = new Swiper(".mySwiperCurrency", {
  pagination: {
    el: ".swiper-paginationcurrency",
  },
  breakpoints: {
    320: {
      slidesPerView: 1.5,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    480: {
      slidesPerView: 1.9,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    600: {
      slidesPerView: 2.2,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    712: {
      slidesPerView: 3,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    872: {
      slidesPerView: 3.5,
      spaceBetween: 30,
    },
    1050: {
      slidesPerView: 4.55,
      spaceBetween: 30,
    },
  },
});


var swiper = new Swiper(".mySwiperCurrencyMainPage", {
  slidesPerView: 3,
  pagination: {
    el: ".swiper-paginationcurrency",
  },
  breakpoints: {
    320: {
      slidesPerView: 1.2,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    480: {
      slidesPerView: 1.9,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    600: {
      slidesPerView: 2,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    712: {
      slidesPerView: 2,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    1220: {
      slidesPerView: 3,
      allowTouchMove: false,
      spaceBetween: 12,
    },
  },
});


$('.mySwiperCurrency .swiper-wrapper .swiper-slide .container-radio').click(function () {
  $('.mySwiperCurrency .swiper-wrapper .swiper-slide .container-radio').removeClass('active');
  $(this).addClass('active');
});

var swiper = new Swiper(".mySwiperAppointmentConsult", {
  slidesPerView: 4.8,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination-AppointmentConsult",
  },
  breakpoints: {
    320: {
      slidesPerView: 1.2,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    480: {
      slidesPerView: 1.9,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    600: {
      slidesPerView: 2.2,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    712: {
      slidesPerView: 3,
      // allowTouchMove: false,
      spaceBetween: 15,
    },
    872: {
      slidesPerView: 3.5,
      spaceBetween: 30,
    },
    1050: {
      slidesPerView: 4.55,
      spaceBetween: 30,
    },
  },
});


var swiper = new Swiper(".mySwiperSpecialistFeedbacks", {
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: ".swiper-pagination-mySwiperSpecialistFeedbacks",
  },
});


if (window.innerWidth <= 768) {
  var swiper = new Swiper(".mySwiperNewsCards", {
    slidesPerView: 1.2,
    pagination: {
      el: ".swiper-pagination-newsswiper",
    },
    breakpoints: {
      320: {
        slidesPerView: 1.2,
        spaceBetween: 0,
      },
      480: {
        slidesPerView: 1.4,
        spaceBetween: 0,
      },
      575: {
        slidesPerView: 1.6,
        spaceBetween: 0,
      },
      640: {
        slidesPerView: 2.1,
        spaceBetween: 0,
      },
    },
  });
}