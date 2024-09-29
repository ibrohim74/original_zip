
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Original zip</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/index.css">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="<?php bloginfo('template_url') ?>/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <?php wp_head(); ?>
</head>
<body>

<div class="lang_box">
    <div class="lang_view">
        <?php
        if (isset($_GET["lang"]) && $_GET["lang"] === "ru") {
            echo '<img src="' . get_template_directory_uri() . '/assets/img/icon/uz.svg" alt="Uzbek Flag">';

        } else {
            echo '<img src="' . get_template_directory_uri() . '/assets/img/icon/ru.svg" alt="Russian Flag">';
        }
        ?>
    </div>
    <div class="lang_link">
        <a href="?lang=ru"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/ru.svg" alt="Russian"></a>
        <a href="?lang=uz"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/uz.svg" alt="Uzbek"></a>
    </div>
</div>
