<?php

/**
 * Template Name: Contact
 *
 * @package Musée Crozatier
 **/
get_header(); ?>
<?php get_template_part('templates-parts/banner-intro'); ?>
<section class="contact">
    <div class="container">
        <div class="row">
            <h2>Nous contacter</h2>
        </div>
        <div class="row">
            <div class="col-4 info-contact">
                <h3>Informations de contact</h3>
                <p>2 Rue Antoine Martin</p>
                <p>43000 Le Puy-En-Velay</p>
                <p>museecrozatier@contact.fr</p>
                <p>04 71 06 62 40</p>
            </div>
            <div class="col-8">
                <?php if (!empty(get_field('formulaire'))) : ?>
                    <?php $form = get_field('formulaire'); ?>
                    <?= $form; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>