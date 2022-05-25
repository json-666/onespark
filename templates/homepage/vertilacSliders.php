<?php while( have_rows("slide") ){ the_row();?>
<div class="row align-items-top align-items-center justify-content-between my-5">
    <div class="col-lg-6 wow animate__animated animate__fadeInLeft not-visible" data-wow-delay=".5s" style="--animate-duration: 1s;">
        <img src="<?php echo the_sub_field( "obraz-sekcja-druga" ) ?>" class="img-responsive w-100">
    </div>
    <div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0 component__wierdItem wow animate__animated animate__fadeInRight not-visible" data-wow-delay=".5s" style="--animate-duration: 1s;">
        <h3 class="font__color__purple font__size__24 font__weight__7 mb-5"><?the_sub_field("tytul")?></h3>
        <?php while( have_rows("slide_items") ){ the_row(); ?>
            <div class=" font__size__16 font__color__darkGrey my-4">
                <?the_sub_field("slide_item")?>
                <a href="#" class="font__color__green font__weight__7 font__size__18 d-block mt-3">SEE MORE</a>
            </div>
        <?php } ?>
    </div>
</div>
<?}?>
