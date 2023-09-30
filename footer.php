<link rel="stylesheet" href="./assets/css/animate.css" type="text/css" />
<!-- FOR MODAL -->
<script src="./assets/js/classie.js"></script>
<script src="./assets/js/modalEffects.js"></script>
<script src="./assets/js/cssParser.js"></script>
<!-- FOR MODAL -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/jquery.maskedinput.js"></script>
<script src="./assets/js/wow.min.js"></script>

<!-- https://github.com/verlok/vanilla-lazyload#-getting-started---html -->
<script src="./assets/js/lazyload.js"></script>

<!-- Counter -->
<script src="./assets/js/counter/jquery.cookie.js"></script>
<script src="./assets/js/counter/jquery.plugin.js"></script>
<script src="./assets/js/counter/jquery.countdown.js"></script>
<script src="./assets/js/counter/jquery.countdown-ru.js"></script>
<script>
    var endDateTime = new Date();
    var nowDateTime = new Date(3600 * 24 * 1000);
</script>
<!-- End Counter -->
<script src="https://www.youtube.com/iframe_api"></script>
<script src="./assets/js/script.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
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
</script>
<script>
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
</script>
<script>
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
                slidesPerView: 2.8,
                spaceBetween: 15,
                centeredSlides: false,
                initialSlide: 0,
            },
            900: {
                slidesPerView: 3.2,
                spaceBetween: 15,
                initialSlide: 0,
                centeredSlides: false,
            },
            1100: {
                slidesPerView: 3.8,
                spaceBetween: 15,
                centeredSlides: true,
            },
            1360: {
                slidesPerView: 4.8,
                spaceBetween: 15,
                centeredSlides: true,
            },
            1626: {
                slidesPerView: 5.9,
                spaceBetween: 30,
                centeredSlides: true,
                initialSlide: 1,
            }
        }
    });
</script>
<script>
    var swiper = new Swiper(".mySwiperQuote", {
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
<script>
    $(function () {
        $('.marquee').marquee({
            duration: 12000,
            startVisible: true,
            duplicated: true
        });
    });
</script>
<script>
    $('.faq-card').click(function () {
        $(this).toggleClass('active');
    });
</script>
<script>
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
</script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiperQuestion", {
        spaceBetween: 50,
        mousewheel: false,
        slidesPerView: 1,
        allowTouchMove: false,
        navigation: {
            nextEl: ".mySwiperQuestion-next",
            prevEl: ".mySwiperQuestion-prev",
        },
    });
