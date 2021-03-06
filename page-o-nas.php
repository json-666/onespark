<?php
    get_header();
?>

<section class="row w-100 component__slider__home component__standardSection m-0 is-in-viewport" aria-label="black" aria-rowcount="0" data-depth="3">
    <div class="container" style="max-width: 1500px !important;">
        <div class="d-flex align-items-center h-100 w-100">
            <div class="col-lg col-12 text-lg-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                <h1 class="text-center font__size__48 font__weight__700">Jesteśmy designerami,<br/>rozwiązujemy problemy...<br/><br/>reszta to marketing</h1>
            </div>
        </div>
    </div>
</section>
<section id="aboutUs" class="component__standardSection component__standardSection__variableHeight js-changeColor font__color__black next-in-viewport m-0" aria-label="black" aria-rowcount="1" data-depth="2">
    <div class="container" tyle="max-width: 1560px !important;">
        <div class="row align-items-center">
            <div class="col-lg">
                <img src="<?php echo get_template_directory_uri() ?>/images/AdobeStock_244936579.png" class="w-100 wow animate__animated animate__fadeInUp" data-wow-delay=".5s" alt="">
            </div>

            <div class="col-lg text-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/AdobeStock_415116560.png" class="w-100 mt-5 wow animate__animated animate__fadeInUp" data-wow-delay=".25s" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/images/AdobeStock_215885531.png" class="w-100 mt-5 wow animate__animated animate__fadeInUp" data-wow-delay=".75s" alt="" style="margin-top: 300px;">
            </div>
        </div>
    </div>
</section>

