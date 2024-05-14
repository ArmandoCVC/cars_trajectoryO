<?php get_header() ?>
<section class="models">
    <div class="models__container">

        <?php $term = get_queried_object(); ?>
        <div class="models__container_presentation">
            <h1> <span><?php the_field('mes-activite__models_titre', $term); ?></span> <?php single_term_title(); ?> </span> </h1>

            <p><?php the_field('mes-activite__models_paragraphe', $term); ?></p>
        </div>
    </div>

</section>

<section class="logos">
    <div class="logos__container">


        <div class="logos__container_marques">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="logos__container_marques_carte">
                        <div class="logos__container_marques_carte_img">
                            <img src="<?php the_field('marques__logo_img'); ?>" alt="">

                        </div>

                        <div class="logos__container_marques_carte_txt">
                            <a  href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>




<?php get_footer() ?>