<section class="component__standardSection component__standardSection__variableHeight js-changeColor font__color__white m-0 is-in-viewport" aria-label="black" aria-rowcount="0" data-depth="1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-10 standard-js-scrollBehave left">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: #fff !important"></div></div>
                        <div class="col-auto"><h5 class="font__color__white text-start font__size__24 font__weight__4 mb-0">Kariera</h5></div>
                    </div>
                    <h2 class="font__color__white font__size__68 mt-5 pt-4"><?echo the_title();?></h2>
                    <p class="font__color__white font__size__18 me-lg-5 mt-5"><?the_field("opis")?></p>
            </div>
        </div>
    </div>
</section>
<section id="aboutUs" class="component__standardSection component__standardSection__variableHeight js-changeColor font__color__purple m-0 next-in-viewport" aria-label="white" aria-rowcount="1" data-depth="2">
    <div class="container">
        <div class="row align-items-top justify-content-between position-relative justify-content-between sidebar js-sticky-widget-container mb-5 pb-5">
            <aside class="col-lg-6 position-sticky">
                <div class="widget position-absolute text-center text-lg-start" style="position: sticky !important;" id="sticky">
                    <h1 class=" font__color__purple font__size__58 mb-0" style="letter-spacing: 1.16px;">Potrafisz jedną iskrą wzniecić ognień? Idealnie!</h1>
                </div>

            </aside>
            <div class="col-lg-4 ms-lg-5 ps-lg-5 mt-5 mt-lg-0 component__wierdItem__container widget">
                <?php
                    if( have_rows("informacje") ){
                        $i = 0;
                        while( have_rows("informacje") ){
                            $i++;
                            the_row();
                            ?>
                            <div class="py-5 my-5 <?if($i == 3){echo "mb-0 pb-0";}?> component__wierdItem">
                                <h1 class="font__color__purple font__size__32 font__weight__7"><?the_sub_field("tytul")?></h1>
                                <div class=" font__size__16 font__color__darkGrey mt-5">
                                    <?the_sub_field("tresc")?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
        <h1 class="font__size__48 my-5 py-5 text-center">Dodatkowo możesz liczyć na:</h1>
        <?php 
            if( have_rows("dodatkowo") ){
                ?><div class="row"><?php
                while( have_rows("dodatkowo") ){
                    the_row();
                    ?>
                    <div class="col-md px-2 my-5 my-md-0">
                        <img src="<?the_sub_field("obraz")?>" alt="" class="w-100">
                        <div class="font__size__18 font__weight__7 mt-5"><?the_sub_field("tresc")?></div>
                    </div>
                    <?
                }
                ?>
                  </div>
                <?
            }
        ?>
        <div class="text-center">
            <a href="#" class="mx-auto item__btn d-inline-block item__color__green font__color__black font__weight__7 font__size__24 px-5 mt-5" style="border-radius: 28px;">APLIKUJ</a>
        </div>
    </div>
</section>