<article class="my-5 py-5 mx-auto" style="max-width: 830px">
    <div class="row align-items-center mb-5">
        <div class="col-lg-2 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: <?php echo the_field( "kolor_czcionki" ) ?> !important"></div></div>
        <div class="col-auto"><h5 style="color: <?php echo the_field( "kolor_czcionki" ) ?> !important" class="text-start font__size__18 font__weight__8 mb-0"><?the_sub_field("tytul")?></h5></div>
    </div>
    <div class="row">
        <div class="col-12">
            <h1 class=" font__size__32">
            <?the_sub_field("naglowek")?>
            </h1>
        </div>
        <div class="col-12 mt-4">
            <div class=" font__size__16">
                <?the_sub_field("tekst")?>
            </div>
        </div>
    </div>
</article>