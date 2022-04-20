<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="ONESPARK AGENCJA KREATYWNA">
    <title>onespark</title>

    <!--  css links  -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/app.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/fonts/Creolia/Creolia.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href=https://use.typekit.net/dgn6ynf.css>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/hamburgers-master/dist/hamburgers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" >
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <base href="<?php echo get_home_url()?>/">

    <script src="<?echo get_template_directory_uri();?>/js/scrollControl.js"></script>
    <script src="<?echo get_template_directory_uri();?>/js/fadeControl.js"></script>
    <script src="<?echo get_template_directory_uri();?>/js/headerControl.js"></script>
    <script src="<?echo get_template_directory_uri();?>/js/WOW-master/dist/wow.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <?php // wp_head(); ?>
</head>
<?php
    if(get_post_type() == "nasze_projekty"){
        $additional = "project-template";
    }
?>
<body class="item__color__black <?echo $additional?> scrollable" data-scrollbar>
<div id="customDefaultId" class="fadeIn">
<noscript>
    <section class="component__standardSection component_standardSection__variableHeight js-changeColor font__color__black">
        <div class="container text-center">
            <h1 class=" font__size__68 font__color__white">You need JavaScript enabled to run this website!</h1>
        </div>
    </section>
</noscript>
    <header class="main-header component__header py-3">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto"><img style="cursor: pointer;" onclick="window.location.href='<?php echo get_home_url()?>/'" src="<?php the_field("logotyp", "options")?>" alt="Onespark Creative Agency Logo Sygnet" class="w-100"></div>
                <div class="col d-none d-xl-block"></div>
                <div class="col-auto">
                    <div class="row align-items-center component__menuWrapperHidden">
                        <nav class="col-lg-auto component__navbar">
                            <?php
                                $args = array (
                                    'menu' => 'headerMenu',
                                    'menu_class' => 'row align-items-center m-0',
                                );
                                wp_nav_menu( $args );
                            ?>
                        </nav>
                        <div class="col-lg-auto component__btn-challenge__container">
                            <p class="text-end component__language"><a href="#">PL</a> <span class="d-inline-block mx-2">|</span> <a href="#">EN</a></p>
                            <a href="kontakt/" class="item__btn component__btn-challenge font__color__green font__weight__7">Masz dla nas wyzwanie?</a>
                        </div>
                    </div>
                    <div class="d-lg-none hamburger hamburger--slider js-hamburger" onclick="this.classList.toggle('is-active'); document.getElementsByClassName('component__menuWrapperHidden')[0].classList.toggle('is-active'); document.getElementsByClassName('firstFromTop')[0].classList.toggle('header-is-active')">
                        <div class="hamburger-box">
                          <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="firstFromTop"></div>