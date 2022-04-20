<?php
    get_header();
?>

<section class="font__color__white item__color__black pt-5 is-in-viewport component__kontakt">
    <div class="container mx-auto pt-5 mt-5" style="max-width: 1375px !important;">
        <div class="row mb-5 pb-5 justify-content-center">
            <div class="col-lg-7 text-center">
                <h1 class=" font__size__68">Formularz kontaktowy</h1> 
                <form action="" class="text-start">

                    <div class="input">
                        <label for="" class="mt-5 pt-5">Z kim powinniśmy się kontaktować?</label>
                        <input type="text" class="component__standardInput" placeholder="Z kim powinniśmy się kontaktować?">
                    </div>

                    <div class="input">
                        <label for="" class="mt-5 pt-5">Jaki kontakt preferujesz?</label>
                        <div class="row">
                            <div class="col me-2"><input type="text" class="component__standardInput" placeholder="email"></div>
                            <div class="col ms-2"><input type="text" class="component__standardInput" placeholder="telefon"></div>
                        </div>
                    </div>

                    <div class="input">
                        <label for="" class="mt-5 pt-5">Opisz krótko swój projekt i załącz pliki jeśli posiadasz</label>
                        <textarea type="text" class="component__standardInput"></textarea>
                    </div>

                    <div class="input my-5">
                        <p class="font__size__24 font__weight__7 mb-0">Załącz plik</p>
                        <p class="font__size__14" style="font-style: italic;">maksymalny rozmiar pliku to 10mb</p>

                        <div class="input">
                            <label for="file" class="mt-3 mb-0" style="cursor: pointer;">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/addMediaButton.png" alt="">
                                <span class="ms-3 d-inline-block font__size__18">DODAJ PLIK</span>
                            </label>
                            <input type="file" class="" style="display: none;" id="file">
                        </div>
                    </div>

                    <div class="input">
                        <div class="row">
                            <div class="col-auto">
                                <input type="checkbox" class="component__standardInput" style="width: 30px">
                            </div>
                            <div class="col">
                                <p class="font__size__16 font__weight__3">Wyrażam zgodę na przetwarzanie przez Onespark Agencja Kreatywna podanych przeze mnie danych osobowych w formularzu kontaktowym w celu kontaktu na zasadach określonych w "Polityce prywatności".</p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-lg-end justify-content-center mt-5">
                        <div class="col-auto">
                            <input type="submit" value="Wyślij" class="component__standardInput">
                        </div>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
</section>

<?php
    get_footer();
?>