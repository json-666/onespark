<div class="container" style="max-width: 1360px !important">
    <article class="my-5 py-5">
        <div class="row">
            <div class="col me-5 pe-5">
                <img src="<?php the_sub_field( "obraz" ); ?>" alt="" class="w-100" style="max-width: fit-content;">
            </div>
            <div class="col-lg col-12  ms-lg-5 ps-lg-5 ">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-1 col-md-2 col-sm-3 col-4"><div style="height: 2px; background-color: #181b43 !important"></div></div>
                    <div class="col-auto"><h5 class="text-start font__size__18 font__weight__8 mb-0"><?the_sub_field("tytul")?></h5></div>
                </div>
                <h2 class=" font__size__32">
                    <?the_sub_field("naglowek")?>
                </h2>
                <div class=" font__size__16 contentContent">
                    <?the_sub_field("tresc")?>
                </div>
            </div>
        </div>
    </article>
</div>