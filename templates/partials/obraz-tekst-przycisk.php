<div class="container" style="max-width: 1360px !important">
    <article class="my-5 py-5">
        <div class="row align-items-center">
            <div class="col">
                <h2 class=" font__size__48">
                    <?the_sub_field("naglowek")?>
                </h2>
                <a href="kontakt/" class="mt-5 d-inline-block item__btn component__btn-challenge font__color__purple font__weight__7 component__btn--challenge-two" alt="kontakt" style="color: <?php echo the_field( "kolor_czcionki" ) ?> !important; border: 2px solid <?php echo the_field( "kolor_czcionki" ) ?>"><x>Masz dla nas wyzwanie?</x></a>
            </div>
            <div class="col-lg col-12 ">
                <img src="<?php the_sub_field( "obraz" ); ?>" alt="" class="w-100" style="max-width: fit-content;">
            </div>
        </div>
    </article>
</div>
<style>
    .component__btn--challenge-two:hover{
        background-color: <?php echo the_field( "kolor_czcionki" ) ?>;   
    }
    .component__btn--challenge-two:hover x{
        color: white !important;
    }
</style>