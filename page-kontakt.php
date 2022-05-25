<?php
    get_header();
?>
<section class="font__color__white item__color__black pt-5 is-in-viewport component__kontakt">
    <div class="container mx-auto pt-5 mt-5" style="max-width: 1375px !important;">
        <div class="row mb-5 pb-5 justify-content-between">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class=" font__size__68">Porozmawiajmy o&nbsp;Twoim projekcie</h1> 
                <div class="row mt-5">
                    <div class="col-6">
                        <p class="font__size__24 font__weight__7">Wyślij Brief</p>
                        <a href="mailto:oferta@onespark.pl" class="font__color__white font__size__18">oferta@onespark.pl</a>
                    </div>
                    <div class="col-6">
                        <p class="font__size__24 font__weight__7">Dołącz do zespołu</p>
                        <a href="mailto:oferta@onespark.pl" class="font__color__white font__size__18">rekrutacja@onespark.pl</a>
                    </div>
                </div>
                <div class="row align-items-center mt-5 pt-5 justify-content-center justify-content-lg-start">
                    <?php
                        while( have_rows("social_media","options") ){
                            the_row();
                            ?>
                            <div class="col-auto"><a href="<?the_sub_field("link")?>"><img src="<?the_sub_field("obrazek")?>" alt=""></a></div>
                            <?php
                        }
                    ?>
                </div>
                <p class="font__color__white mt-5 pt-5">
                    Onespark Agencja Kreatywna<br/>
                    Plac Zwycięstwa 2, 90-312 Łódź | Budynek D, II Piętro<br/>
                    tel. <a href="tel:+48 608 054 629" class=" font__color__white " style="text-decoration: none">+48 608 054 629</a> | <a href="tel:+48 888 754 085" class=" font__color__white " style="text-decoration: none">+48 888 754 085</a>
                </p>
            </div>
            <div class="col-lg-auto pt-5">
                <div class="component__kontakt__circle float-lg-right mx-auto">
                    <a href="zrobmy-projekt/">Zróbmy projekt <img src="<?php echo get_template_directory_uri(  );?>/images/arrow_r.svg"></a>
                    <div class="component__kontakt__circle__green"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="font__color__dark item__color__white pt-5 component__kontakt">
    <div class="container text-center py-5">
        <h1 class=" font__color__purple font__size__48 font__weight__7">Sprawdź jak do nas dojechać</h1>
    </div>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2467.4145455876437!2d19.407773115950846!3d51.79858559719151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471bcc58674b2ccb%3A0x67e9ccdeb16dd9bf!2sOnespark%20Agencja%20Kreatywna!5e0!3m2!1spl!2spl!4v1642078742537!5m2!1spl!2spl" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<?php
    get_footer();
?>