<?php $i = 1; ?>
<?php while( have_rows( "flexes" ) ): the_row(); ?>
<div class="font__color__black m-0 p-0 wow animate__animated animate__fadeInUp" data-wow-delay=".5s" aria-label="black" aria-rowcount="<?php echo $i+1; ?>" data-depth="2">
    <div class="container" tyle="max-width: 1500px !important;">
        <div class="component__aboutus--flexyItem">
            <div class="row align-items-center justify-content-between my-5 py-5 component__aboutus--flexyItem__item">
                <div class="col-lg-5 component__aboutus--flexyItem__item--image <?php if($i%2 == 0){echo "order-last";} ?>">
                    <img src="<?php the_sub_field( "obraz" ); ?>" alt=""class="w-100 image-responsive">
                </div>
                <div class="col-lg-6 content mt-4 mt-lg-0">
                    <h2 class="font__size__48 font__weight__7 font__color__white"><?php the_sub_field( "tytul" ) ?></h2>
                    <div class="mt-4 font__color__white font__size__16 me-lg-5" style="line-height: 26px;">
                        <?php the_sub_field( "opis" ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $i++; ?>
<?php endwhile; ?>

<div class="font__color__black m-0 py-5" id="defer-scroll" aria-label="black" aria-rowcount="<?php echo $i+1; ?>" data-depth="2">
    <div class="row flex-nowrap defer-scroll slideInLeft justify-content-center" style="overflow-x: scroll; overflow-y: hidden">
        <!--<div class="col-lg-7 col-1 "></div>-->
        <?php $j = 0; ?>
        <?php while( have_rows( "zespol" ) ): the_row(); 
            $elementDelay = 0;
            $initialDelay = .5;
            $thisDelay = .20*$j;
            $elementDelay = $thisDelay+$initialDelay;
        ?>
        <div class="col-lg-2 col-sm-6 col-10 font__color__white position-relative px-3 wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo $elementDelay;?>s">
            <img src="<?php the_sub_field( "zdjecie_#1" ); ?>" alt="" class="w-100 position-relative" style="transition: .25s all; left: 0;" id="zdjecie1<?php echo $j ?>">
            <img src="<?php the_sub_field( "zdjecie_#2" ); ?>" alt="" class="w-100 position-absolute opacity-0" style="transition: .25s all; left: 0; padding: 0 17px;" id="zdjecie2<?php echo $j ?>">
            <h2 class="font__size__24 font__weight__700 mt-4"><?php the_sub_field( "imie" ); ?></h2>
            <p class="font__size__16 mt-2"><?php the_sub_field( "stanowisko" ); ?></p>
            <div class="mt-4 font__size__16" style="transition: .25s all; opacity: 0; max-height: 0" id="expandableText<?php echo $j ?>">
                <?php the_sub_field( "opis" ); ?>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/images/plas.svg" alt="" onclick="expand(this, <?php echo $j ?>)" class="plus position-relative" style="cursor: pointer; z-index: 99; transition: .25s all">
        </div>
        <?php $j++; ?>
        <?php endwhile; ?>
        <!--<div class="col-lg-7 col-1 "></div>-->
    </div>
</div>
<script>
    //var changed = false;
    //var left = 100;
    //window.mobileCheck = function() {
    //    let check = false;
    //    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
    //    return check;
    //};
    //window.addEventListener('wheel', function(e) {
    //    
    //    if(document.getElementsByClassName("is-in-viewport")[0].id == "defer-scroll" && window.mobileCheck() == false){
    //        if(document.getElementsByClassName("is-in-viewport")[0].getBoundingClientRect().y < 123 && !changed){
    //            document.getElementsByTagName("body")[0].classList.add("overflow-hidden");
    //            changed = true;
    //            left = 100;
    //        }
    //        if(left > 0 && left <= document.getElementsByClassName("defer-scroll")[0].getBoundingClientRect().width){
    //            if(e.deltaY > 0){
    //                left = left + 200;
    //            }
    //            else{
    //                left = left - 200;
    //            }
    //            document.getElementsByClassName("defer-scroll")[0].scrollTo({ top: 0, left: left, behavior: 'smooth' });
    //        }
    //        else if(left > 0 && left <= document.getElementsByClassName("defer-scroll")[0].getBoundingClientRect().width+100){
    //            if(e.deltaY > 0){
    //                document.getElementsByTagName("body")[0].classList.remove("overflow-hidden");
    //            }
    //            else{
    //                left = left - 50;
    //            }
    //            document.getElementsByClassName("defer-scroll")[0].scrollTo({ top: 0, left: left, behavior: 'smooth' });
    //        }
    //    }
    //    
    //});
    //window.addEventListener('wheel', function(e) {
    //    console.log("scrolled");
    //    if(document.getElementsByClassName("is-in-viewport")[0].id == "defer-scroll" &&  window.mobileCheck == false){
    //        console.log("scrolled");
    //        if(left == 0){
    //            changed = false;
    //        }

    //        if(document.getElementsByClassName("is-in-viewport")[0].getBoundingClientRect().y < 123 && !changed){
    //            document.getElementsByTagName("body")[0].classList.add("overflow-hidden");
    //            changed = true;
    //            left = 100;
    //        }

    //        if(left > 0 && left <= document.getElementsByClassName("defer-scroll")[0].getBoundingClientRect().width){

    //            if(e.deltaY > 0){
    //                left = left + 200;
    //            }
    //            else{
    //                left = left - 200;
    //            }

    //            document.getElementsByClassName("defer-scroll")[0].scrollTo({ top: 0, left: left, behavior: 'smooth' });

    //        }
    //        else if(left > 0 && left <= document.getElementsByClassName("defer-scroll")[0].getBoundingClientRect().width+100){
    //            if(e.deltaY > 0){
    //                document.getElementsByTagName("body")[0].classList.remove("overflow-hidden");
    //            }
    //            else{
    //                left = left - 50;
    //            }
    //            document.getElementsByClassName("defer-scroll")[0].scrollTo({ top: 0, left: left, behavior: 'smooth' });
    //        }
    //        // console.log(left);
    //    }
    //});
</script>

<script>
    function expand(x, id){
        var name = "expandableText"+id;
        var photoName1 = "zdjecie1"+id;
        var photoName2 = "zdjecie2"+id;

        if(x.classList.contains( "plus" )){
            x.classList.remove("plus");
            x.classList.add("minus");
            x.src = "<?php echo get_template_directory_uri() ?>/images/minus.svg";
            document.getElementById(name).style.transition = ".25s all";
            document.getElementById(name).style.maxHeight = "300px";
            document.getElementById(name).style.removeProperty("opacity");
            document.getElementById(photoName1).style.opacity = "0";
            document.getElementById(photoName2).classList.remove("opacity-0");
        }
        else{
            x.classList.add("plus");
            x.classList.remove("minus");
            x.src = "<?php echo get_template_directory_uri() ?>/images/plas.svg";
            document.getElementById(name).style.transition = ".25s all";
            document.getElementById(name).style.maxHeight = "0";
            document.getElementById(name).style.opacity = "0";
            document.getElementById(photoName1).style.opacity = "1";
            document.getElementById(photoName2).classList.add("opacity-0");
        }
    }
</script>
<?php get_footer(); ?>
<script>
//butter.cancel();
</script>