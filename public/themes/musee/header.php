<!DOCTYPE html>
<html lang="en">
<?php if (is_front_page()) : ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <?php wp_head(); ?>
        <title>Musée Crozatier</title>
    </head>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-2 logo">
                    <a href="/">
                        <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\logo_musee.jpg" alt="Logo Musée Crozatier">
                    </a>
                </div>
                <div class="col-4 top-menu">
                    <p>Un service, des missions</p>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="col-6 top-contact">
                    <a href="/contact.php">
                        <div class="mail">
                            <i class="fa-solid fa-envelope"></i>
                            <p>Contact</p>
                        </div>
                    </a>
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <p>04 71 06 62 40</p>
                    </div>
                    <div class="separator">

                    </div>
                    <div class="social">
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-youtube"></i>
                        <svg class="tripadvisor" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
                            <path d="M 25 11 C 19.167969 11 13.84375 12.511719 9.789063 15 L 2 15 C 2 15 3.753906 17.152344 4.578125 19.578125 C 2.96875 21.621094 2 24.195313 2 27 C 2 33.628906 7.371094 39 14 39 C 17.496094 39 20.636719 37.492188 22.828125 35.105469 L 25 38 L 27.171875 35.105469 C 29.363281 37.492188 32.503906 39 36 39 C 42.628906 39 48 33.628906 48 27 C 48 24.195313 47.03125 21.621094 45.421875 19.578125 C 46.246094 17.152344 48 15 48 15 L 40.203125 15 C 36.148438 12.511719 30.828125 11 25 11 Z M 25 13 C 28.882813 13 32.585938 13.707031 35.800781 15.011719 C 30.964844 15.089844 26.824219 18.027344 25 22.214844 C 23.171875 18.019531 19.023438 15.078125 14.171875 15.011719 L 14.242188 14.988281 C 17.453125 13.699219 21.144531 13 25 13 Z M 14 17 C 19.523438 17 24 21.476563 24 27 C 24 32.523438 19.523438 37 14 37 C 8.476563 37 4 32.523438 4 27 C 4 21.476563 8.476563 17 14 17 Z M 36 17 C 41.523438 17 46 21.476563 46 27 C 46 32.523438 41.523438 37 36 37 C 30.476563 37 26 32.523438 26 27 C 26 21.476563 30.476563 17 36 17 Z M 14 21 C 10.6875 21 8 23.6875 8 27 C 8 30.3125 10.6875 33 14 33 C 17.3125 33 20 30.3125 20 27 C 20 23.6875 17.3125 21 14 21 Z M 36 21 C 32.6875 21 30 23.6875 30 27 C 30 30.3125 32.6875 33 36 33 C 39.3125 33 42 30.3125 42 27 C 42 23.6875 39.3125 21 36 21 Z M 14 23 C 16.210938 23 18 24.789063 18 27 C 18 29.210938 16.210938 31 14 31 C 11.789063 31 10 29.210938 10 27 C 10 24.789063 11.789063 23 14 23 Z M 36 23 C 38.210938 23 40 24.789063 40 27 C 40 29.210938 38.210938 31 36 31 C 33.789063 31 32 29.210938 32 27 C 32 24.789063 33.789063 23 36 23 Z M 14 25 C 12.894531 25 12 25.894531 12 27 C 12 28.105469 12.894531 29 14 29 C 15.105469 29 16 28.105469 16 27 C 16 25.894531 15.105469 25 14 25 Z M 36 25 C 34.894531 25 34 25.894531 34 27 C 34 28.105469 34.894531 29 36 29 C 37.105469 29 38 28.105469 38 27 C 38 25.894531 37.105469 25 36 25 Z" />
                        </svg>
                    </div>
                    <div class="langue">
                        <p>fr</p>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row offset-2 ">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'main_menu',
                    'menu_class' => "main_menu",
                    'menu_id' => '',
                    'container_class' => '',
                    'container_id' => ''
                )
            );

            ?>
        </div>
    </div>
