<?php

/**
 * Template Name: Accueil
 *
 * @package Musée Crozatier
 **/
get_header(); ?>
<section class="slider">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\banner_home.jpg" class="d-block w-100" alt="...">
                <div class="black-banner container-fluid">
                    <div class="row row-slider">
                        <div class="col-12 offset-1 inner-black-banner">
                            <h3>Cours histoire de l'art</h3>
                            <a href="" class="btn-arrow">
                                <p>Découvrir</p>
                                <div class="icon_btn"><i class="fa-solid fa-arrow-right"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\banner_home.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\banner_home.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="information">
    <div class="container">
        <h2>Informations du musée</h2>
        <div class="row g-5 justify-content-between">
            <img class="info_deco_1 deco" src="<?= get_stylesheet_directory_uri() ?>\assets\img\deco.png" alt="">
            <img class="info_deco_2 deco" src="<?= get_stylesheet_directory_uri() ?>\assets\img\deco.png" alt="">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="carte_home">
                    <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\background_tarifs.png" alt="">
                    <a href="" class="btn-arrow_border">
                        <p>Découvrir</p>
                        <div class="icon_btn"><i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="carte_home">
                    <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\background_horaires.png" alt="">
                    <a href="" class="btn-arrow_border">
                        <p>Découvrir</p>
                        <div class="icon_btn"><i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="carte_home">
                    <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\background_scolaires.png" alt="">
                    <a href="" class="btn-arrow_border">
                        <p>Découvrir</p>
                        <div class="icon_btn"><i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="carte_home">
                    <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\background_handicaps.png" alt="">
                    <a href="" class="btn-arrow_border">
                        <p>Découvrir</p>
                        <div class="icon_btn"><i class="fa-solid fa-arrow-right"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="agenda">
    <div class="container">
        <h2>Agenda</h2>
        <h3>Les événements à venir</h3>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card_agenda">
                    <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\agenda_01.jpg" alt="">
                    <div class="encart">
                        <h4>Criée Publique</h4>
                        <h5>13 mars 2022</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card_agenda">
                    <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\agenda_01.jpg" alt="">
                    <div class="encart">
                        <h4>Criée Publique</h4>
                        <h5>13 mars 2022</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card_agenda">
                    <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\agenda_01.jpg" alt="">
                    <div class="encart">
                        <h4>Criée Publique</h4>
                        <h5>13 mars 2022</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pah">
    <div class="container">
        <h2>Un pays d'art et d'histoire</h2>
        <div class="row">
            <div class="col-12">
                <div class="row row_pah">
                    <div class="col-lg-6 col-md-12 deco_relative">
                        <img class="info_deco_3 deco" src="<?= get_stylesheet_directory_uri() ?>\assets\img\deco.png" alt="">
                        <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>\assets\img\pah1.png" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h3>"Tout un label !"</h3>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quod distinctio facilis incidunt labore, ad eaque odit minus, maxime deleniti, laborum iste ea neque eius ducimus magni inventore molestias reprehenderit?</p>
                        <ul>
                            <li>Des collectivités engagés</li>
                            <li>Un label au service du public</li>
                            <li>21 territoires, un label</li>
                            <li>Une approche inveitive et pédagogique</li>
                        </ul>
                        <a href="" class="btn-arrow_border">
                            <p>Un pays d'art et d'histoire</p>
                            <div class="icon_btn"><i class="fa-solid fa-arrow-right"></i></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row row_pah">
                    <div class="col-lg-6 col-md-12">
                        <h3>"Tout un label !"</h3>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quod distinctio facilis incidunt labore, ad eaque odit minus, maxime deleniti, laborum iste ea neque eius ducimus magni inventore molestias reprehenderit?</p>
                        <ul>
                            <li><a href="">Une approche inveitive et pédagogique<i class="fa-solid fa-arrow-right"></i></a></li>
                            <li><a href="">Une approche inveitive et pédagogique<i class="fa-solid fa-arrow-right"></i></a></li>
                            <li><a href="">Une approche inveitive et pédagogique<i class="fa-solid fa-arrow-right"></i></a></li>
                            <li><a href="">Une approche inveitive et pédagogique<i class="fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 deco_relative">
                        <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>\assets\img\pah2.png" alt="">
                        <img class="info_deco_3 deco" src="<?= get_stylesheet_directory_uri() ?>\assets\img\deco.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="newsletter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\deco.png" alt="">
            </div>
            <div class="col-lg-6">
                <h2>S'INSCRIRE À LA NEWSLETTER</h2>
            </div>
            <div class="col-lg-4">
                <form class="d-flex" action="">
                    <input class="input_newsletter" placeholder="Votre email..." type="mail">
                    <a href="" class="btn-arrow_border">
                        <p>Inscription</p>
                    </a>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="zoom">
    <div class="container">
        <h2>Zoom sur...</h2>
        <div class="row deco_relative">
            <img class="zoom_deco_1 deco" src="<?= get_stylesheet_directory_uri() ?>\assets\img\deco.png" alt="">
            <img class="zoom_deco_2 deco" src="<?= get_stylesheet_directory_uri() ?>\assets\img\deco.png" alt="">
            <div class="col-lg-4 col-md-12">
                <div class="container-zoom">
                    <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\zoom1.png" alt="">
                    <div class="inner_zoom">
                        <p>La garde robe en peaux de vipères de Courtol : une restauration délicate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="container-zoom">
                    <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\zoom1.png" alt="">
                    <div class="inner_zoom">
                        <p>La garde robe en peaux de vipères de Courtol : une restauration délicate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="container-zoom">
                    <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\zoom1.png" alt="">
                    <div class="inner_zoom">
                        <p>La garde robe en peaux de vipères de Courtol : une restauration délicate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_field("sous-galerie");
$featured_posts = get_field('ma_relation');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $featured_post ): 
        $permalink = get_permalink( $featured_post->ID );
        $title = get_the_title( $featured_post->ID );
        $custom_field = get_field( 'field_name', $featured_post->ID );
        ?>
        <li>
            <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
            <span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php get_footer(); ?>