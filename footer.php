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

        // Добавляем код для адаптивных табов
        const screenWidth = window.innerWidth;
        if (screenWidth <= 768) {
            // Преобразовываем табы в выпадающий список
            const tabList = document.createElement("select");
            tabList.className = "mobile-tab-list";

            tabs.forEach((tab) => {
                const option = document.createElement("option");
                option.value = tab.getAttribute("data-tab");
                option.text = tab.innerText;
                tabList.appendChild(option);
            });

            tabList.addEventListener("change", () => {
                const selectedTabId = tabList.value;
                tabContents.forEach((content) => {
                    content.style.display = "none";
                });
                document.getElementById(selectedTabId).style.display = "flex";

            });

            // Вставляем выпадающий список после табов
            const tabsContainer = document.querySelector(".tabs-dropdown");
            tabsContainer.appendChild(tabList);
        }
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
</body>

</html>