</script>
<script>
    $('.container-radio').click(function () {
        var $parentContainer = $(this).closest('.radio-items'); // Замените '.parent-container' на селектор вашего контейнера
        if ($(this).find('input[type="radio"]').is(':checked')) {
            $parentContainer.find('.container-radio').removeClass('active');
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });
</script>
<script>
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
</script>
<script>
    function checkInput() {
        const inputElement = document.getElementById("registerpassword");
        const placeholderElement = document.querySelector(".placeholder");

        if (inputElement.value.trim() !== "") {
            placeholderElement.style.display = "none";
        } else {
            placeholderElement.style.display = "block";
        }
    }

</script>
<script>
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
</script>
<script>
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
</script>
<script>
    const showRadio = document.getElementById('showRadio');
    const hideRadio = document.getElementById('hideRadio');
    const block = document.getElementById('hiddenBlock');

    // Добавляем обработчики событий при изменении состояния радиокнопок
    showRadio.addEventListener('change', function () {
        if (showRadio.checked) {
            block.style.display = 'flex'; // Показываем блок
        }
    });

    hideRadio.addEventListener('change', function () {
        if (hideRadio.checked) {
            block.style.display = 'none'; // Скрываем блок
        }
    });
</script>
<script>
    $('.show-add-options').click(function () {
        $('.option-item').toggleClass('active')
    });
</script>
<script>
    const customSelects = document.querySelectorAll('#mobiledropdown1 .custom-select');

    customSelects.forEach((customSelect, index) => {
        const selectItemsDivs = customSelect.querySelectorAll('.select-items div');

        selectItemsDivs.forEach((selectItem, tabIndex) => {
            selectItem.classList.add('tab-dropdown');
            selectItem.setAttribute('data-tab', `tab${tabIndex + 1}`);
        });
    });

</script>
<script>
    const customSelects1 = document.querySelectorAll('#mobiledropdown2 .custom-select');

    customSelects1.forEach((customSelect1, index1) => {
        const selectItemsDivs1 = customSelect1.querySelectorAll('.select-items div');

        selectItemsDivs1.forEach((selectItem1, tabIndex1) => {
            selectItem1.classList.add('tab-dropdown-inner');
            selectItem1.setAttribute('data-tab', `tab${tabIndex1 + 6 + 1}`);
        });
    });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
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
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
<script>
    // Получаем элемент инпута
    var timeInput = document.getElementById('timeInput');

    // Добавляем обработчик события на клик
    timeInput.addEventListener('click', function () {
        // Устанавливаем значение инпута в пустую строку
        timeInput.value = '';

        // Добавляем маску "__:__" в инпут
        timeInput.placeholder = '__:__';
    });

    // Добавляем обработчик события на убирание фокуса (клик вне инпута)
    timeInput.addEventListener('blur', function () {
        // Если значение инпута пустое, возвращаем маску "__:__"
        if (timeInput.value === '') {
            timeInput.placeholder = 'Укажите время консультации';
        }
    });
    // Добавляем обработчик события на изменение значения инпута
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
</script>
<script>
    // JavaScript код
    const input = document.getElementById('message-input');
    const buttons = document.querySelectorAll('.message-container .buttons a');

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

    input.addEventListener('blur', () => {
        // При потере фокуса возвращаем изображения обратно
        buttons.forEach(button => {
            const img = button.querySelector('img');
            if (img) {
                img.src = img.getAttribute('alt'); // Возвращаем исходные изображения
            }
        });
    });
</script>
<script>
    // Получаем ссылку "Редактировать" и инпуты
    const editButton = document.getElementById("editButton");
    const saveButton = document.getElementById("saveButton");
    const nameInput = document.getElementById("nameInput");
    const birthdateInput = document.getElementById("birthdateInput");
    const phoneInput = document.getElementById("phoneInput");
    const emailInput = document.getElementById("emailInput");

    // Обработчик события клика на ссылке "Редактировать"
    editButton.addEventListener("click", function (event) {
        event.preventDefault(); // Предотвращаем переход по ссылке

        // Включаем редактирование для двух последних инпутов
        phoneInput.disabled = false;
        emailInput.disabled = false;

        // Скрываем ссылку "Редактировать" и показываем кнопку "Сохранить изменения"
        editButton.style.display = "none";
        saveButton.style.display = "inline-block";
    });

    // Обработчик события клика на кнопке "Сохранить изменения"
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

</script>
<script>
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
</script>
<script>
    $('.time-items .time-item:not(.nonactive)').click(function () {
        $('.time-items .time-item').removeClass('active')
        $(this).addClass('active')
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
        console.log(scrollbar);
        document.querySelector('[href="#openModal"]').addEventListener('click', function () {
            document.body.style.overflow = 'hidden';
            document.querySelector('#openModal').style.marginLeft = scrollbar;
        });
        document.querySelector('[href="#close"]').addEventListener('click', function () {
            document.body.style.overflow = 'visible';
            document.querySelector('#openModal').style.marginLeft = '0px';
        });
    });
</script>
<script>
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
</script>
<script>
    $('.mySwiperCurrency .swiper-wrapper .swiper-slide .container-radio').click(function () {
        $('.mySwiperCurrency .swiper-wrapper .swiper-slide .container-radio').removeClass('active');
        $(this).addClass('active');
    });
</script>
<!-- Initialize Swiper -->
<script>
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
</script>
</body>

</html>