<?php /* Template Name: mes-activite */ ?>

<?php get_header() ?>
<section class="activite1">

    <div class="activite1__banniere" style="background-image: url('<?php the_field('mes-activite__banniere_img'); ?>');">
        <div class="activite1__banniere_overlay">
            <h1><?php the_field('mes-activite__banniere_titre'); ?></h1>
        </div>
    </div>
</section>

<section class="contenue">
    <div class="contenue__container">
        
        <div class="contenue__container_presentation">
            <h1><?php the_field('mes-activite__contenue_titre'); ?></h1>
            <p><?php the_field('mes-activite__contenue_paragraphe'); ?></p>
        </div>

        <div class="contenue__container_marques">

            <?php
                $terms = get_terms(array(
                    'taxonomy' => 'models',
                    'hide_empty' => true,
                ));
            ?>

            <?php foreach ($terms as $term) : ?>

                <div class="contenue__container_marques_carte" style="background-image:url('<?php the_field('mes-activite__carte_img', $term); ?>');">

                    <div class="contenue__container_marques_carte_overlay">

                        <div class="contenue__container_marques_carte_overlay_logo">
                            <img src="<?php the_field('mes-activite__carte_logo', $term); ?>" alt="">
                        </div>

                        <div class="contenue__container_marques_carte_overlay_textes">
                            <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>
</section>




<?php get_footer() ?>