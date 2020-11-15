<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/index.min.css" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title><?php echo get_bloginfo('name')?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="navigation">
          
            <a class="navigation__logo-link" href="<?php echo get_bloginfo('wpurl')?>">
                <img src="<?php bloginfo('template_url')?>/img/logo.svg" alt="logo" class="navigation__logo"
            /></a>
            <ul id="menu" class="navigation__menu">
                <li class="navigation__item">
                    <a class="navigation__link" href="#">o nas</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="">oferta</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href=""
                        >towarzystwa ubezpieczeń</a
                    >
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="">dołącz do nas</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="">przydatne materiały</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="">oddziały</a>
                </li>
            </ul>
            <div id="burger" class="navigation__burger burger">
                <div class="burger__frame burger__frame--1"></div>
                <div class="burger__frame burger__frame--2"></div>
                <div class="burger__frame burger__frame--3"></div>
            </div>
        </nav>

        <header class="banner">
            <section class="banner__cover">
                <h1 class="banner__title">Ubezpieczenia majątkowe</h1>
                <h2 class="banner__subtitle">
                    Skontaktuj się z nami i skorzystaj ze specjalnej oferty!
                </h2>
            </section>
            <form class="banner__form form clearfix">
                <h4 class="form__title">
                    Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę
                </h4>
                <input
                    class="form__input"
                    placeholder="Imię i nazwisko"
                    type="text"
                />
                <input
                    class="form__input"
                    placeholder="Adres e-mail"
                    type="email"
                />
                <input
                    class="form__input"
                    placeholder="Nr telefonu"
                    type="tel"
                />
                <input
                    class="form__input form__input--city"
                    placeholder="Miejscowość"
                    type="text"
                />
                <input
                    class="form__input form__input--postal-code"
                    placeholder="Kod pocztowy"
                    type="tel"
                    pattern="[0-9]{2}[-][0-9]{3}"
                />
                <div class="form__checkbox-container">
                    <input
                        class="form__checkbox"
                        type="checkbox"
                        name=""
                        id="checkbox"
                    />

                    <div class="form__agreement">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et
                        dolore magna aliquyam erat, sed diam voluptua. At vero
                        eos et accusam et justo duo dolores et ea rebum. Stet
                        clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat,
                        sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum.
                    </div>
                </div>
                <button class="form__button button">Wyślij</button>
            </form>
        </header>
