<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="js/picturefill.min.js" async="async"></script>

    <link rel="preload" href="fonts/Roboto-Light.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="fonts/Roboto-Regular.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="fonts/Roboto-Medium.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="fonts/Roboto-Bold.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="fonts/SeoulNamsan-ExtraBold.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="fonts/SeoulNamsan-L.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="fonts/Share-Bold.woff2" as="font" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container container--header">
        <div class="header">
        <a href="index.html" class="header-logo">
            <picture>
            <source type='image/webp' srcset='<?php echo get_template_directory_uri();?>/img/logo.webp'>
            <img width='30' height='31' src='<?php echo get_template_directory_uri();?>/img/logo.png' alt='logo'>
            </picture>
        </a>

        <div class="header__item">
            <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item">
                <a href="#" class="nav__link">
                    ГЛАВНАЯ
                </a>
                </li>
                <li class="nav__item">
                <a href="#" class="nav__link">
                    О КЛИНИКЕ
                </a>
                </li>
                <li class="nav__item">
                <a href="#" class="nav__link">
                    УСЛУГИ
                </a>
                </li>
                <li class="nav__item">
                <a href="#" class="nav__link">
                    КОНТАКТЫ
                </a>
                </li>
            </ul>
            </nav>

            <div class="header-lang">
                <div class='select'>
                <div class='select__header'>
                    <span class='select__current'>RU</span>
                    <div class='select__icon'>
                    <svg width="8" height="5" >
                        <use href='<?php echo get_template_directory_uri();?>/img/sprite/sprite.svg#arrow-bottom'></use>
                    </svg>
                    </div>
                </div>
                <div class='select__body'>
                    <ul class='select__wrapp'>
                    <li class='select__item' data-choice='choosen'>
                        <span>RU</span>
                    </li>
                    <li class='select__item' data-choice='choosen'>
                        <span>EN</span>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <ul class="header-phones">
            <li class="header-phones__item">
                <a href="tel:+080036999" class="header-phones__link">+0 800 369 99 </a>
            </li>
            <li class="header-phones__item">
                <a href="tel:+080036999" class="header-phones__link">+0 800 369 99 </a>
            </li>
            </ul>

        </div>

        <button class="mobile-burger">
            <span></span>
            <span></span>
            <span></span>
        </button>

        </div>
    </div>
</header>
<main>