<?php get_header() ?>

<section class="marques">
    <div class="marques__container">

        <div class="marques__container_presentation">
            <h1>Voici le Logo de <span> <?php the_title(); ?> </span> </h1>
        </div>

        <div class="marques__container_contenue">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="marques__container_contenue_carte">
                        <div class="marques__container_contenue_carte_img">
                            <img src="<?php the_field('marques__logo_grandimg'); ?>" alt="">

                        </div>

                        <div class="marques__container_contenue_carte_txt">
                            <h1> <?php the_title(); ?> </h1>
                            <p><?php the_field('marques__logo_description') ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</section>

<section class="logos">
    <div class="logos__container">

        <div class="logos__container_titre">
            <h1>Voici les Autres Logos</h1>
        </div>


        <div class="logos__container_marques">

            <?php
            // Obtenez l'ID du post actuel
            $current_post_id = get_the_ID();

            // Obtenez les termes associés à ce post
            $terms = wp_get_post_terms($current_post_id, 'models');

            if ($terms) {
                // Récupérer le premier terme (vous pouvez ajuster ceci selon vos besoins)
                $current_term = $terms[0];

                $args = array(
                    'post_type' => 'marques',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'models',
                            'field' => 'slug',
                            'terms' => $current_term->slug,
                            'operator' => 'IN', // Utilisez 'IN' pour récupérer les posts associés à n'importe lequel des termes
                        ),
                    ),
                    'post__not_in' => array($current_post_id), // Ne pas inclure le post actuel
                );


                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="logos__container_marques_carte">
                            <div class="logos__container_marques_carte_img">
                                <img src="<?php the_field('marques__logo_img'); ?>" alt="">
                            </div>

                            <div class="logos__container_marques_carte_txt">
                                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                            </div>
                        </div>
            <?php endwhile;
                endif;

                wp_reset_query();
                wp_reset_postdata();
            } else {
                echo 'Aucun terme trouvé.';
            }
            ?>


        </div>
    </div>
</section>

<?php get_footer() ?>