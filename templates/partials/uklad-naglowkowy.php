    <div class="container animate__animated animate__fadeIn" style="max-width: 1360px !important">
        <article class="my-5 py-5">
            <p class="font__color__black font__size__18 py-5" style="color: <?php echo the_field( "kolor_czcionki" ) ?> !important">Services: <span><?the_sub_field("tagi:")?></span></p>

            <div class="row my-5 py-5">
                <div class="col me-5 pe-5">
                    <h1 class=" font__size__48 component__project__title">
                        <?the_sub_field("tytul")?>
                    </h1>
                </div>
                <div class="col-lg col-12  ms-lg-5 ps-lg-5 ">
                    <div class=" font__size__16">
                        <?the_sub_field("tekst")?>
                    </div>
                </div>
            </div>
        </article>
    </div>