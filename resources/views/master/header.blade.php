<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo/logo.png')}}" >

        <!-- Customized Bootstrap Stylesheet -->


        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
       
        <!-- Template Stylesheet -->
        <!-- <link href="css/style.css" rel="stylesheet"> -->
  
        <link rel="stylesheet" href="{{ asset('css/product.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    </head>

    <body>

        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Topbar Start -->

 <div class="container-fluid topbar d-none d-xl-block w-100">
            <div class="row gx-0 align-items-center" style="height: 35px;">
                <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-muted me-4"><i class="fas fa-map-marker-alt text-secondary me-2"></i>Find A Location</a>
                        <a href="#" class="text-muted me-4"><i class="fas fa-phone-alt text-secondary me-2"></i>+880 1933-302535</a>
                        <a href="#" class="text-muted me-0"><i class="fas fa-envelope text-secondary me-2"></i>karim@greengenesisbd.com</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="text-muted me-3"><i class="fas fa-clock text-secondary me-2"></i>Sat - Thu 9:00 - 18:30, Friday - CLOSED</a>
                        <a href="#" class="btn btn-primary btn-rounded border border-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary btn-rounded border border-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary btn-rounded border border-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary btn-rounded border border-white me-3"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
    </div>
 
     <!-- Topbar End -->

 <!-- Navbar & Hero Start -->
    <div class="container-fluid sticky-top px-0 ">
            <nav class="navbar navbar-expand-lg navbar-dark bg-nev py-3 px-4">
                <a href="index.html" class="navbar-brand p-0">
                    <!-- <h1 class="text-secondary display-6"><i class="fas fa-city text-primary me-3"></i></h1> -->
                    <img src="img/logo/f-logo2.png" alt="Logo"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto pt-2 pt-lg-0">
                        <a href={{Route('home')}} class="nav-item nav-link">Home</a>
                        <a href={{Route('about')}} class="nav-item nav-link">About</a>
                        <a href={{Route('service')}} class="nav-item nav-link">Industrial Sulotion</a>
                        <a href={{Route('project')}} class="nav-item nav-link">Projects</a>
                        <div class="nav-item dropdown ">
                            <a href={{Route('home')}} class="nav-link dropdown-toggle text-dark " data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-lg-0">
                                <a href={{Route('feature')}} class="dropdown-item ">Our Features</a>
                                <a href={{Route('blog')}} class="dropdown-item">Our Blog</a>
                                <a href={{Route('team')}} class="dropdown-item">Our Team</a>
                                <a href={{Route('testimonial')}} class="dropdown-item">Testimonial</a>
                                <a href={{Route('error')}} class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href={{Route('contact')}} class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-3  pt-lg-0 ms-lg-2">
                        <button class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="#" class="btn btn-secondary py-2 px-4 ms-3 flex-wrap flex-sm-shrink-0">Get a Quate</a>
                    </div>
                </div>
            </nav>
        </div>


        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Header Start -->
        <!-- <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Features</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Feature</li>
                </ol>    
            </div>
        </div> -->
        <!-- Header End -->