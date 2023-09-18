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
    });
</script>
</body>

</html>