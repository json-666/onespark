<?php
    get_header();
?>
<section class="font__color__white pt-lg-5 is-in-viewport" aria-label="black" aria-rowcount="0">
    <div class="container mx-auto pt-5 mt-5" style="max-width: 1375px !important;">
        <div class="row mb-lg-5 pb-lg-5">
            <div class="col-lg wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: #fff !important"></div></div>
                    <div class="col-auto"><h5 class="text-start font__size__18 font__weight__8 mb-0"><?php echo get_field( "lewa_kolumna_subtitle" ); ?></h5></div>
                </div>
                <h1 class=" font__size__68"><?php echo get_field( "lewa_kolumna_duzy_tytul" ); ?></h1> 
            </div>
            <div class="col-lg pt-5 wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                <p class=" font__size__16"><?php echo get_field( "prawa_kolumna_content_description" ); ?></p>
                <div class="row justify-content-between pt-2">
                    <?php 
                    $i = 0; 
                    while( have_rows( "prawa_kolumna_ikony" ) ): the_row(); 
                        $i++;
                        $elementDelay = 0;
                        $initialDelay = 1.1;
                        $thisDelay = .1*$i;
                        $elementDelay = $thisDelay+$initialDelay;
                    ?>
                    <div class="col-sm-4 col-12 text-center position-relative p-0 pt-5 wow animate__animated animate__fadeInUp mt-5" data-wow-delay="<?php echo $elementDelay;?>s">
                        <img src="<?php echo get_sub_field( "ikona" ); ?>" alt="" class="w-50 px-4 px-sm-0">
                        <p class="mt-5 position-absolute mx-auto w-100" style="top:140px"><?php echo get_sub_field( "tytul_ikony" ); ?></p>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php
        if( have_rows("co_robimy_items") ){
            $i = 0;
            while( have_rows("co_robimy_items") ){
                $i++;
                the_row();
                ?>
                <section class="component__standardSection component__standardSection__variableHeight js-changecolor next-in-viewport font__color__white mx-auto <?php  if($i==1){echo "mt-0 pt-0";}?>" aria-label="<?if($i%2 != 0){?>lightPurple<?}else{?>black<?}?>" aria-rowcount="<?echo $i?>" style="max-width: 1375px; padding: 5vh 0 !important">
                    <div class="container">
                        <div class="row align-items-center my-lg-5 py-lg-5">
                            <div class="col-sm-7 pe-lg-5 wow animate__animated animate__fadeInUp order-last order-lg-first" data-wow-delay=".5s">
                                <div class="row align-items-center mb-5">
                                    <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: #fff !important"></div></div>
                                    <div class="col-auto"><h5 class="text-start font__size__18 font__weight__8 mb-0">Co robimy</h5></div>
                                </div>
                                <h1 class="font__size__58"><?the_sub_field("tytul")?></h1>
                                <p class="font__size__18 font__weight__7"><?the_sub_field("krotki_opis")?></p>
                                <div class="row">
                                    <div class="col-12">
                                        <ul>
                                            <?while( have_rows("co_robimy_-_lista") ){ 
                                                the_row();
                                                ?>
                                                <li><?the_sub_field("co_robimy")?></li>
                                            <?}?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center text-sm-start">
                                    <a href="<?the_sub_field("kieruj_do")?>" class="item__btn d-inline-block item__color__green font__color__black font__weight__7 px-5 mt-5" style="border-radius: 28px;">Zobacz więcej</a>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center  wow animate__animated animate__fadeInUp order-first order-lg-last mb-5 mb-lg-0" data-wow-delay=".5s">
                                <img src="<?php the_sub_field( "obrazek" ) ?>" alt="" class="mx-auto image_corobimy">
                            </div>
                        </div>
                    </div>
                </section>
                <?
            }
        }
    ?>
<?php
    get_footer();
?>