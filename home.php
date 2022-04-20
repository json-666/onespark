<?php
    get_header();
?>
<section class="component__standardSection component__standardSection__variableHeight js-changeColor font__color__black item__color__white">
    <div class="container text-start component__blogspot">
        <div class="row">
            <div class="col-lg-6 offset-lg-1">
                <h1 class=" font__size__68"><span class=" font__color__green">Zawsze aktualna</span><br/>porcja informacji o&nbsp;projektowaniu i&nbsp;marketingu</h1>
            </div>
        </div>

        <?php
        //fetch posts ids
        $all_posts = get_posts();
        $wierszy = count( $all_posts ) / 2;
        $postLP = 0;
        for($i = 0; $i < ceil($wierszy); $i++){
        ?>
            <div class="row component__blogspot__items justify-content-end">
                <?php for($j = 0; $j < 2; $j++){ $postLP++;
                    if( $postLP > count( $all_posts ) ){
                        continue;
                    }
                    ?>
                <div class="col-lg-6 text-center text-lg-start component__blogspot__items__wrapper <?php if($j == 0 && $postLP < count( $all_posts )){echo "component__blogspot__items__wrapper__left";}else{echo "component__blogspot__items__wrapper__right";} ?>">
                    <div class="component__blogspot__items__inner">
                        <div class="component__blogspot__items__inner__image__container">
                            <?php //var_dump( $all_posts[$postLP] ); ?>
                            <img src="<?php echo get_field('obrazek_wyrozniajacy', $all_posts[$postLP]->ID); ?>" alt="" class="component__blogspot__items__inner__image">
                        </div>
                        <div class="row align-items-center component__blogspot__items__inner__tagi__container">
                            <div class="col-auto">
                                <img src="<?php echo get_template_directory_uri();?>/images/calendar.svg" alt="" class="w-100">
                            </div>
                            <div class="col-auto">
                                <?php $miesiace = array(1 => "styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"); ?>
                                <?php $finalDate = date_Format(date_create(explode(" ", $all_posts[$postLP]->post_date)[0]), "d")." ".$miesiace[ltrim(explode(":", date_Format(date_create(explode(" ", $all_posts[$postLP]->post_date)[0]), "d:m:Y"))[1], "0")]." ".date_Format(date_create(explode(" ", $all_posts[$postLP]->post_date)[0]), "Y"); ?>
                                <p class="font__color__black font__weight__4 font__size__18 mb-0"><?php echo $finalDate ?></p>
                            </div>
                            <div class="col-sm-auto col-12 my-2 my-sm-0 component__blogspot__items__inner__tagi" style="background-color: rgb(163, 170, 251); border-radius: 3px"><p class="mb-0 px-2 py-1 font__size__14 font__weight__7 font__color__black">Facebook</p></div>
                            <div class="col-sm-auto col-12 my-2 my-sm-0 component__blogspot__items__inner__tagi" style="background-color: rgb(163, 170, 251); border-radius: 3px"><p class="mb-0 px-2 py-1 font__size__14 font__weight__7 font__color__black">Social Media</p></div>
                        </div>
                        <h2 class=" font__size__32 font__weight__7 font__color__purple" style="line-height: 43px"><?php echo $all_posts[$postLP]->post_title; ?></h2>
                        <p class="font__color__purple font__size__16 font__weight__4"><?php echo get_field('krotki_opis', $all_posts[$postLP]->ID); ?></p>
                        <div class="row mt-lg-5 pt-5 justify-content-between">
                            <div class="col-auto">
                                <a href="<?php echo $all_posts[$postLP]->post_name?>" class="d-inline-block text-uppercase item__btn p-0 font__size__18 font__weight__7 font__color__black" style="text-decoration: underline;">CZYTAJ ARTYKUŁ</a>
                            </div>
                            <div class="col-auto d-none">
                                <div class="row">
                                    <div class="col-auto"><img src="<?php echo get_template_directory_uri(); ?>/images/comments.svg" alt=""></div>
                                    <div class="col-auto"><p class=" font__size__16 font__color__black mb-0">2 komentarze</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        <?php 
        }
        ?>
    </div>
    <div style="margin-top: 420px;" class="component__blogspot__reset <?php if( count( $all_posts ) != 0 ){?>d-none<?php } ?>"></div>
    <div class="row justify-content-center align-items-center my-5 py-5">
        <div class="col-auto"><a href="#" class="d-inline-block text-uppercase item__btn p-0 font__size__18 font__weight__7 font__color__black" style="text-decoration: underline;">ZAŁADUJ WIĘCEJ</a></div>
        <div class="col-auto"><img src="<?php echo get_template_directory_uri(); ?>/images/more.svg" alt=""></div>
    </div>
    <div>
        <h1 class="font__size__48 font__color__purple text-center">Popularne artykuly</h1>
    </div>
    <div class="container">
        <div class="row component__blogspot__items">
            <div class="col-lg-6 component__blogspot__items__wrapper">
                <div class="component__blogspot__items__inner h-100">
                    <div class="component__blogspot__items__inner__image__container">
                        <img src="https://onespark.pl/wp-content/uploads/2021/06/Onespark_Blog_Ile_kosztuje_WP_751x566-copy-min.png" alt="" class="component__blogspot__items__inner__image">
                    </div>
                    <div class="row align-items-center component__blogspot__items__inner__tagi__container">
                        <div class="col-auto">
                            <img src="<?php echo get_template_directory_uri();?>/images/calendar.svg" alt="" class="w-100">
                        </div>
                        <div class="col-auto">
                            <p class="font__color__black font__weight__4 font__size__18 mb-0">07 czerwca 2021</p>
                        </div>
                        <div class="col-auto component__blogspot__items__inner__tagi" style="background-color: rgb(163, 170, 251); border-radius: 3px"><p class="mb-0 px-2 py-1 font__size__14 font__weight__7 font__color__black">Facebook</p></div>
                        <div class="col-auto component__blogspot__items__inner__tagi" style="background-color: rgb(163, 170, 251); border-radius: 3px"><p class="mb-0 px-2 py-1 font__size__14 font__weight__7 font__color__black">Social Media</p></div>
                    </div>
                    <h2 class=" font__size__32 font__weight__7 font__color__purple" style="line-height: 43px">Bezpieczeństwo na facebooku, czyli jak zadbać o ochronę swojego konta?</h2>
                    <p class="font__color__purple font__size__16 font__weight__4">Postęp technologiczny powoduje, że coraz więcej dotychczasowych aktywności (charakterystyczny dla realnego świata) przenosimy do sieci. Bawimy się, pracujemy, zdobywamy nowe znajomości, a także utrzymujemy kontakty z rodziną oraz przyjaciółmi.</p>
                    <div class="row mt-lg-5 pt-5 justify-content-between">
                        <div class="col-auto">
                            <a href="#" class="d-inline-block text-uppercase item__btn p-0 font__size__18 font__weight__7 font__color__black" style="text-decoration: underline;">CZYTAJ ARTYKUŁ</a>
                        </div>
                        <div class="col-auto">
                            <div class="row">
                                <div class="col-auto"><img src="<?php echo get_template_directory_uri(); ?>/images/comments.svg" alt=""></div>
                                <div class="col-auto"><p class=" font__size__16 font__color__black mb-0">0 komentarzy</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 component__blogspot__items__wrapper">


                <div class="component__blogspot__items__inner">
                    <div class="row align-items-center component__blogspot__items__inner__tagi__container">
                        <div class="col-auto">
                            <img src="<?php echo get_template_directory_uri();?>/images/calendar.svg" alt="" class="w-100">
                        </div>
                        <div class="col-auto">
                            <p class="font__color__black font__weight__4 font__size__18 mb-0">07 czerwca 2021</p>
                        </div>
                        <div class="col-sm-auto col component__blogspot__items__inner__tagi" style="background-color: rgb(163, 170, 251); border-radius: 3px"><p class="mb-0 px-2 py-1 font__size__14 font__weight__7 font__color__black">Facebook</p></div>
                        <div class="col-sm-auto col component__blogspot__items__inner__tagi" style="background-color: rgb(163, 170, 251); border-radius: 3px"><p class="mb-0 px-2 py-1 font__size__14 font__weight__7 font__color__black">Social Media</p></div>
                    </div>
                    <h2 class=" font__size__32 font__weight__7 font__color__purple" style="line-height: 43px">Bezpieczeństwo na facebooku, czyli jak zadbać o ochronę swojego konta?</h2>
                    <p class="font__color__purple font__size__16 font__weight__4">Postęp technologiczny powoduje, że coraz więcej dotychczasowych aktywności (charakterystyczny dla realnego świata) przenosimy do sieci. Bawimy się, pracujemy, zdobywamy nowe znajomości, a także utrzymujemy kontakty z rodziną oraz przyjaciółmi.</p>
                    <div class="row mt-lg-5 pt-5 justify-content-between">
                        <div class="col-auto">
                            <a href="#" class="d-inline-block text-uppercase item__btn p-0 font__size__18 font__weight__7 font__color__black" style="text-decoration: underline;">CZYTAJ ARTYKUŁ</a>
                        </div>
                        <div class="col-auto">
                            <div class="row">
                                <div class="col-auto"><img src="<?php echo get_template_directory_uri(); ?>/images/comments.svg" alt=""></div>
                                <div class="col-auto"><p class=" font__size__16 font__color__black mb-0">2 komentarze</p></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="component__blogspot__items__inner">
                    <div class="row align-items-center component__blogspot__items__inner__tagi__container">
                        <div class="col-auto">
                            <img src="<?php echo get_template_directory_uri();?>/images/calendar.svg" alt="" class="w-100">
                        </div>
                        <div class="col-auto">
                            <p class="font__color__black font__weight__4 font__size__18 mb-0">07 czerwca 2021</p>
                        </div>
                        <div class="col-auto component__blogspot__items__inner__tagi" style="background-color: rgb(163, 170, 251); border-radius: 3px"><p class="mb-0 px-2 py-1 font__size__14 font__weight__7 font__color__black">Facebook</p></div>
                        <div class="col-auto component__blogspot__items__inner__tagi" style="background-color: rgb(163, 170, 251); border-radius: 3px"><p class="mb-0 px-2 py-1 font__size__14 font__weight__7 font__color__black">Social Media</p></div>
                    </div>
                    <h2 class=" font__size__32 font__weight__7 font__color__purple" style="line-height: 43px">Bezpieczeństwo na facebooku, czyli jak zadbać o ochronę swojego konta?</h2>
                    <p class="font__color__purple font__size__16 font__weight__4">Postęp technologiczny powoduje, że coraz więcej dotychczasowych aktywności (charakterystyczny dla realnego świata) przenosimy do sieci. Bawimy się, pracujemy, zdobywamy nowe znajomości, a także utrzymujemy kontakty z rodziną oraz przyjaciółmi.</p>
                    <div class="row mt-lg-5 pt-5 justify-content-between">
                        <div class="col-auto">
                            <a href="#" class="d-inline-block text-uppercase item__btn p-0 font__size__18 font__weight__7 font__color__black" style="text-decoration: underline;">CZYTAJ ARTYKUŁ</a>
                        </div>
                        <div class="col-auto">
                            <div class="row">
                                <div class="col-auto"><img src="<?php echo get_template_directory_uri(); ?>/images/comments.svg" alt=""></div>
                                <div class="col-auto"><p class=" font__size__16 font__color__black mb-0">2 komentarze</p></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>s