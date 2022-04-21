<?php for($x = 0; $x < 3; $x++){?>
<?php while( have_rows("slide") ){ the_row();?>
    <div class="component__wierdItem wow animate__animated animate__fadeInUp" data-wow-delay=".5s" style="margin: 200px 0; --animate-duration: 1s;">
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
