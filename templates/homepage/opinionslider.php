<?php if( have_rows("opinie") ): ?>
<div class="col-lg-4 order-last order-lg-first">
    <div class="row justify-content-center justify-content-lg-start mt-5 mb-lg-0">
        <div class="col-md-auto col-3 button-prev" style="cursor: pointer;" id="clickLeft"><img class="w-100" src="<?php echo get_template_directory_uri() ?>/images/arrow_with_bg_left.png" alt=""></div>
        <div class="col-md-auto col-3 button-next" style="cursor: pointer;" id="clickRight"><img class="w-100" src="<?php echo get_template_directory_uri() ?>/images/arrow_with_bg_right.png" alt=""></div>
    </div>
</div>
<div class="col-lg-8 col-12 order-first order-lg-last">
    <div class="swiper homepage-opinions-slider">
        <div class="swiper-wrapper">
        <?php while( have_rows("opinie") ){ the_row();?>
            <div class="swiper-slide text-center text-lg-start">
                <div class="text-center text-lg-start">
                    <img src="<?php the_sub_field( "logoooo" ) ?>" alt="" style="max-width: fit-content !important;">
                </div>
                <div class="font__size__18 mt-4" style="color: #1a1a1a">
                    <?the_sub_field("tresc");?>
                </div>
                <div class="row mt-5 align-items-center text-start justify-content-center justify-content-lg-start">
                    <div class="col-xxl-2 col-3 text-end text-lg-center"><img src="<?the_sub_field("foto");?>" alt="" class="w-100" style="max-width: fit-content !important;"></div>
                    <div class="col-auto ">
                        <p class="mb-0 font__size__18 font__color__purple"><?the_sub_field("imie_klineta");?></p>
                        <p class="mb-0 font__size__14 font__weight__7 font__color__purple"><?the_sub_field("stanowisko__firma");?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".homepage-opinions-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    grabCursor: true,
    loop: true,
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
    breakpoints: {
        991: {
            slidesPerView: 2,
        }
    }
  });
</script>
<?php endif;?>