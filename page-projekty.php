<?php
    get_header();
?>
<?php
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 4; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    $args = array(  
        'post_type' => 'nasze_projekty',
        'post_status' => 'publish',
        'order' => 'ASC'
    );

    $loop = new WP_Query( $args ); 
    $i=-1;
    while( $loop->have_posts() ){
        $loop->the_post();
        $currentIdentifier = randomPassword();
        $i++;
        ?>
        <style>
            .component__project-link<?php echo $currentIdentifier; ?>{
                color: <?php echo get_field("kolor_czcionki"); ?> !important;
            }
            .item__color__<?php echo $currentIdentifier; ?>{
                background-color: <?php the_field("kolor_projektu:");?>;
                color: <?php echo get_field("kolor_czcionki"); ?>;
            }
            .item__color__<?php echo $currentIdentifier; ?> > a{
                color: <?php echo get_field("kolor_czcionki"); ?>;
            }
            .item__color__<?php echo $currentIdentifier; ?> > a:hover{
                color: <?php echo get_field("kolor_czcionki"); ?> !important;
            }
        </style>
        <section class="component__standardSection component__standardSection__variableHeight component__project js-changeColor <?if($i == 0){?>is-in-viewport<?}?>  <?if($i == 1){?>next-in-viewport<?}?>" aria-label="<?php echo $currentIdentifier; ?>" aria-rowcount="<?echo $i;?>">
            <div class="container" <?php if($i != 0){ ?>data-aos="fade-up"<?php } ?>>
                <div class="row align-items-center">
                    <div class="col-xl col-lg-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".75s">
                            <div class="row align-items-center mb-5">
                                <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: <?php the_field("kolor_czcionki");?>;"></div></div>
                                <div class="col-auto"><h5 class="component__project-link<?echo $currentIdentifier?> text-start font__size__24 font__weight__4 mb-0"><?the_field("projekt_dla:")?></h5></div>
                            </div>
                            <h2 class="component__project-link<?echo $currentIdentifier?> font__size__48 mt-5 pt-4"><?echo the_title()?></h2>
                            <a href="<?echo get_the_permalink()?>" class="d-inline-block text-uppercase item__btn p-0 font__size__18 font__weight__7 mt-lg-5 pt-5 component__project-link<?echo $currentIdentifier?>" style="text-decoration: underline;">Zobacz Case Study</a>
                            <p class="component__project-link<?echo $currentIdentifier?> font__size__18 mt-lg-5 pt-5">Zakres pracy: <?the_field("tagi:")?></p>
                    </div>
                    <div class="col-xl col-lg-6 wow animate__animated animate__fadeInRight" data-wow-delay=".75s">
                        <img src="<?the_field("obrazek_reprezentatywny")?>" alt="xopenhub representative image" class="w-100">
                    </div>
                </div>
            </div>
        </section>
        <?
    }
    $i++;
?>
<section class="" aria-label="white" aria-rowcount="<?echo $i?>"></section>
<script>
    window.onload = function(){
        var className = "item__color__"+document.getElementsByClassName("next-in-viewport")[0].getAttribute("aria-label");
        document.getElementsByTagName("body")[0].classList.remove(className);
        className = "item__color__"+document.getElementsByClassName("is-in-viewport")[0].getAttribute("aria-label");
        document.getElementsByTagName("body")[0].classList.add(className);
    };
</script>
<?php
    get_footer();
?>