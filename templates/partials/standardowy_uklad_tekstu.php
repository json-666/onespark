<div class="container" style="max-width: 1360px !important">
    <article class="my-5 py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: <?php echo the_field( "kolor_czcionki" ) ?> !important"></div></div>
            <div class="col-auto"><h5 style="color: <?php echo the_field( "kolor_czcionki" ) ?> !important" class="text-start font__size__18 font__weight__8 mb-0"><?the_sub_field("tytul")?></h5></div>
        </div>
        <div class="row">
            <div class="col me-5 pe-5">
                <h2 class=" font__size__32">
                    <?the_sub_field("naglowek")?>
                </h2>
            </div>
            <div class="col-lg col-12  ms-lg-5 ps-lg-5 ">
                <div class=" font__size__16 contentContent">
                    <?the_sub_field("tekst")?>
                </div>
            </div>
        </div>
    </article>
</div>
<style>
    .contentContent li{
        list-style-image: url("<?php echo get_template_directory_uri(  ); ?>/images/bullet-list.svg") !important;
    }
    .contentContent ul{
        padding-left: calc(1rem + 5px) !important;
    }
</style>