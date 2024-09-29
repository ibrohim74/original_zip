<?php
wp_footer(); ?>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script type="application/javascript">
    const matchMedia = window.matchMedia("(max-width:800px)")
    var copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logo-slider").appendChild(copy);

    if (matchMedia.matches) {
        new Swiper(".mySwiper", {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 80,
                depth: 200,
                modifier: 1,
                slideShadows: false,
            },


            loop: true,
            autoplay: true
        });
    } else {
        new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            fadeEffect: {crossFade: true},
            loop: true,
            autoplay: true
        });
    }


</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>
