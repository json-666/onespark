<section class="component__standardSection component__standardSection__variableHeight component__project js-changeColor is-in-viewport" aria-label="black" aria-rowcount="0">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-6 standard-js-scrollBehave left">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: #fff !important"></div></div>
                        <div class="col-auto"><h5 class="font__color__white text-start font__size__24 font__weight__4 mb-0"><?php the_field( "rodzaj_uslugi" ); ?></h5></div>
                    </div>
                    <h2 class="font__color__white?> font__size__68 mt-5 pt-4"><?php the_field( "tytul_glowny" ); ?></h2>
            </div>
            <div class="col-xl-5 col-lg-6 standard-js-scrollBehave text-end">
                <img src="<?php the_field( "obraz" ); ?>" alt="" class="w-75">
            </div>
        </div>
    </div>
</section>
<section class="component__standardSection component__standardSection__variableHeight component__project js-changeColor font__color__black next-in-viewport" aria-label="white" aria-rowcount="1">
    <div class="container">
        <div class="row">
            <div class="col-xl-auto">
                <p class="font__size__18 font__weight__4"><?php the_field( "rodzaj_uslugi" ); ?></p>
            </div>
            <div class="col-xl ps-xl-5">
                <div class="row align-items-center">
                    <style>.cls-2{fill: #000 !important;}.cls-3{stroke: #000 !important;}</style>
                    <?php $i=0; while( have_rows( "lista_uslug" ) ){ the_row(); $i++;?>
                    <div class="col-lg-4 col-md-6 col-12 px-5 my-5 wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo $i/12 ?>s">
                        <div style="max-width: 125px;"><?php echo file_get_contents(get_sub_field( "ikona" )); ?></div>
                        <h3 class="font__size__18 font__weight__7 my-3"><?php the_sub_field( "tytul" ); ?></h3>
                        <div class="font__size__16"><?php the_sub_field( "tresc" ) ?></div>
                    </div>
                    <?}?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="component__standardSection component__standardSection__variableHeight component__project js-changeColor font__color__white next-in-viewport" aria-label="black" aria-rowcount="2">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-8 px-4">
                <h2 class=" font__size__58 font__weight__7"><?php the_field( "cytat" ) ?></h2>
                <p class=" font__size__18 mt-5"><?php the_field( "autor" ) ?></p>
            </div>
        </div>
    </div>
</section>
<section class="component__standardSection component__standardSection__variableHeight component__project js-changeColor font__color__black next-in-viewport" aria-label="white" aria-rowcount="3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl col-lg-7 col-12">
                <h1 class="font__size__48"><?php the_field( "tytul" ) ?></h1>
                <div class="row mt-5 pt-5">
                    <?php the_field( "tresc" ) ?>
                </div>
            </div>
            <div class="col-xl col-lg-5 col-12 ps-xl-5">
                <img src="<?php the_field( "obraztresci" ) ?>" alt="" class="w-100">
            </div>
        </div>
    </div>
</section>
<section class="component__standardSection component__standardSection__variableHeight component__project js-changeColor font__color__white next-in-viewport" aria-label="lightPurple" aria-rowcount="4">
    <div class="container">
        <p class="font__size__18">Co nasi klienci mówią o współpracy z nami?</p>
        <div class="row align-items-center">
            <div class="col-xl col-lg-6 col-12 pe-5 me-xl-5 text-lg-end mt-5">
                <img src="<?php  the_field( "obrazwsekcjiopinie" ); ?>" alt="" class="w-75 mb-5 mb-lg-0">
            </div>
            <div class="col-xl col-lg-6 col-12" style="margin-top: -2rem;">
                <?php while( have_rows( "opiniekelintow" ) ): the_row(); ?>
                    <div class="py-2 <?if(get_row_index()%2 == 0){?>my-5<?}?>">
                        <h1 class=" font__size__32"><?php the_sub_field( "tresc" ) ?></h1>
                        <p class="font__size__16 mt-5 font__weight__3"><?php the_sub_field( "kto" ) ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<section class="component__standardSection component__standardSection__variableHeight component__project js-changeColor font__color__white next-in-viewport" aria-label="white" aria-rowcount="5">
    <?php
        get_template_part( "templates/partials/pozostale_projekty" );
        get_template_part( "templates/partials/partial-hand" );
    ?>
</section>