<div class="row g-0 mt-5 pt-5">
        <h1 class="text-center font__size__58 font__color__purple my-5">Pozostałe projekty</h1>
    <?php
        $args = array(  
            'post_type' => 'nasze_projekty',
            'post_status' => 'publish',
            'orderby' => 'rand',
            'post__not_in' => array(get_the_ID()),
            'posts_per_page' => 2
        );
        $loop = new WP_Query( $args ); 
        while( $loop->have_posts() ){
            $loop->the_post();
            ?>
            <div class="col-lg-6 component__itemAdditionalProject__container" style="background: url(<?the_field("obrazek_reprezentatywny")?>); background-size: contain !important; background-repeat: no-repeat;">
                <div style="" class="component__itemAdditionalProject__container__blackout h-100">  
                    <div class="component__itemAdditionalProject">
                            <div class="row align-items-center mb-5">
                                <div class="col-lg-3 col-md-5 col-sm-3 col-4"><div style="height: 2px; background-color: white !important"></div></div>
                                <div class="col-auto"><h5 class="text-start font__size__18 font__weight__8 mb-0 font__color__white"><?the_field("projekt_dla:")?></h5></div>
                            </div>

                            <h1 class=" font__size__48 font__color__white"><?echo the_title()?></h1>
                            <a href="<?echo  get_the_permalink()?>" class="d-inline-block text-uppercase item__btn p-0 font__size__18 font__weight__7 mt-lg-5 pt-5 font__color__white" style="text-decoration: underline;">Zobacz Case Study</a>

                        </div>
                    </div>
                </div>  
            <?
        }
    ?>
    </div>