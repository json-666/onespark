<div class="container-fluid g-0 my-5 pb-5" <?php  if( get_sub_field("negative_offset") ) {echo "style='margin-top: 190px !important'";} ?>>
    <div class="container" style="max-width: 1300px !important;">
        <div class="row align-items-center pb-5">
            <div class="col me-2 text-center">
                <?php while( have_rows( "obrazy_z_lewej" ) ){the_row();
                    ?> <img src="<?php the_sub_field( "obraz" ) ?>" alt="" class="w-100" style="max-width: fit-content"> <?php
                } ?>
            </div>
            <div class="col ms-2 text-center" <?php  if( get_sub_field("negative_offset") ) {echo "style='margin-top: -360px'";} ?>>
                <?php while( have_rows( "obrazy_z_prawej" ) ){the_row();
                    ?> <img src="<?php the_sub_field( "obraz" ) ?>" alt="" class="w-100" style="max-width: fit-content"> <?php
                } ?>
            </div>
        </div>
    </div>
</div>