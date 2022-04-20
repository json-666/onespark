<?php get_header(); ?>

<?php
    if(get_post_type() == "nasze_projekty"){
        get_template_part( "templates/template-singleProject" );
    }
    elseif(get_post_type() == "uslugi"){
        get_template_part( "templates/template-singleUsluga" );
    }
    elseif(get_post_type() == "jobs"){
        get_template_part( "templates/template-singleJob" );
    }
    else{
?>
<div id="primary" class="content-area firstFromTop">
    <div class="container-fluid g-0 px-0 component__blogspot__post__header" style="background-color: rgb(78, 87, 185);">
        <div class="container container-medium">
            <div class="row align-items-center component__blogspot__items__inner__tagi__container">
                <div class="col-auto">
                    <img src="<?php echo get_template_directory_uri();?>/images/calendar.svg" alt="" class="w-100 item__changeColors__invert">
                </div>
                <div class="col-auto">
                    <p class="font__color__white font__weight__4 font__size__18 mb-0">07 czerwca 2021</p>
                </div>
                <div class="col-auto component__blogspot__items__inner__tagi" style="background-color: rgb(163, 170, 251); border-radius: 3px"><p class="mb-0 px-2 py-1 font__size__14 font__weight__7 font__color__black">Facebook</p></div>
                <div class="col-auto component__blogspot__items__inner__tagi" style="background-color: rgb(163, 170, 251); border-radius: 3px"><p class="mb-0 px-2 py-1 font__size__14 font__weight__7 font__color__black">Social Media</p></div>
            </div>
            <h1 class="font__size__68 font__color__white my-5"><?php echo get_the_title();?></h1>
            <div class="mb-0 font__size__18 font__color__white font__weight__4 font-paragraph"><?php the_field("krotki_opis") ?></div>
        </div>
    </div>
    <div class="container-fluid px-0 item__color__white component__blogspot__post__content pt-5">
        <div class="container container-medium font__color__purple item__color__white item__listcolor__dark pt-5">
            <?php
                echo get_the_content();
            ?>
        </div>
        <div class="component__blogspot__post__comments font__color__purple d-none">
            <div class="container">
                <h2 class=" font__size__32">Komentarze:</h2>
            </div>
            <div class="container-small">

            </div>
        </div>
    </div>
</div>
<?php
    }
get_footer(); 
?>