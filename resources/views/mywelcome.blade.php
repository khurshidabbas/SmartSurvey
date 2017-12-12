<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <title>MistCasters - You've Got It!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">


    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">


    <!-- Favicon -->
    <link href="welcome/img/favicon/favicon.ico" rel="icon">
    <link rel="apple-touch-icon" sizes="180x180" href="welcome/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="welcome/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="welcome/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="welcome/img/favicon/manifest.json">
    <link rel="mask-icon" href="welcome/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="welcome/img/favicon/favicon.ico">
    <meta name="msapplication-config" content="welcome/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="welcome/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="welcome/css/style.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

</head>
<body>
<!-- Page Content
================================================== -->


<!-- Hero -->
<section class="hero">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <a class="hero-brand" href="index.html" title="Home"><img alt="MistCasters Logo"
                                                                          src="welcome/img/new-logo.png"></a>
            </div>
        </div>

        <div class="col-md-12">
            <h1>
                You've Got It!
            </h1>

            <p class="tagline">
                The fastest way to grow your business with the leader in
                <span class="text-info">Technology!</span>
            </p>
            <a class="btn btn-full" href="#about">Get Started Now</a>
        </div>
    </div>

</section>
<!-- /Hero -->


<!-- Header -->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="index.html"><img src="welcome/img/new-logo-nav.png" alt="" title=""/></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Bell</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="#about">About Us</a></li>
                <li><a href="#features">Our Expertise</a></li>
                <li><a href="#portfolio">Portfolio</a></li>

                <!--<li><a href="#team">Team</a></li>-->
                <!--<li class="menu-has-children"><a href="">Drop Down</a>-->
                <!--<ul>-->
                <!--<li><a href="#">Drop Down 1</a></li>-->
                <!--<li class="menu-has-children"><a href="#">Drop Down 2</a>-->
                <!--<ul>-->
                <!--<li><a href="#">Deep Drop Down 1</a></li>-->
                <!--<li><a href="#">Deep Drop Down 2</a></li>-->
                <!--<li><a href="#">Deep Drop Down 3</a></li>-->
                <!--<li><a href="#">Deep Drop Down 4</a></li>-->
                <!--<li><a href="#">Deep Drop Down 5</a></li>-->
                <!--</ul>-->
                <!--</li>-->
                <!--<li><a href="#">Drop Down 3</a></li>-->
                <!--<li><a href="#">Drop Down 4</a></li>-->
                <!--<li><a href="#">Drop Down 5</a></li>-->
                <!--</ul>-->
                <!--</li>-->

                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->

        {{--<nav class="nav social-nav pull-right hidden-sm-down">--}}
        {{--<a href="https://twitter.com/MistCasters"><i class="fa fa-twitter"></i></a>--}}
        {{--<a href="https://facebook.com/MistCasters"><i class="fa fa-facebook"></i></a>--}}
        {{--<!--<a href="#"><i class="fa fa-linkedin"></i></a>-->--}}
        {{--<a href="mailto:khurshidabbas@gmail.com"><i class="fa fa-envelope"></i></a>--}}
        {{--</nav>--}}
        <nav class="nav social-nav pull-right hidden-sm-down">
            @if (Route::has('login'))

                @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth

            @endif
        </nav>

    </div>
</header>
<!-- #header -->


<!-- About -->
<section class="about" id="about">
    <div class="container text-center">
        <h2>
            <span class="text-info">About MistCasters</span>
        </h2>

        <p>
            We provide the highest level of quality software products and services globally that meet the needs of our
            customers by maintaining our staff as our principal asset and being responsive to market expectations.
            Any progressive business demands the right tools to guide innovation and achieve strategic superiority.
            <!--Having worked with more than 200 finance and leasing companies in over 30 countries, -->
            <span class="text-info">MistCasters</span> understands the unique operational challenges of today’s
            businesses and empowers these organizations to achieve business excellence.
            Our customized approach and commitment to providing superior quality IT solutions has enabled us to help our
            clients streamline their business operations and optimize efficiency.
        </p>

        <div class="row stats-row">
            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">25</span> Satisfied Customers
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">30</span> Released Projects
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">1,000</span> Hours Of Support
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                    <span class="stats-no" data-toggle="counter-up">10</span> Hard Workers
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About -->


<!-- Parallax -->
<div class="block bg-primary block-pd-lg block-bg-overlay text-center"
     data-bg-img="img/parallax-bg.jpg"
     data-settings='{"stellar-background-ratio": 0.0}' data-toggle="parallax-bg">

    <h2>
        The integraion of
        <span class="text-warning">Technology</span>
        <span class="text-success">Information</span>
        <span class="text-warning">Design!</span>
    </h2>

    <p>
        We have a professional team known to provide a perfect blend of technology to businesses globally.
    </p>
    <img style="border-radius: 20px; background-size: cover" alt="MistCasters - You've Got It!"
         class="gadgets-img hidden-md-down" src="welcome/img/new-gadgets.jpg">

