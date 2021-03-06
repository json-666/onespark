<?php
    $currentIdentifier = rand(1,1000);
?>
<style>
    .component__project-link<?php echo $currentIdentifier; ?>{
        <?
        if(get_field("kolor_czcionki") == 1){
            echo "color: #181b43 !important";
        }
        else{
            echo "color: #fff !important";
        }   
    ?>
    }
    .item__color__<?php echo $currentIdentifier; ?>{
        background-color: <?php the_field("kolor_projektu:");?>;
    }
    .item__color__<?php echo $currentIdentifier; ?> > a{
    <?
        if(get_field("kolor_czcionki") == 1){
            echo "color: #181b43 !important";
        }
        else{
            echo "color: #fff !important";
        }   
    ?>
    }
    .component__project__title strong{
        color: <?php echo the_field( "kolor_czcionki" ) ?> !important
    }
</style>
<section class="component__standardSection component__standardSection__variableHeight component__project js-changeColor is-in-viewport componen__headerseciotn__project" aria-label="item__color__<?php echo $currentIdentifier; ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl col-lg-6 standard-js-scrollBehave left">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: <?php if( get_field( "czy_kolor_w_naglowku_inny" ) ){ the_field( "kolor_w_naglowku" ); }else{ the_field( "kolor_czcionki" ); } ?>"></div></div>
                        <div class="col-auto"><h5 style="color: <?php if( get_field( "czy_kolor_w_naglowku_inny" ) ){ the_field( "kolor_w_naglowku" ); }else{ the_field( "kolor_czcionki" ); } ?> !important" class="component__project-link<?echo $currentIdentifier?> text-start font__size__24 font__weight__4 mb-0"><?the_field("projekt_dla:")?></h5></div>
                    </div>
                    <h2 style="color: <?php if( get_field( "czy_kolor_w_naglowku_inny" ) ){ the_field( "kolor_w_naglowku" ); }else{ the_field( "kolor_czcionki" ); } ?> !important" class="component__project-link<?echo $currentIdentifier?> font__size__48 mt-5 pt-4"><?echo the_title()?></h2>
            </div>
            <div class="col-xl col-lg-6 standard-js-scrollBehave right text-center">
                <img src="<?the_field("obrazek_reprezentatywny")?>" alt="xopenhub representative image" class="w-100" style="max-width: fit-content">
            </div>
        </div>
        <div class="text-center">
            <a href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>#casestudy"><img src="<?echo get_template_directory_uri()?>/images/aroow_down.svg" alt="" class="d-block mx-auto position-absolute wow animate__animated animate__bounce" style="bottom: 0; width: 36px; margin: auto; display: block !important; left: calc(50% - 18px);" data-wow-delay=".5s" onclick="window.scrollTo(document.getElementById('aboutUs'), 0)"></a>
        </div>
    </div>
</section>
<section class="font__color__purple item__color__white" aria-label="white" id="casestudy">
    <?php 
        if( have_rows('content') ):
            while( have_rows('content') ): the_row();
                $layout_name = get_row_layout();
                get_template_part( "templates/partials/$layout_name" );
            endwhile;
        endif; 
    ?>
    <?php
        get_template_part( "templates/partials/pozostale_projekty" );
    ?>
    <div class="sub-section text-center item__color__white" style="padding-top: 175px !important">
        <h2 class=" font__size__58 font__color__purple">Zr??bmy projekt</h2>
        <a href="#" class="item__btn component__btn-doit my-5">DO DZIE??A</a>
        <img src="<?echo get_template_directory_uri()?>/images/hand.png" alt="" class="d-block mx-auto w-100" style="max-width: 516px;">
    </div>
</section>