<!DOCTYPE html>
<html lang="en">
    <head>
        <title> </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

        <!-- CSS -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/markup.js"></script>
        
        <style>
            ul{
                list-style:none;
                padding: 0;
            }
            .custom_related_searches{
                margin-top:55px;
            }
        </style>
        
    </head>
    <body>
        <div class="site" id="page">
            <a class="skip-link sr-only" href="#main">Skip to content</a>

            <section class="hero-section hero-section--slider clearfix">
                <div class="hero-section__wrap">

                    <!-- Options slick plugin: data-arrows="true/false" | data-dots="true/false" | data-fade="true/false" | data-autoplay="true/false/number" | data-speed="number" -->
                    <div class="hero-section__option" data-init="slick" data-arrows="false" data-dots="true" data-fade="false" data-autoplay="5000" data-speed="3000">
                        <img src="assets/images/naples-swimming-pool-contracted-by-jps-min.jpg" alt="Pool Service">
                        <img src="assets/images/fort-myers-swimming-pool-repairs-by-jps-min.jpg" alt="Pool Maintenance">
                        <img src="assets/images/swimming-pool-naples-serviced-by-jackson-pool-service-min.jpg" alt="Pool Construction">
                    </div>
                    <!-- .hero-section__option -->

                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8">
                                <div class="title-01 title-01--11 text-center">
                                    <h1 class="title__heading"><?= (ucwords($dataset['text'])) ?></h1>
                                    
                                    <div class="title__action"><a href="tel:239-232-2277" class="btn btn-success">Call Us Now  <i class="fas fa-phone"></i> </a></div>
                                    
                                    
                                    <div class="title__description">
                                        <h4 class="custom_related_searches">Related Searches:</h4>
                                        
                                        <ul>
<?php foreach (($dataset['random']?:[]) as $key=>$item): ?>
    <li><a href="https://swimmingpoolcontractorfortmyers.com/<?= ($item) ?>" ><?= (ucwords($key)) ?></a></li>
<?php endforeach; ?>
                                        </ul>
                                    </div>

                                    <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                    
                                </div>
                                <!-- .title-01 -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .hero-section__wrap -->
            </section>
            <!-- .hero-section -->
        </div>

        <!-- JS -->
        <script src="assets/js/plugins/slick.min.js"></script>
        <script src="assets/js/plugins/animate-headline.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
