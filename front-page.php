<?php
    get_header();
?>

<section class="row w-100 component__slider__home component__standardSection m-0 is-in-viewport" aria-label="black" aria-rowcount="0" data-depth="3">
    <div class="col-12 component__slider__home__inner">
        <h1 class="font__color__white text-center font__size__68 font__weight__700"><?the_field("tytul")?></h1>
        <p class="font__color__white text-center font__size__24 mt-5"><?the_field("pod-tytul")?></p>
    </div>
    <div class="text-center">
        <a href="#aboutUs"><img src="<?echo get_template_directory_uri()?>/images/aroow_down.svg" alt="" class="d-block mx-auto position-absolute wow animate__animated animate__bounce" style="bottom: 0; width: 36px; margin: auto; display: block !important; left: calc(50% - 18px);" data-wow-delay=".5s" onclick="window.scrollTo(document.getElementById('aboutUs'), 0)"></a>
    </div>
</section>

<section id="aboutUs" class="component__standardSection component__standardSection__variableHeight js-changeColor font__color__black next-in-viewport m-0" aria-label="white" aria-rowcount="1" data-depth="2">
    <div class="container">
        <div class="row align-items-top justify-content-between sidebar js-sticky-widget-container position-relative">
            <aside class="col-lg-6 position-relative wow animate__fadeInUp animate__animated" data-wow-delay=".5s">
                <div class="widget position-absolute text-center text-lg-start" style="position: sticky !important;" id="sticky">
                    <h2 class=" font__color__purple font__size__58 mb-5" style="letter-spacing: 1.16px;">Całe serce wkładamy w:</h2>
                    <img src="<?echo get_template_directory_uri()?>/images/emptyness.png" alt="" class="img-responsive w-100">
                </div>
            </aside>
            <div class="col-lg-4 ms-lg-5 ps-lg-5 mt-5 mt-lg-0 component__wierdItem__container widget text-center text-lg-start wow animate__fadeInUp animate__animated" data-wow-delay=".5s" id="scrolly2">
                <?php if( have_rows("slide") ){?>
                    <?php for($x = 0; $x < 3; $x++){?>
                    <?php while( have_rows("slide") ){ the_row();?>
                        <div class="py-5 my-5 component__wierdItem">
                            <h3 class="font__color__purple font__size__24 font__weight__7 mb-5 pb-5"><?the_sub_field("tytul")?></h3>
                            <?php while( have_rows("slide_items") ){ the_row(); ?>
                                <div class=" font__size__16 font__color__darkGrey mt-5">
                                    <?the_sub_field("slide_item")?>
                                    <a href="#" class="font__color__green font__weight__7 font__size__18 d-block mt-3">SEE MORE</a>
                                </div>
                            <?php } ?>
                        </div>
                    <?}?>
                    <?php } ?>
                <?}?>
            </div>
        </div>
    </div>
</section>

<?php
    if( get_field("jaki_projekt_pokazac") == "own_project"){
        $argsss = array(  
            'post_type' => 'any',
            'order' => 'ASC',
            'posts_per_page' => 1,
            'p'=> get_field("projekt")->ID,
        );
    }
    else{
        $argsss = array(  
            'post_type' => 'nasze_projekty',
            'order' => 'ASC',
            'posts_per_page' => 1,
        );
    }
    $looper = new WP_Query( $argsss );
    while( $looper->have_posts() ){
        $looper->the_post();
        $currentIdentifier = rand(1,4444);
        ?>
        <style>
            .component__project-link<?php echo $currentIdentifier; ?>{
                color: <?php echo get_field("kolor_czcionki"); ?>;
            }
            .item__color__<?php echo $currentIdentifier; ?>{
                background-color: <?php the_field("kolor_projektu:");?>;
                color: <?php echo get_field("kolor_czcionki"); ?>;
            }
            .item__color__<?php echo $currentIdentifier; ?> > a{
                color: <?php echo get_field("kolor_czcionki"); ?>;
            }
        </style>
            <section class="component__standardSection component__standardSection__variableHeight js-changeColor mt-0 pt-0" aria-label="<?php echo $currentIdentifier; ?>" aria-rowcount="2">
                <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-xl col-lg-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">
                                <div class="row align-items-center mb-5">
                                    <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; " class="item__color__<?php echo $currentIdentifier; ?>__line"></div></div>
                                    <div class="col-auto"><h5 class="component__project-link<?php echo $currentIdentifier; ?> text-start font__size__24 font__weight__4  mb-0"><?the_field("projekt_dla:")?></h5></div>
                                </div>
                                <h2 class="component__project-link<?php echo $currentIdentifier; ?> font__size__48  mt-5 pt-4"><?echo the_title()?></h2>
                                <a href="<?echo  get_the_permalink()?>" class="component__project-link<?php echo $currentIdentifier; ?> d-inline-block text-uppercase item__btn p-0 font__size__18 font__weight__7  mt-lg-5 pt-5" style="text-decoration: underline;">Zobacz Case Study</a>
                                <p class=" component__project-link<?php echo $currentIdentifier; ?> font__size__18  mt-lg-5 pt-5">Zakres pracy: <?the_field("tagi:")?></p>
                        </div>
                        <div class="col-xl col-lg-6 wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                            <img src="<?the_field("obrazek_reprezentatywny")?>" alt="xopenhub representative image" class="w-100">
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }
    wp_reset_query( );
