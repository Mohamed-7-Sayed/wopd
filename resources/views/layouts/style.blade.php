<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>PHOXEL</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="../../../../css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap">
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="index.html"> <img src="assets/img/logo.png" class="logo-img" alt=""> </a>
                <!-- <a class="logo" href="index.html"> <h2>Phoxel <span>Photography</span></h2> </a> -->
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown"> <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Home <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html" class="dropdown-item active"><span>Home Layout 1</span></a></li>
                            <li><a href="index2.html" class="dropdown-item"><span>Home Layout 2</span></a></li>
                            <li><a href="index3.html" class="dropdown-item"><span>Home Layout 3</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Services <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html" class="dropdown-item"><span>Services 1</span></a></li>
                            <li><a href="services2.html" class="dropdown-item"><span>Services 2</span></a></li>
                            <li><a href="services3.html" class="dropdown-item"><span>Services 3</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Portfolio <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio.html" class="dropdown-item"><span>Portfolio 1</span></a></li>
                            <li><a href="portfolio2.html" class="dropdown-item"><span>Portfolio 2</span></a></li>
                            <li><a href="portfolio3.html" class="dropdown-item"><span>Portfolio 3</span></a></li>
                            <li><a href="portfolio4.html" class="dropdown-item"><span>Portfolio 4</span></a></li>
                            <li><a href="portfolio5.html" class="dropdown-item"><span>Portfolio 5</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="team.html" class="dropdown-item"><span>Team</span></a></li>
                            <li><a href="price.html" class="dropdown-item"><span>Price</span></a></li>
                            <li><a href="faq.html" class="dropdown-item"><span>FAQ</span></a></li>
                            <li><a href="team-details.html" class="dropdown-item"><span>Team Details</span></a></li>
                            <li><a href="services-page.html" class="dropdown-item"><span>Services Page</span></a></li>
                            <li><a href="portfolio-page.html" class="dropdown-item"><span>Portfolio Page</span></a></li>
                            <li><a href="post.html" class="dropdown-item"><span>Post Page</span></a></li>
                            <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Other Pages <i class="ti-angle-right"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="coming-soon.html" class="dropdown-item"><span>Coming Soon</span></a></li>
                                    <li><a href="404.html" class="dropdown-item"><span>404 Page</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>

            </div>

        </div>
        <div  class="news-post-user-comment"><a href="{{ url('/' . $page='profile') }}/{{ Auth::user()->id }}"> <img style="width: 50px"  src="assets/img/team/4.jpg" alt=""> </a></div>
    </nav>
    <!-- Slider -->







    <main class="py-4">
        @yield('content')
    </main>







    <!-- Footer -->
    <footer class="footer clearfix" data-overlay-darkgray="8">
        <div class="container">
            <!-- First footer -->
            <div class="first-footer">
                <div class="row">
                    <div class="col-md-6 widget-area">
                        <h3>Sign up to get latest update</h3>
                        <p>Sign up for our monthly newsletter for the latest news &amp; articles</p>
                    </div>
                    <div class="col-md-6 widget-area newsletter-form">
                        <form>
                            <input type="email" name="email" placeholder="Enter Email Address" required="">
                            <button>Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Second footer -->
            <div class="second-footer">
                <div class="row">
                    <div class="col-md-4 widget-area">
                        <div class="widget clearfix">
                            <div class="footer-logo"> <img class="img-fluid" src="/assets/img/logo-light.png" alt=""> </div>
                            <div class="widget-text">
                                <p>Photography inila miss uman saten eliten finus vivera alacus miss the drudean seneice miss notumane tonec a fermen.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 widget-area">
                        <div class="widget clearfix usful-links">
                            <h3 class="widget-title">Quick Links</h3>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="works.html">Works</a></li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 widget-area">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Contact</h3>
                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs"> <i class="ti-mobile"></i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-desc">
                                        <p>+1 123-456-0606</p>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs"> <i class="ti-email"></i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-desc">
                                        <p>info@phoxel.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs"> <i class="ti-location-pin"></i> </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-desc">
                                        <p>120 King St, Charleston SC 29401, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom footer -->
            <div class="bottom-footer-text">
                <div class="row copyright">
                    <div class="col-md-8">
                        <p class="mb-0">Copyright © 2024 by <a href="#">DuruThemes</a>. All rights reserved.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="/assets/js/modernizr-2.6.2.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.isotope.v3.0.2.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/scrollIt.min.js"></script>
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.stellar.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.js"></script>
    <script src="/assets/js/YouTubePopUp.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
