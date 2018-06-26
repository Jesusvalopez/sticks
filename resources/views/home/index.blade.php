@extends('layouts.main')

@section('content')

    <div id="page">
        <nav class="sticks-nav" role="navigation">
            <div class="sticks-container">
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div id="sticks-logo"><img src="/images/logo-sticks-mejorado.png" alt="sticks-logo"></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1 main-nav">
                        <ul>
                            <li class="active"><a href="#" data-nav-section="home">Inicio</a></li>
                            <li><a href="#" data-nav-section="menu">Menú</a></li>
                            <li><a href="#" data-nav-section="delivery">Zona de Despacho</a></li>
                            <li><a href="#" data-nav-section="blog">Blog</a></li>
                            <li><a href="#" data-nav-section="contact">Contact</a></li>
                            <li><a href="http://gettemplates.co/" class="external"><i class="fab ti-shopping-cart"> <span class="badge">5</span></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <div id="sticks-hero" class="js-fullheight"  data-section="home">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(images/img_bg_1.jpg);">

                        <img src="/images/slider/sticks-1.jpg" alt="">

                    </li>
                    <li style="background-image: url(images/img_bg_2.jpg);">
                        <img src="/images/slider/sticks-2.jpg" alt="">

                    </li>
                    <li style="background-image: url(images/img_bg_3.jpg);">
                        <img src="/images/slider/sticks-3.jpg" alt="">
                    </li>
                </ul>
            </div>
        </div>

        <div class="sticks-section-overflow">

            <div class="sticks-section" id="sticks-services" data-section="menu">
                <div class="sticks-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="sticks-heading">
                                <h2 class="sticks-left">Menú</h2>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                                <img src="/images/flyer-sticks.png" alt="">


                    </div>
                </div>
            </div>

            <div class="sticks-section" id="sticks-portfolio" data-section="delivery">
                <div class="sticks-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center sticks-heading">
                            <h2>Zona de Despacho</h2>
                            </div>
                    </div>
                    <div class="row">

                        <iframe src="https://www.google.com/maps/d/embed?mid=1mbzkFYlrnkuiaHIz55YAvRlpDmI1D1hC" width="100%" height="480"></iframe>

                    </div>
                </div>
            </div>

            <div class="sticks-section" id="sticks-faq" data-section="faq">
                <div class="sticks-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center sticks-heading">
                            <h2>Frequently Ask Questions</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="sticks-accordion">
                                <div class="sticks-accordion-heading">
                                    <div class="icon"><i class="icon-cross"></i></div>
                                    <h3>What is Asymmetry?</h3>
                                </div>
                                <div class="sticks-accordion-content">
                                    <div class="inner">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sticks-accordion">
                                <div class="sticks-accordion-heading">
                                    <div class="icon"><i class="icon-cross"></i></div>
                                    <h3>I have technical problem, who do I email?</h3>
                                </div>
                                <div class="sticks-accordion-content">
                                    <div class="inner">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sticks-accordion">
                                <div class="sticks-accordion-heading">
                                    <div class="icon"><i class="icon-cross"></i></div>
                                    <h3>How do I use Asymmetry features?</h3>
                                </div>
                                <div class="sticks-accordion-content">
                                    <div class="inner">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="sticks-accordion">
                                <div class="sticks-accordion-heading">
                                    <div class="icon"><i class="icon-cross"></i></div>
                                    <h3>What language are available?</h3>
                                </div>
                                <div class="sticks-accordion-content">
                                    <div class="inner">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sticks-accordion">
                                <div class="sticks-accordion-heading">
                                    <div class="icon"><i class="icon-cross"></i></div>
                                    <h3>Can I have a username that is already taken?</h3>
                                </div>
                                <div class="sticks-accordion-content">
                                    <div class="inner">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sticks-accordion">
                                <div class="sticks-accordion-heading">
                                    <div class="icon"><i class="icon-cross"></i></div>
                                    <h3>Is Asymmetry free?</h3>
                                </div>
                                <div class="sticks-accordion-content">
                                    <div class="inner">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="sticks-blog" data-section="blog">
            <div class="sticks-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center sticks-heading">
                        <h2>Blog</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="sticks-card-item has-text">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_1.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="sticks-text text-left">
                                <h2>25 Minimal Web Design for Inspiration</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                                <p class="sticks-category">Sep. 25th, 2016 by John Doe</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" class="sticks-card-item has-text">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_2.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="sticks-text text-left">
                                <h2>25 Minimal Web Design for Inspiration</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                                <p class="sticks-category">Sep. 25th, 2016 by John Doe</p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4">
                        <a href="#" class="sticks-card-item has-text">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_3.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="sticks-text text-left">
                                <h2>25 Minimal Web Design for Inspiration</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                                <p class="sticks-category">Sep. 25th, 2016 by John Doe</p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-lg-block visible-md-block"></div>

                    <div class="col-md-4">
                        <a href="#" class="sticks-card-item has-text">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_4.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="sticks-text text-left">
                                <h2>25 Minimal Web Design for Inspiration</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                                <p class="sticks-category">Sep. 25th, 2016 by John Doe</p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-4">
                        <a href="#" class="sticks-card-item has-text">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="sticks-text text-left">
                                <h2>25 Minimal Web Design for Inspiration</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                                <p class="sticks-category">Sep. 25th, 2016 by John Doe</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" class="sticks-card-item has-text">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_6.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="sticks-text text-left">
                                <h2>25 Minimal Web Design for Inspiration</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                                <p class="sticks-category">Sep. 25th, 2016 by John Doe</p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-lg-block visible-md-block"></div>
                    <div class="clearfix visible-sm-block"></div>

                </div>
            </div>
        </div>

        <div class="sticks-section-overflow">
            <div id="sticks-counter" class="sticks-section">
                <div class="sticks-container">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center sticks-heading">
                            <h2>Fun Facts</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
							<span class="icon">
								<i class="ti-download"></i>
							</span>
                                <span class="counter js-counter" data-from="0" data-to="2122070" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Downloads</span>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
							<span class="icon">
								<i class="ti-face-smile"></i>
							</span>
                                <span class="counter js-counter" data-from="0" data-to="402002" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
							<span class="icon">
								<i class="ti-briefcase"></i>
							</span>
                                <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Projects Done</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
							<span class="icon">
								<i class="ti-time"></i>
							</span>
                                <span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Hours Spent</span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="sticks-products" data-section="products">
                <div class="sticks-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center sticks-heading">
                            <h2>Products</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="owl-carousel owl-carousel-carousel">
                            <div class="item">
                                <img src="images/img_1.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
                            </div>
                            <div class="item">
                                <img src="images/img_2.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
                            </div>
                            <div class="item">
                                <img src="images/img_3.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
                            </div>
                            <div class="item">
                                <img src="images/img_4.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div id="sticks-subscribe">
            <div class="sticks-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center sticks-heading">
                        <h2>Subscribe</h2>
                        <p>Be the first to know about the new templates.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-inline">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <button type="submit" class="btn btn-danger btn-block">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="sticks-contact" data-section="contact" class="sticks-cover sticks-cover-xs" style="background-image:url(images/img_bg_2.jpg);">
            <div class="overlay"></div>
            <div class="sticks-container">
                <div class="row text-center">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-12">
                                <h3>If you have inqueries please email us at <a href="#">info@yourdomain.com</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer id="sticks-footer" role="contentinfo">
            <div class="sticks-container">

                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                            <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                        </p>
                        <p class="pull-right">
                        <ul class="sticks-social-icons pull-right">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    @endsection