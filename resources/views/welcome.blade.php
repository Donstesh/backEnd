<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <title>Spy-da Music Publishing</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class='bx bxs-envelope'></i> info@spy-damusicpublishing.com</p>
                    <p> <i class='bx bxs-phone-call'></i> +44 0207 097 4657</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">SPY-DA <br><span class="dot">MUSIC PUBLISHING</span><span class="dot">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#licensing">Licensing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Synchronisation</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Advertising and Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#songwritters">SongWritters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#game">Games and Films</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Clients Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://spy-damusicgroup.com/">SMG</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-brand ms-lg-3">Contact</a>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h1 class="display-3 my-4">Music <br />Synchronisation</h1>
                        <a href="https://licensing.spy-damusicpublishing.com" class="btn btn-brand">Get Started</a>
                        <a href="#services" class="btn btn-outline-light ms-3">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h1 class="display-3 my-4">Music <br />Licensing</h1>
                        <a href="https://licensing.spy-damusicpublishing.com" class="btn btn-brand">Get Started</a>
                        <a href="#services" class="btn btn-outline-light ms-3">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h1 class="display-3 my-4">Advertising and <br />Media</h1>
                        <a href="https://licensing.spy-damusicpublishing.com" class="btn btn-brand">Get Started</a>
                        <a href="#services" class="btn btn-outline-light ms-3">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="services" class="text-center">
        <div class="container">
        @foreach ($wwds as $wwd)
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>What We do</h6>
                        <h1>{{ $wwd->title }}</h1>
                        <p class="mx-auto">
                            {{ $wwd->desc }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row g-4">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img class="image-hover"  src="img/icon1.png" alt="">
                        <h5>{{ $service->title }}</h5>
                        <p>
                        {{ $service->descrition }}                        </p>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img class="image-hover" src="img/icon2.png" alt="">
                        <h5>Synchronisation</h5>
                        <p>
                            Interested in synchronisation and usage rights? When applying for synchronisation for Video, TV, Gaming or...
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img class="image-hover" src="img/icon4.png" alt="">
                        <h5>Advertising</h5>
                        <p>
                            Advertisers welcome! - Looking a fresh sound for you next marking campaign? Spy-da Music Publishing...
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <h1>About Spy-Da Music Publishing</h1>
                <div class="col-lg-5 py-5">
                    <div class="row">
                    @foreach ($abouts as $abt)
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img class="image-hover" src="img/icon6.png" alt="">
                                <div class="ms-4">
                                    <h5>{{ $abt->title }}.</h5>
                                    <p>{{ $abt->descption }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach    
                        <!-- <div class="col-12 mt-4">
                            <div class="info-box">
                                <img class="image-hover" src="img/icon4.png" alt="">
                                <div class="ms-4">
                                    <h5>Capacity.</h5>
                                    <p>We currently have over 300 records in catalogue, so are confident we can find new music that fits and suits your next major campaign.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img class="image-hover" src="img/icon5.png" alt="">
                                <div class="ms-4">
                                    <h5>Expectation.</h5>
                                    <p>We hope you enjoy the music your listening to!</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/about.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Licensing -->
    <section id="licensing">
        <div class="container">
        @foreach ($license as $lic)
            <div class="row text-center justify-content-center gy-4">
                <h1 class="display-4">{{ $lic->title }}</h1>
                <p class="mb-0">
                    {{ $lic->description }}
                </p>
                <div class="col-lg-5">               
                     <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Fill Enquiry Form</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>


    <!-- MILESTONE
    <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">90K+</h1>
                    <p class="mb-0">Happy Clients</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">45+</h1>
                    <p class="mb-0">Hours of Songs</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">190</h1>
                    <p class="mb-0">Total Downloads</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">380K</h1>
                    <p class="mb-0">YouTube Subscribers</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- SERVICE -->

    

    <section class="bg-light" id="portfolio">
        <div class="container">
        @foreach ($syncs as $sync)
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>{{ $sync->title }}</h1>
                        <p class="mx-auto">    
                            {{ $sync->description }}
                        </p>
                        <div class="col-lg-5">               
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Fill Enquiry Form</a>
                       </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div id="projects-slider" class="owl-theme owl-carousel">
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project1.jpeg" alt="">
                <div class="content">
                    <h2>Music Production</h2>
                    <h6>quality</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/advert_4.jpeg" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>adverts</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project3.jpeg" alt="">
                <div class="content">
                    <h2>Song Writting</h2>
                    <h6>best options</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/studio.jpeg" alt="">
                <div class="content">
                    <h2>Studio Equipments</h2>
                    <h6>stunning</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/games_3.jpeg" alt="">
                <div class="content">
                    <h2>Games and Films</h2>
                    <h6>top notch</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/nft_designs.jpeg" alt="">
                <div class="content">
                    <h2>NFT designs</h2>
                    <h6>best on the market</h6>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
        @foreach ($adverts as $advert)
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>{{ $advert->title }}</h6>
                        <h1>Advertising and Media</h1>
                        <p class="mx-auto">
                            {{ $advert->desc }} 
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/advert_1.jpeg" height="230"  alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/advert_3.jpeg" height="230" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/advert_2.jpeg" height="230" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="songwritters" >
        <div class="container">
        @foreach ($songwritersections as $swrsec)
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Wanna Meet our Song Writters</h6>
                        <h1>{{ $swrsec->title }}</h1>
                        <p class="mx-auto">
                            {{ $swrsec->description }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img class="SongWritters" src="img/team3.jpeg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a><br>
                                <p class="mx-auto white_text">Spy-da Music Publishing is a ONE STOP Shop for all you licensing needs! it is owned & managed by Spy-da Music Group Ltd .</p>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Marvin McKinney</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img class="SongWritters" src="img/team3.jpeg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a><br> 
                                <p class="mx-auto white_text">Spy-da Music Publishing is a ONE STOP Shop for all you licensing needs! it is owned & managed by Spy-da Music Group Ltd .</p>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Kathryn Murphy</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img class="SongWritters" src="img/team3.jpeg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a><br>
                                <p class="mx-auto white_text">Spy-da Music Publishing is a ONE STOP Shop for all you licensing needs! it is owned & managed by Spy-da Music Group Ltd .</p>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Darrell Steward</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img class="SongWritters" src="img/team3.jpeg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a><br>
                                <p class="mx-auto white_text">Spy-da Music Publishing is a ONE STOP Shop for all you licensing needs! it is owned & managed by Spy-da Music Group Ltd .</p>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Marvin McKinney</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img class="SongWritters" src="img/team3.jpeg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a><br> 
                                <p class="mx-auto white_text">Spy-da Music Publishing is a ONE STOP Shop for all you licensing needs! it is owned & managed by Spy-da Music Group Ltd .</p>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Kathryn Murphy</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img class="SongWritters" src="img/team3.jpeg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a><br>
                                <p class="mx-auto white_text">Spy-da Music Publishing is a ONE STOP Shop for all you licensing needs! it is owned & managed by Spy-da Music Group Ltd .</p>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Darrell Steward</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="game">
        <div class="container">
        @foreach ($gamesandfilmssection as $gafsec)
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>{{ $gafsec->title }}</h6>
                        <h1>Games and Films</h1>
                        <p class="mx-auto">
                            {{ $gafsec->desc }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/game_1.jpeg" height="230"  alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/game_2.jpeg" height="230" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/game_3.jpeg" height="230" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" id="reviews">
        <div class="owl-theme owl-carousel reviews-slider container">
            <div class="review">
                <div class="person">
                    <img src="img/team_1.jpg" alt="">
                    <h5>Georgia Barry</h5>
                    <small>Marketing Development Manager</small>
                </div>
                <h3>Working with Spy-Da has been great. He often worked harder than 
                    what was required to ensure that the tracks sounded great. 
                    The are fantastic to work with and has helped me create my 
                    own unique sound which is exactly what I was looking for in music production and publishing. 
                    He is very inspiring and most of our songs we wrote together werevery effortless and always fun to create. </h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
            <div class="review">
                <div class="person">
                    <img src="img/team_2.jpg" alt="">
                    <h5>Ralph Edwards</h5>
                    <small>Producer.</small>
                </div>
                <h3>SPY-DA Productions has allowed me to completely raise my game as an artist thanks to 
                    top notch production standards and real creative flair. Julian 
                    Chown is great at bringing out the best in a song, whether through 
                    arrangement or music and vocal production. Thoroughly recommended."</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
            <div class="review">
                <div class="person">
                    <img src="img/team_3.jpg" alt="">
                    <h5>Alya Elouissi</h5>
                    <small>Vocalist</small>
                </div>
                <h3>SPR-DA has the most talented producers & musicians I've worked with and I 
                    HIGHLY recommend them. We instantly connected and did some great tracks 
                    together that later on I was able to release officially and - very successfully.</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">Spy Da-Music Publishing<span class="dot">.</span></h4>
                        <p>Spy-da Music Publishing is a ONE STOP Shop for all you licensing needs! Spy-da Music Publishing Ltd is owned & managed by Spy-da Music Group Ltd</p>
                        <div class="col-auto social-icons">
                            <a href="facebook.com"><i class='bx bxl-facebook'></i></a>
                            <a href="linkedin.com"><i class='bx bxl-linkedin'></i></a>
                            <a href="instagram.com"><i class='bx bxl-instagram'></i></a>
                            <a href="youtube.com"><i class='bx bxl-youtube'></i></a>
                        </div>
                        <div class="col-auto conditions-section">
                            <a href="https://licensing.spy-damusicpublishing.com/pages/privacy-policy">Privacy</a>
                            <a href="https://licensing.spy-damusicpublishing.com/pages/terms-and-conditions">Terms and Conditons</a>
                            <a href="https://licensing.spy-damusicpublishing.com/pages/disclaimer">Disclaimer</i></a>
                            <a href="https://licensing.spy-damusicpublishing.com/pages/terms-of-service">Terms Of Service</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright © 2023 Spy-da Music All rights Reserved</p> | Spy-da Music Publishing is owned & managed By 
            <a hrefs="https://spy-daproductions.com">Spy-da Music Group Ltd</a>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img/c2.jpg); min-height:300px;">
                                <div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Get in touch</h1>
                                        <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" placeholder="Jon" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" placeholder="Doe" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Johndoe@example.com"
                                            id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" placeholder="Please Enter your Message here..."
                                            class="form-control" id="" rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>