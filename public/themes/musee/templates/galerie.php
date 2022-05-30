<?php

/**
 * Template Name: Galerie
 *
 * @package Musée Crozatier
 **/
get_header(); ?>

<?php require(locate_template('templates-parts/banner-intro.php')) ?>

<section class="galerie">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h1>Galerie historique</h1>
                <p class="sous_titre">La galerie historique présente les grands jalons de l’histoire régionale, de la Préhistoire à la Renaissance. Elle propose également des collections d’égyptologie et d’antiquités du bassin méditerranéen</p>
            </div>
        </div>
    </div>

    <?php
    $args = array(
        'numberposts' => -1,
        'posts_per_page' => -1,
        'post_type' => 'sous-galerie',
        'tax_query' => array(
            array(
                'taxonomy' => 'galerie',
                'field' => 'slug',
                'terms' => get_the_title()
            ),
        ),
    );

    $listSousGaleries = new WP_Query($args);
    if ($listSousGaleries->have_posts()) :
        while ($listSousGaleries->have_posts()) : ?>
            <?php $listSousGaleries->the_post(); ?>
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">
                        <?php if (!empty(get_field('sous-galerie'))) : ?>
                            <?php $galerie = get_field('sous-galerie'); ?>
                            <div class="prehistoire">
                                <h2><?= the_title(); ?></h2>
                                <img class="img_galerie" src="<?= $galerie['image']['url']; ?>" alt="<?= $galerie['image']['alt']; ?>">
                                <figcaption><?= $galerie['figcaption']; ?></figcaption>
                                <p class="artiste"><?= $galerie['artiste']; ?></p>
                                <div class="text desc_oeuvre">
                                    <?= $galerie['description']; ?>
                                </div>
                                <p class="text text_oeuvre_phare">Oeuvres phares :</p>
                            </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <?php $relations = get_field('ma_relation');
                            if ($relations) :
                                foreach ($relations as $post) :
                                    setup_postdata($post); var_dump($post) ?>
                            <div class="col-lg-3">
                                <div class="cardgallerie">
                                    <div class="containerImgGalerie">
                                        <?= the_post_thumbnail($size = 'imgCard'); ?>
                                    </div>
                                    <p class="fontcardgallerie"><?= the_title(); ?></p>
                                    <a href="<?= the_permalink(); ?>" class="btn-arrow_border">
                                        <p>Découvrir</p>
                                        <div class="icon_btn"><i class="fa-solid fa-arrow-right"></i></div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach;
                                wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


</section>


<?php get_footer(); ?>