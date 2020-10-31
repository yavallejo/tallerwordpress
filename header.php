<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ronaldo - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <?php
            $url = home_url('/');

            ?>
            <a class="navbar-brand" href="<?php echo $url; ?>"><span>R</span>onaldo</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="index.html#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="index.html#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="index.html#resume-section" class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="index.html#services-section" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="index.html#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="index.html#blog-section" class="nav-link"><span>My Blog</span></a></li>
                    <li class="nav-item"><a href="index.html#contact-section" class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-10 ftco-animate d-flex align-items-center">
                    <div class="text text-center">
                        <h1 class="mb-3 bread"><?php the_title(); ?></h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>