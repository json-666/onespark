
<section class="m-0 p-0" aria-label="white" aria-rowcount="" id="lastSection"></section>
<script>
   document.getElementById("lastSection").ariaRowCount = document.getElementsByTagName("section").length-1; 
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<footer class="container-fluid item__color__black py-5">
    <div class="container text-center text-lg-start">
        <img src="<?the_field("logotyp_dla_stopki", "options")?>" alt="">
        <div class="row mt-5 text-center text-lg-start justify-content-center justify-content-lg-between">
            <div class="col-lg col-md-4 col-12 g-0">
                <p class="mb-3">Onespark Agencja Kreatywna</p>
                <p class="mt-4">Phone:</p>
                <p class="mb-3"><a href="tel:+48 608 054 629">+48 608 054 629</a></p>
                <p class="mt-3">Office:</p>
                <p class="mb-3"><a href="mailto:info@onespark.pl">info@onespark.pl</a></p>
                <p class="mt-3">Recruitment:</p>
                <p class="mb-3"><a href="mailto:rekrutacja@onespark.pl">rekrutacja@onespark.pl</a></p>
                <p class="mt-3">Sales:</p>
                <p class="mb-3"><a href="mailto:oferta@onespark.pl">oferta@onespark.pl</a></p>
            </div>
            <div class="col-lg col-md-4 col-12 g-0 mt-4">
                <h5>Marketing</h5>
                <p class="my-3 mt-4">Content marketing</p>
                <p class="my-3">Kampanie reklamowe </p>
                <p class="my-3">Audyty</p>
            </div>
            <div class="col-lg col-md-4 col-12 g-0 mt-4">
                <h5>Design</h5>
                <p class="my-3 mt-4">Webdesign</p>
                <p class="my-3">Branding</p>
                <p class="my-3">Projektowanie materiałów drukowanych</p>
                <p class="my-3">Inne</p>
            </div>
            <div class="col-lg col-md-4 col-12 g-0 mt-4">
                <h5>Strony i sklepy internetowe</h5>
                <p class="my-3 mt-4">Tworzenie stron internetowych</p>
                <p class="my-3">Tworzenie sklepów internetowych</p>
            </div>
            <div class="col-lg col-md-4 col-12 g-0 mt-4">
                <h5>Firma</h5>
                <p class="my-3 mt-4">How we work</p>
                <p class="my-3">Blog</p>
                <p class="my-3">Carrers <?if( get_field("zatrudniamy","options") == "1"){?><img src="<? echo get_template_directory_uri(  )?>/images/hireing.png" class="d-inline-block" alt=""><?}?></p>
                <p class="my-3">Contact us</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg mb-3 mb-lg-0"><p class="text-center font__size__13 font__color__grey">©2021 Onespark Agencja Kreatywna. Wszelkie Prawa Zastrzeżone.</p></div>
            <?php
                while( have_rows("social_media","options") ){
                    the_row();
                    ?>
                    <div class="col-auto"><a href="<?the_sub_field("link")?>"><img src="<?the_sub_field("obrazek")?>" alt=""></a></div>
                    <?php
                }
            ?>

        </div>
    </div>
</footer>
</div>
<script>
    var wow = new WOW().init();
    var sticky = document.getElementById('sticky');
    window.addEventListener('wheel', function(e){
        if(e.deltaY > 0){
            try{
                sticky.style.top = "150px";
            }catch{}
            if( document.getElementsByTagName("body")[0].classList.contains("scrolling-up") ){
                document.getElementsByTagName("body")[0].classList.remove("scrolling-up");
                document.getElementsByTagName("body")[0].classList.add("scrolling-down");
            }
            else{
                document.getElementsByTagName("body")[0].classList.add("scrolling-down");
            }
        }
        else{
            try{
                sticky.style.top = "210px";
            }catch{}
            if( document.getElementsByTagName("body")[0].classList.contains("scrolling-down") ){
                document.getElementsByTagName("body")[0].classList.remove("scrolling-down");
                document.getElementsByTagName("body")[0].classList.add("scrolling-up");
            }
            else{
                document.getElementsByTagName("body")[0].classList.add("scrolling-up");
            }
        }
    });

    $(document).ready(function() {
        $('img').each(function(){
          var $img = $(this);
          var filename = $img.attr('src')
          $img.attr('alt', filename.substring(0, filename.lastIndexOf('.')));
        });
        $('a').each(function(){
          var $img = $(this);
          var filename = $img.attr('href')
          $img.attr('alt', filename.substring(0, filename.lastIndexOf('/')));
        });
    });

    try{
        $( window ).unload(function() { 
            document.getElementById( 'customDefaultId' ).classList.add( "fadeOut" )
        });
    }
    catch{}

</script>
<?php wp_footer(); ?>
</body>
</html>