<?php
    get_header();
?>
<section class="font__color__white pt-5 is-in-viewport" aria-label="black" aria-rowcount="0">
    <div class="container mx-auto pt-5 mt-5" style="max-width: 1375px !important;">
        <div class="row mb-5 pb-5">
            <div class="col-lg">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: #fff !important"></div></div>
                    <div class="col-auto"><h5 class="text-start font__size__18 font__weight__8 mb-0"><?php echo get_field( "lewa_kolumna_subtitle" ); ?></h5></div>
                </div>
                <h1 class=" font__size__68"><?php echo get_field( "lewa_kolumna_duzy_tytul" ); ?></h1> 
            </div>
            <div class="col-lg pt-5">
                <p class=" font__size__16"><?php echo get_field( "prawa_kolumna_content_description" ); ?></p>
                <div class="row justify-content-between mt-5 pt-2">
                    <?php while( have_rows( "prawa_kolumna_ikony" ) ): the_row(); ?>
                    <div class="col-4 text-center position-relative p-0 pt-5">
                        <img src="<?php echo get_sub_field( "ikona" ); ?>" alt="" class="w-50">
                        <p class="mt-3 position-absolute mx-auto w-100" style="top:140px"><?php echo get_sub_field( "tytul_ikony" ); ?></p>
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
                <section class="component__standardSection component__standardSection__variableHeight js-changecolor next-in-viewport font__color__white mx-auto" aria-label="<?if($i%2 != 0){?>lightPurple<?}else{?>black<?}?>" aria-rowcount="<?echo $i?>" style="max-width: 1375px; padding: 5vh 0 !important">
                    <div class="container">
                        <div class="row align-items-center my-5 py-5 " >
                            <div class="col-sm-7 pe-5">
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
                                <a href="<?the_sub_field("kieruj_do")?>" class="item__btn d-inline-block item__color__green font__color__black font__weight__7 px-5 mt-5" style="border-radius: 28px;">Zobacz więcej</a>
                            </div>
                            <div class="col-sm-5 text-center">
                                <img src="<?echo get_template_directory_uri();?>/images/phone_.png" alt="" class="mx-auto image_corobimy">
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