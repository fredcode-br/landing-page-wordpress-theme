<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        wp_head();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri();?>/landingpage/style.css">
</head>
<body>
    <header class="container-xxl d-flex align-items-center">
        <nav class="navbar w-100 d-flex justify-content-end">
            <ul class="nav-links d-flex list-unstyled text-light m-0 fs-5">
                <li><a href="/wordpress/home"><p class="m-0 px-5">Home</p></a></li>
                <li><a href="/wordpress/sobre"><p class="m-0 px-5">Sobre</p></a></li>
                <li><a href="/wordpress/download"><p class="m-0 px-5">Download</p></a></li>
                <li><a href="/wordpress/contato"><p class="m-0 px-5">Contato</p></a></li>
            </ul>
        </nav>
    </header>