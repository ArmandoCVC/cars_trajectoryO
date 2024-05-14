<?php get_header() ?>

<section class="front-section1">

    <div class="front-section1__container">
        <div class="front-section1__container_textes">
            <h1><?php the_field('front-page_titre'); ?></h1>

            <p><?php the_field('front-page_paragraphe'); ?></p>
        </div>
    </div>

</section>

<?php get_footer() ?>