</div>
<!-- /Parallax -->


<!-- Features -->
<section class="features" id="features">
    <div class="container">
        <h2 class="text-center">
            Our Expertise
        </h2>

        <div class="row">
            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-bank"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Business Process Automation
                        </h3>

                        <p>
                            We take pride in our capacity to grasp business procedures
                            and the ability to convert this knowledge into software solutions
                            leading to effective management of our client's resources and operations.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-shopping-cart"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Ecommerce Development
                        </h3>

                        <p>
                            As your trusted e-commerce development partner, we build, launch and grow profitable online
                            stores.
                            Whether it’s on the web or mobile, MistCasters provides the ultimate,
                            fully managed eCommerce solutions delivering top-quality solutions and services.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-rocket"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Application Development
                        </h3>

                        <p>
                            MistCasters Application Development Service enables you to develop any application,
                            from integrating with payment systems or CRM,
                            to creating a Minimum Viable Product or developing Virtual Reality gaming applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-android"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Mobile Development
                        </h3>

                        <p>
                            Our Mobile Development team will achieve the
                            best possible application of your business processes to a mobile platform –
                            whether you need a Minimum Viable Product or complex mobile application with third-party
                            integrations.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-chrome"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Web Development
                        </h3>

                        <p>
                            We are providing custom web application development solutions to large established
                            enterprise
                            to small startups for their custom business need.
                            We also help our client to migrate existing web application to new technologies.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feature-col col-lg-4 col-xs-12">
                <div class="card card-block text-center">
                    <div>
                        <div class="feature-icon">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>

                    <div>
                        <h3>
                            Software Testing
                        </h3>

                        <p>
                            MistCasters software testing service enables your company to deliver a better product,
                            shortens its time-to-market while maintaining your customer confidence and safeguarding your
                            reputation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Features -->


<!--Call to Action-->
<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-12 text-lg-left text-center">
                <h2>
                    Contact Us Now!
                </h2>

                <p>
                    Want to get a meeting in the diary? Send us a brief? No Problem!
                </p>
            </div>

            <div class="col-lg-3 col-sm-12 text-lg-right text-center">
                <a class="btn btn-ghost" href="#contact">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!--/Call to Action-->


<!-- Portfolio -->
<section class="portfolio" id="portfolio">
    <div class="container text-center">
        <h2>
            Portfolio
        </h2>

        <p>
            You can review some of the projects that were successfully implemented by MistCasters. If you wish to
            receive more
            detailed information on any of the provided examples or get quotation for your project, please feel free to
            contact us.
        </p>
    </div>

    <div class="portfolio-grid">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a><img alt="" src="welcome/img/new-porf-1.jpg">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    SmartTab
                                </h3>

                                <p class="card-text">
                                    SmartTab is an innovative cloud-based software system for venue management.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a><img alt="" src="welcome/img/new-porf-2.jpg">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    GrowthHackers
                                </h3>

                                <p class="card-text">
                                    GrowthHackers is a platform that unites entrepreneurs and marketing experts.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a><img alt="" src="welcome/img/new-porf-3.jpg">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    Secure Phone
                                </h3>

                                <p class="card-text">
                                    Secure Phone is a Mobile Management solution, a device with a proprietary OS based
                                    on Android.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a><img alt="" src="welcome/img/new-porf-4.jpg">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    CUJO
                                </h3>
                                <p class="card-text">
                                    CUJO is a smart device that protects home networks from hacks, malware and viruses.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a><img alt="" src="welcome/img/new-porf-5.jpg">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    Active Suspension Control
                                </h3>

                                <p class="card-text">
                                    Active Suspension Control helps car owner control suspension level.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a><img alt="" src="welcome/img/new-porf-6.jpg">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    PepTalk
                                </h3>

                                <p class="card-text">
                                    PepTalk supports the well-being of employees with mobile gamification and blog
                                    content.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a><img alt="" src="welcome/img/new-porf-7.jpg">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    RedRoute
                                </h3>

                                <p class="card-text">
                                    RedRoute is a software system for Taxi services, comprising an Android app for
                                    drivers.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <a><img alt="" src="welcome/img/new-porf-8.jpg">
                        <div class="portfolio-over">
                            <div>
                                <h3 class="card-title">
                                    Mood Cow
                                </h3>

                                <p class="card-text">
                                    Mood Cow is a mental care tool for primary care physicians and their patients.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Portfolio -->


<!-- Team -->
<!--<section class="team" id="team">-->
<!--<div class="container">-->
<!--<h2 class="text-center">-->
<!--Meet our team-->
<!--</h2>-->

<!--<div class="row">-->
<!--<div class="col-sm-3 col-xs-6">-->
<!--<div class="card card-block">-->
<!--<a href="#"><img alt="" class="team-img" src="img/team-1.jpg">-->
<!--<div class="card-title-wrap">-->
<!--<span class="card-title">Sergio Fez</span> <span class="card-text">Art Director</span>-->
<!--</div>-->