?>
<section class="component__standardSection component__standardSection__variableHeight js-changeColor" aria-label="black" aria-rowcount="3">
    <div class="container text-center text-lg-start">
        <div class="row">
            <div class="col-lg-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">
                <h2 class="font__size__58 font__color__white"><?the_field("tytul-o-nas")?></h2>
            </div>
            <div class="col-lg-5 wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                <div class="font__size__16 ms-lg-4" style="  color: #f5f5f5 !important;">
                    <?the_field("opis")?>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-around mt-5 pt-5">
            <?php
                if( have_rows( 'logosy' ) ){
                    the_row();
                    $i = 1;
                    while(  have_rows( 'logosy' ) ){
                        the_row();
                        $i++;
                        $elementDelay = 0;
                        $initialDelay = .35;
                        $thisDelay = .10*$i;
                        $elementDelay = $thisDelay+$initialDelay;
                        ?>
                        <div class="col-lg-2 col-sm-4 col-6 text-center mt-4 my-5 wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo $elementDelay;?>s"><img src="<?the_sub_field( 'obraz' );?>" alt="" class="w-100" style="max-width:fit-content !important"></div>
                        <?
                    }
                }
            ?>
            
        </div>
    </div>
</section>
<section class="text-center text-lg-start component__standardSection__variableHeight js-changeColor font__color__black" aria-label="white" aria-rowcount="4">
    <div class="container">
        <div class="row align-items-start justify-content-between">
            <div class="col-lg-auto">
                <p class=" font__color__purple font__size__24">
                    Nasi klienci &lt;B nas
                </p>
            </div>
            <div class="col-lg-3">
                <p class=" font__color__purple font__size__34 font__weight__7 text-uppercase">
                    Oto co niektórzy z&nbsp;nich mają do opowiedzenia
                </p>
            </div>
        </div>
        <div class="row mt-5 pt-5 ">
            <?php get_template_part( "templates/homepage/opinionslider" ); ?>

        </div>
        <?php
            $lastPost = wp_get_recent_posts();
        ?>
        <div class="sub-section component__homepageBlogPost mt-5 pt-5">
            <div class="row align-items-center">
                <div class="col-md-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">
                    <p class="font--creolia font__size__48 font__weight__7 font__color__purple mb-5 pb-5">Sprawdź, o czym pisaliśmy ostatnio na naszym blogu.</p>
                    <p class="font__size__18 font__weight__7 font__color__black mt-lg-5 pt-5"><?echo explode(" ",$lastPost[0]["post_date"])[0];?></p>
                    <h3 class="font__weight__7"><?php echo $lastPost[0]["post_title"]; ?></h3>
                    <div class="component__homepageBlogPost__shortDesc my-4">
                        <?php
                            echo  get_field('krotki_opis', $lastPost[0]['ID']);
                        ?>
                    </div>
                    <a href="<?echo $lastPost[0]['guid']?>" class="d-inline-block text-uppercase item__btn p-0 font__size__18 font__weight__7 font__color__black " style="text-decoration: underline;">Czytaj artykuł</a>
                </div>
                <div class="col-md-6 g-0 mt-5 mt-lg-0 component__homepageBlogPost__image wow animate__animated animate__fadeInRight" data-wow-delay=".5s" style=" background: url(<?php echo  get_field('obrazek_wyrozniajacy', $lastPost[0]['ID']);  ?>); background-size: cover; background-position: center;"></div>
            </div>
        </div>
        <?php get_template_part( "templates/partials/partial-hand" ); ?>
    </div>
</section>
<section class="m-0 p-0" aria-label="white" aria-rowcount="5"></section>

<script>
    window.setInterval(function click(){
        document.getElementById('clickRight').click();
    }, 5000);

    window.mobileCheck = function() {
        let check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
        return check;
    };
</script>
<?php get_footer(); ?>