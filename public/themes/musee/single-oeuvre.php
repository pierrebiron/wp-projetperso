<?php

get_header(); ?>
<section class="oeuvre">
    <div class="container">
        <div class="row">
            <div class="col-12">
    <h1><?= the_title(); ?></h1>

                <h2><?= the_field('sous-titre'); ?></h2>
            </div>
            <div>
                <?= the_post_thumbnail(); ?>
            </div>
            <div class="text">
                <?= the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>