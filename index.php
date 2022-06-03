<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta property="og:site_name" content="mazanlabeeb.me">
    <meta property="og:title" content="Mazan Labeeb" />
    <meta property="og:description" content="Hello! I am Mazan Labeeb. I am a full stack web developer with an experience of more than 5 years. " />
    <meta property="og:image" itemprop="image" content="assets/img/avatars/avatar.jpg">
    <meta property="og:type" content="website" />
    <meta name="description" content="Mazan Labeeb">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP , Mazan Labeeb ">
    <meta name="author" content="Mazan Labeeb">

    <title>Home - Mazan Labeeb</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <?php
    require "include/header.php";
    ?>
    <main class="page lanidng-page">
        <section class="portfolio-block block-intro">
            <div class="container" data-aos="fade" data-aos-duration="3000" data-aos-once="true">
                <div class="avatar" style="background-image:url(&quot;assets/img/avatars/avatar.jpg&quot;);"></div>
                <div class="about-me">
                    <p>Hello! I am <strong>Mazan Labeeb. </strong>I am a full stack web developer with an experience of more than 5 years.&nbsp;</p><a class="btn btn-outline-primary" role="button" href="hire-me.php">Hire me</a>
                </div>
            </div>
        </section>
        <section class="portfolio-block photography">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/nature/image5.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/nature/image2.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/tech/image4.jpg"></a></div>
                </div>
            </div>
        </section>
        <section data-aos="flip-left" data-aos-duration="1500" data-aos-once="true" class="portfolio-block call-to-action border-bottom">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center content">
                    <h3>Like what you see?</h3><button class="btn btn-outline-primary btn-lg" onclick="window.location.href='hire-me.php'" type="button">Hire me</button>
                </div>
            </div>
        </section>
        <section class="portfolio-block skills">
            <div class="container" data-bss-hover-animate="bounce">
                <div class="heading">
                    <h2 data-aos="fade" data-aos-duration="2000" data-aos-once="true">Special Skills</h2>
                </div>
                <div class="row">
                    <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title"><strong>Backend&nbsp;</strong><br></h3>
                                <p class="card-text">I use PHP alongwith MySql database for developing backend of the web application. I can program any kind of web app.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in" data-aos-duration="950" data-aos-once="true">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Web Design</h3>
                                <p class="card-text">I design the frontend using bootstrap studio. However, I have well knowledge of custom responsive web design.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in" data-aos-duration="950" data-aos-once="true">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title"><strong>Electrical and Electronics</strong><br></h3>
                                <p class="card-text">I can help you in your Electrical Engineering problems. Can work with softwares related to Electrical field.<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="portfolio-block website gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 offset-lg-1 text" data-aos="flip-down" data-aos-duration="1500" data-aos-once="true">
                    <h3>Website Project</h3>
                    <p>Websites are great for boosting your business advertisement. You can sell your products online.&nbsp; If you are a content writer, you can make your blog. I provide service to any kind of web solution.</p>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div data-aos="zoom-out" data-aos-duration="1500" data-aos-once="true" class="portfolio-laptop-mockup">
                        <div class="screen">
                            <div class="screen-content" style="background-image:url(&quot;assets/img/tech/image6.png&quot;);"></div>
                        </div>
                        <div class="keyboard"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    require "include/footer.php";
    ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>