<!--<div class="team-over">-->
<!--<h4 class="hidden-md-down">-->
<!--Connect with me-->
<!--</h4>-->

<!--<nav class="social-nav">-->
<!--<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--<a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i-->
<!--class="fa fa-envelope"></i></a>-->
<!--</nav>-->

<!--<p>-->
<!--Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.-->
<!--</p>-->
<!--</div>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->

<!--<div class="col-sm-3 col-xs-6">-->
<!--<div class="card card-block">-->
<!--<a href="#"><img alt="" class="team-img" src="img/team-2.jpg">-->
<!--<div class="card-title-wrap">-->
<!--<span class="card-title">Sergio Fez</span> <span class="card-text">Art Director</span>-->
<!--</div>-->

<!--<div class="team-over">-->
<!--<h4 class="hidden-md-down">-->
<!--Connect with me-->
<!--</h4>-->

<!--<nav class="social-nav">-->
<!--<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--<a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i-->
<!--class="fa fa-envelope"></i></a>-->
<!--</nav>-->

<!--<p>-->
<!--Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.-->
<!--</p>-->
<!--</div>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->

<!--<div class="col-sm-3 col-xs-6">-->
<!--<div class="card card-block">-->
<!--<a href="#"><img alt="" class="team-img" src="img/team-3.jpg">-->
<!--<div class="card-title-wrap">-->
<!--<span class="card-title">Sergio Fez</span> <span class="card-text">Art Director</span>-->
<!--</div>-->

<!--<div class="team-over">-->
<!--<h4 class="hidden-md-down">-->
<!--Connect with me-->
<!--</h4>-->

<!--<nav class="social-nav">-->
<!--<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--<a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i-->
<!--class="fa fa-envelope"></i></a>-->
<!--</nav>-->

<!--<p>-->
<!--Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.-->
<!--</p>-->
<!--</div>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->

<!--<div class="col-sm-3 col-xs-6">-->
<!--<div class="card card-block">-->
<!--<a href="#"><img alt="" class="team-img" src="img/team-4.jpg">-->
<!--<div class="card-title-wrap">-->
<!--<span class="card-title">Sergio Fez</span> <span class="card-text">Art Director</span>-->
<!--</div>-->

<!--<div class="team-over">-->
<!--<h4 class="hidden-md-down">-->
<!--Connect with me-->
<!--</h4>-->

<!--<nav class="social-nav">-->
<!--<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--<a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i-->
<!--class="fa fa-envelope"></i></a>-->
<!--</nav>-->

<!--<p>-->
<!--Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.-->
<!--</p>-->
<!--</div>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</section>-->
<!-- /Team -->


<!--Contact-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Contact Us</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="info">
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p>khurshidabbas@gmail.com</p>
                    </div>
                    <div>
                        <i class="fa fa-skype"></i>
                        <p>khurshidabbas_1</p>
                    </div>
                    <div>
                        <i class="fa fa-whatsapp"></i>
                        <p>+92 345 7604076</p>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+92 345 7604076</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="form">

                    <form action="contactform/emailsender.php" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                   required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                   required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   required/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      required
                                      placeholder="Please write your message and contact details..."></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/Contact-->


<!--Footer-->
<footer class="site-footer">
    <div class="bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-xs-12 text-lg-left text-center">
                    <p class="copyright-text">
                        © MistCasters LLC.
                    </p>
                    <div class="credits">
                        <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bell
                      -->
                        <!--<a href="https://bootstrapmade.com/">Bootstrap Themes</a> by BootstrapMade-->
                    </div>
                </div>

                <div class="col-lg-6 col-xs-12 text-lg-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="index.html">Home</a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#about">About Us</a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#features">Our Expertise</a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#portfolio">Portfolio</a>
                        </li>

                        <!--<li class="list-inline-item">-->
                        <!--<a href="#team">Team</a>-->
                        <!--</li>-->

                        <li class="list-inline-item">
                            <a href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--/Footer-->


<a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

<!-- JavaScript


<!-- Required JavaScript Libraries -->
<script src="welcome/lib/jquery/jquery.min.js"></script>
<script src="welcome/lib/superfish/hoverIntent.js"></script>
<script src="welcome/lib/superfish/superfish.min.js"></script>
<script src="welcome/lib/tether/js/tether.min.js"></script>
<script src="welcome/lib/stellar/stellar.min.js"></script>
<script src="welcome/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="welcome/lib/counterup/counterup.min.js"></script>
<script src="welcome/lib/waypoints/waypoints.min.js"></script>
<script src="welcome/lib/easing/easing.js"></script>
<script src="welcome/lib/stickyjs/sticky.js"></script>
<script src="welcome/lib/parallax/parallax.js"></script>
<script src="welcome/lib/lockfixed/lockfixed.min.js"></script>

<!-- Template Specific Custom Javascript File -->
<script src="welcome/js/custom.js"></script>


{{--<script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>