<?php
/*
Template Name: zip
*/
?>
<?php
$lang  = "ru";
if(isset($_GET["lang"])){
    $lang = $_GET["lang"];
}
$Language = parse_ini_file(get_template_directory() ."/language/$lang.ini");
?>
<?php get_header(); ?>
<div class="AppContent">
    <div class="container">
        <header>
            <div class="header_left">
                <div class="header_left_title_text wow animate__animated animate__fadeInLeft">
                    <h1>Original zip</h1>
                    <span></span>
                </div>
                <p class="wow animate__animated animate__fadeInLeft"><?php echo $Language["header_subtitle"] ?> </p>
                <div class="header_button wow animate__animated animate__fadeInLeft">
                    <a href="#"><?php echo $Language["buy"] ?></a>
                </div>
            </div>
            <div class="header_right">
                <div class="swiper-container mySwiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p4.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p3.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p2.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p10.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p5.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p6.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p7.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p8.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p9.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p1.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p11.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p12.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p13.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p14.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p15.png"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/product/p16.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="logo-slider">
        <div class="logos-slide" data-v-4ef8651c="">
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo/l1.png" data-v-4ef8651c="" alt=""/>
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo/l2.png" data-v-4ef8651c=""/>
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo/l3.png" data-v-4ef8651c=""/>
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo/l4.png" data-v-4ef8651c=""/>
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo/l5.png" data-v-4ef8651c=""/>
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo/l6.png" data-v-4ef8651c=""/>
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo/l7.png" data-v-4ef8651c=""/>
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo/l8.png" data-v-4ef8651c=""/>
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo/l9.png" data-v-4ef8651c=""/>
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo/l10.png" data-v-4ef8651c=""/>
        </div>
    </div>

    <div class="container">
        <section class="about">
            <div class="about_box">
                <div class="header_left_title_text wow animate__animated animate__fadeInLeft">
                    <h1><?php echo $Language["company"] ?></h1>
                    <span></span>
                </div>
                <div class="about_title wow animate__animated animate__fadeInLeft">
                    <p><?php echo $Language["aboutP1"] ?></p>
                </div>
                <div class="about_text_box">
                    <div class="about_text_box_left wow animate__animated animate__fadeInLeft">
                        <p><?php echo $Language["aboutP2"] ?></p>
                        <p><?php echo $Language["aboutP3"] ?></p>
                        <p><?php echo $Language["aboutP4"] ?></p>
                    </div>
                    <div class="about_text_box_right wow animate__animated animate__fadeInRight">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/icon/about_icon.png" alt="О компании Original zip">
                    </div>
                </div>
                <div class="about_title_footer wow animate__animated animate__fadeInLeft">
                    <p><?php echo $Language["aboutP5"] ?></p>
                </div>
            </div>
        </section>

        <section class="fact">
            <div class="fact_box">
                <div class="header_left_title_text wow animate__animated animate__fadeInLeft">
                    <h1><?php echo $Language["fact"] ?></h1>
                    <span></span>
                </div>
                <h2 class="wow animate__animated animate__fadeInLeft"><?php echo $Language["fact_title"] ?></h2>
                <p class="wow animate__animated animate__fadeInLeft"><?php echo $Language["fact_desc"] ?></p>
            </div>
        </section>

        <section class="contact">
            <div class="contact_box">
                <div class="contact_title  wow animate__animated animate__fadeInLeft">
                    <h1><?php echo $Language["contact_title"] ?></h1>
                    <div class="contact_subtitle wow animate__animated animate__fadeInLeft">
                        <h2><?php echo $Language["contact_title2"] ?></h2>
                        <span></span>
                    </div>
                </div>

                <form action="<?php bloginfo('template_url') ?>/telegram.php" method="POST" class="contact_form" onsubmit="return validateForm()">
                    <div class="form_comment wow animate__animated animate__fadeInLeft">
                        <textarea id="comments" rows="10" cols="30" name="comment"></textarea>
                        <label for="comments" style="width: 100%"><?php echo $Language["comment"] ?></label>
                    </div>

                    <div class="form_comment form_col2 wow animate__animated animate__fadeInLeft">
                        <div class="input_FIO">
                            <input type="text" name="fio" required>
                            <label for="FIO"><?php echo $Language["fio"] ?></label>
                        </div>

                        <div class="input_box">
                            <div class="input_box_item">
                                <input type="text" name="company" required>
                                <label for="comments"><?php echo $Language["companyLabel"] ?></label>
                            </div>

                            <div class="input_box_item">
                                <input type="text" name="job" required>
                                <label for="comments"><?php echo $Language["job"] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="form_comment form_end wow animate__animated animate__fadeInRight">
                        <input type="text" name="phone" value="+998 " required oninput="phoneInput(event)" onfocus="this.select()">
                        <label for="comments"><?php echo $Language["phone"] ?></label>
                        <button type="submit"><?php echo $Language["send"] ?></button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

<footer>
    <div class="footer_top wow animate__animated animate__fadeInLeft">
        <a href="#"><img src="<?php bloginfo('template_url') ?>./assets/img/icon/facebook.png" alt=""></a>
        <a href="https://www.instagram.com/originalzipp?igsh=MXM4ZGRmdGZrdTFjNw=="><img src="<?php bloginfo('template_url') ?>./assets/img/icon/instagram.png" alt=""></a>
        <a href="#"><img src="<?php bloginfo('template_url') ?>./assets/img/icon/telegram.png" alt=""></a>
        <a href="#"><img src="<?php bloginfo('template_url') ?>./assets/img/icon/whatsapp.png" alt=""></a>
    </div>
    <div class="footer_bottom wow animate__animated animate__fadeInLeft">
        <a href="tel:+998900946968">+998(90)094-69-68</a>
        <a href="tel:+998901236968">+998(90)123-69-68</a>
    </div>
</footer>

<script>
    function phoneInput(e) {
        const formattedValue = e.target.value.replace(/\D/g, ''); // Accept only numbers
        let formattedNumber = '+998';

        if (formattedValue.length > 3) {
            formattedNumber += ' ' + formattedValue.substring(3, 5);
        }
        if (formattedValue.length > 5) {
            formattedNumber += ' ' + formattedValue.substring(5, 8);
        }
        if (formattedValue.length > 8) {
            formattedNumber += ' ' + formattedValue.substring(8, 10);
        }
        if (formattedValue.length > 10) {
            formattedNumber += ' ' + formattedValue.substring(10, 12);
        }

        e.target.value = formattedNumber; // Update the input field with the formatted number
    }

    function validateForm() {
        const phoneInput = document.querySelector('input[name="phone"]');
        const phoneValue = phoneInput.value.replace(/\D/g, ''); // Remove non-digit characters

        // Validate that the phone number has the expected length after +998
        if (phoneValue.length !== 9) { // +998 + 9 digits
            alert('<?php echo $Language["error_tell"] ?>');
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }
</script>

<?php get_footer(); ?>