<?php else : ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <?php wp_head(); ?>
        <title>Musée Crozatier</title>
    </head>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-2 logo">
                    <a href="/">
                        <img src="<?= get_stylesheet_directory_uri() ?>\assets\img\logo_musee.jpg" alt="Logo Musée Crozatier">
                    </a>
                </div>
                <div class="col-4 top-menu">
                    <p>Un service, des missions</p>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="col-6 top-contact">
                    <a href="/contact">
                        <div class="mail">
                            <i class="fa-solid fa-envelope"></i>
                            <p>Contact</p>
                        </div>
                    </a>
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <p>04 71 06 62 40</p>
                    </div>
                    <div class="separator">

                    </div>
                    <div class="social">
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-youtube"></i>
                        <svg class="tripadvisor" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
                            <path d="M 25 11 C 19.167969 11 13.84375 12.511719 9.789063 15 L 2 15 C 2 15 3.753906 17.152344 4.578125 19.578125 C 2.96875 21.621094 2 24.195313 2 27 C 2 33.628906 7.371094 39 14 39 C 17.496094 39 20.636719 37.492188 22.828125 35.105469 L 25 38 L 27.171875 35.105469 C 29.363281 37.492188 32.503906 39 36 39 C 42.628906 39 48 33.628906 48 27 C 48 24.195313 47.03125 21.621094 45.421875 19.578125 C 46.246094 17.152344 48 15 48 15 L 40.203125 15 C 36.148438 12.511719 30.828125 11 25 11 Z M 25 13 C 28.882813 13 32.585938 13.707031 35.800781 15.011719 C 30.964844 15.089844 26.824219 18.027344 25 22.214844 C 23.171875 18.019531 19.023438 15.078125 14.171875 15.011719 L 14.242188 14.988281 C 17.453125 13.699219 21.144531 13 25 13 Z M 14 17 C 19.523438 17 24 21.476563 24 27 C 24 32.523438 19.523438 37 14 37 C 8.476563 37 4 32.523438 4 27 C 4 21.476563 8.476563 17 14 17 Z M 36 17 C 41.523438 17 46 21.476563 46 27 C 46 32.523438 41.523438 37 36 37 C 30.476563 37 26 32.523438 26 27 C 26 21.476563 30.476563 17 36 17 Z M 14 21 C 10.6875 21 8 23.6875 8 27 C 8 30.3125 10.6875 33 14 33 C 17.3125 33 20 30.3125 20 27 C 20 23.6875 17.3125 21 14 21 Z M 36 21 C 32.6875 21 30 23.6875 30 27 C 30 30.3125 32.6875 33 36 33 C 39.3125 33 42 30.3125 42 27 C 42 23.6875 39.3125 21 36 21 Z M 14 23 C 16.210938 23 18 24.789063 18 27 C 18 29.210938 16.210938 31 14 31 C 11.789063 31 10 29.210938 10 27 C 10 24.789063 11.789063 23 14 23 Z M 36 23 C 38.210938 23 40 24.789063 40 27 C 40 29.210938 38.210938 31 36 31 C 33.789063 31 32 29.210938 32 27 C 32 24.789063 33.789063 23 36 23 Z M 14 25 C 12.894531 25 12 25.894531 12 27 C 12 28.105469 12.894531 29 14 29 C 15.105469 29 16 28.105469 16 27 C 16 25.894531 15.105469 25 14 25 Z M 36 25 C 34.894531 25 34 25.894531 34 27 C 34 28.105469 34.894531 29 36 29 C 37.105469 29 38 28.105469 38 27 C 38 25.894531 37.105469 25 36 25 Z" />
                        </svg>
                    </div>
                    <div class="langue">
                        <p>fr</p>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row offset-2 ">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'main_menu',
                    'menu_class' => "main_menu",
                    'menu_id' => '',
                    'container_class' => '',
                    'container_id' => ''
                )
            );

            ?>
        </div>
    </div>
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('
<div class="container-fluid arianne">
<div class="container ">
<p id="breadcrumbs">', '</p>
</div>
</div>
');
    }
    ?>

<?php endif; ?>