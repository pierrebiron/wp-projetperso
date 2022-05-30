<?php

/**
 * Template Name: Galeries
 *
 * @package Musée Crozatier
 **/
get_header(); ?>

<section class="gallerie">
<?php get_template_part('templates-parts/banner-intro'); ?>
    <div class="container">
        <?php if (!empty(get_field('section_galerie'))) : ?>
            <?php $galerie = get_field('section_galerie'); ?>
            <h2><?= $galerie['titre_page']; ?></h2>
            <div class="row">
                <div class="col-12">
                    <div class="descsubtitle"><?= $galerie['description']; ?></div>
            </div>
        <?php endif; ?>

        <div class="row">
            <?php
            $args = array(
                'taxonomy' => 'galerie',
                'parent' => 0,
                'hide_empty' => false,
                'include' => array(6, 7, 8, 9),
            );
            $listCategory = get_terms('galerie', $args);
            ?>
            <?php if (!empty($listCategory)) : ?>
                <?php foreach ($listCategory as $category) : ?>
                    <?php $titre = get_field('titre', $category); ?>
                    <?php $image = get_field('image', $category); ?>
                    <?php $lien = get_field('lien', $category); ?>
                <div class="col-lg-3">
                    <div class="cardgallerie">
                        <div class="containerImgGalerie">
                            <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                        </div>
                        <p class="fontcardgallerie"><?= $titre; ?></p>
                        <a href="<?= $lien['url']; ?>" class="btn-arrow_border">
                            <p>Découvrir</p>
                            <div class="icon_btn"><i class="fa-solid fa-arrow-right"></i></div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

