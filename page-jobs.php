<?php
    get_header();
?>

<section class="component__standardSection component__standardSection__variableHeight js-changeColor font__color__white item__color__lightPurple m-0" aria-label="lightPurple" aria-rowcount="1" data-depth="1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-6 standard-js-scrollBehave left wow animate__animated animate__fadeInLeft" data-wow-delay=".15s">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: #fff !important"></div></div>
                        <div class="col-auto"><h5 class="font__color__white text-start font__size__24 font__weight__4 mb-0">Kariera</h5></div>
                    </div>
                    <h2 class="font__color__white?> font__size__68 mt-5 pt-4">Sprawdźmy czy masz w sobie tą iskrę.</h2>
            </div>
            <div class="col-xl-5 col-lg-6 standard-js-scrollBehave text-end wow animate__animated animate__fadeInRight" data-wow-delay=".15s">
                <img src="<?echo get_template_directory_uri(  )?>/images/Rectangle_5551.png" alt="" class="w-lg-75">
            </div>
        </div>
    </div>
</section>
<section class="component__standardSection component__standardSection__variableHeight js-changeColor item__color__white mt-0" aria-label="white" aria-rowcount="2" data-depth="2" style="padding: 15vh 0 !important;">
    <div class="container">
        <h1 class=" font__size__48 font__color__purple text-center mb-5 pb-5 wow animate__animated animate__fadeInUp" data-wow-delay=".15s">Otwarta rekrutacja na stanowiska</h1>
        <div class="row">
            <?php
                $args = array(  
                    'post_type' => 'jobs',
                    'order' => 'ASC',
                    'posts_per_page' => 3
                );
                $looper = new WP_Query( $args );
                $i = 0;
                while( $looper->have_posts() ){
                $i++;
                $looper->the_post();
                ?>
                <div class="col-xl col-lg-4 col-12 text-center text-lg-start px-xl-5 px-2 my-4 my-lg-0 component__jobOffer__container wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo .15*$i; ?>s">
                    <div class="component__jobOffer__inner py-4 px-5 ">
                        <h1 class=" font__size__32 font__color__purple"><?echo the_title();?></h1>
                        <a href="<?echo  get_the_permalink()?>" class="item__btn d-inline-block item__color__green font__color__black font__weight__7 px-5 mt-5" style="border-radius: 28px;">Dowiedz się więcej</a>
                    </div>
                </div> 
                <?php
                    }
                ?>
        </div>
    </div>
</section>
<section class="component__standardSection component__standardSection__variableHeight js-changeColor font__color__white item__color__black mt-0 wow animate__animated animate__fadeInUp" data-wow-delay=".15s" aria-label="black" aria-rowcount="2" data-depth="2">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <h2 class=" font__size__58 font__color__white mb-0">Nie znalazłeś oferty dla siebie?<br/>Nie szkodzi!</h2>
                <p class="font__size__16 font__color__white mx-lg-5 px-lg-5 my-5">Nieustannie poszukujemy talentów, które zasilą nasz zespół. Wyślij nam kilka informacji o sobie,&nbsp;a my zapoznamy się z nimi i odezwiemy się w informacji zwrotnej.</p>
                <a href="#" class="item__btn d-inline-block item__color__green font__color__black font__weight__7 px-5" style="border-radius: 28px;">Dowiedz się więcej</a>
            </div>
        </div>
    </div>
</section>
<?php 
    get_footer(); 
?>
