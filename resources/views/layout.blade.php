<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aliensix.com/particles-1.3/HTML/index-default-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Oct 2016 13:41:41 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    
    <!-- Royal Preoader CSS -->
    <link href="home/css/royal_preloader.css" rel="stylesheet">

    <!-- jQuery Files -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Parallax File -->
    <script type="text/javascript" src="home/js/parallax.min.js"></script>

    <!-- Royal Preloader -->
    <script type="text/javascript" src="home/js/royal_preloader.min.js"></script>
    <script type="text/javascript">
        Royal_Preloader.config({
            mode:           'number',
            showProgress:   false,
            background:     '#1d1d1d'
        });
    </script>

    <!-- Stylesheets -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/css/ionicons.min.css" rel="stylesheet">
    <link href="home/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="home/css/magnific-popup.css" rel="stylesheet">
    <link href="home/css/logoiconfont.css" rel="stylesheet">
    <link href="home/css/style.css" rel="stylesheet" title="main-css">

    <!-- Style Switcher / remove for production -->
    <link href="home/css/style-switcher.css" rel="stylesheet">
    
    <!-- Alternate Stylesheets / choose what color and homebase you want and include the 2 files regularly AFTER style.css above -->
    <link rel="alternate stylesheet" type="text/css" href="home/css/colors/blue.css" title="blue">
    <link rel="alternate stylesheet" type="text/css" href="home/css/colors/green.css" title="green">
    <link rel="alternate stylesheet" type="text/css" href="home/css/colors/orange.css" title="orange">
    <link rel="alternate stylesheet" type="text/css" href="home/css/colors/red.css" title="red">
    <link rel="alternate stylesheet" type="text/css" href="home/css/colors/orangelight.css" title="orangelight">
    <link rel="alternate stylesheet" type="text/css" href="home/css/colors/pinkish.css" title="pinkish">
    <link rel="alternate stylesheet" type="text/css" href="home/css/colors/seagul.css" title="seagul">
    <link rel="alternate stylesheet" type="text/css" href="home/css/base-light.css" title="base-light">
</head>
<body class="royal_preloader" data-spy="scroll" data-target=".navbar" data-offset="70">
    <div id="royal_preloader"></div>

    <!-- Start Switcher / Remove for production -->
    <div class="demo_changer">
        <div class="demo-icon">
            <i class="pe-7s-settings"></i>
        </div><!-- end opener icon -->
        <div class="form_holder">
            <div class="row">
                <div class="col-sm-12">
                    <div class="predefined_styles">
                        <h4>Base</h4>
                        <a href="#" data-rel="main-css" class="styleswitch2"><div class="btn dark-css-square"></div></a>  
                        <a href="#" data-rel="base-light" class="styleswitch2"><div class="btn light-css-square"></div></a>
                        <hr>
                        <h4>Colors</h4>
                        <a href="#" data-rel="main-css" class="styleswitch"><div class="btn purple-css-square"></div></a>
                        <a href="#" data-rel="blue" class="styleswitch"><div class="btn blue-css-square"></div></a>    
                        <a href="#" data-rel="green" class="styleswitch"><div class="btn green-css-square"></div></a>
                        <a href="#" data-rel="orange" class="styleswitch"><div class="btn orange-css-square"></div></a>
                        <a href="#" data-rel="red" class="styleswitch"><div class="btn red-css-square"></div></a>
                        <a href="#" data-rel="orangelight" class="styleswitch"><div class="btn orangelight-css-square"></div></a>
                        <a href="#" data-rel="seagul" class="styleswitch"><div class="btn seagul-css-square"></div></a>
                        <a href="#" data-rel="pinkish" class="styleswitch"><div class="btn pinkish-css-square"></div></a>
                    </div><!-- /.end predefined_styles -->
                </div><!-- /.end col -->
            </div><!-- /.end row -->
        </div><!-- /.end form_holder -->
    </div><!-- /.end demo_changer -->
    <!-- End Switcher / Remove for production -->

    <!-- Begin Header -->
    <header>
        <!-- Begin Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand scroll-link" href="#home" data-id="home"><span class="icon-handle-streamline-vector logo"></span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home" data-id="home" class="scroll-link">Home</a></li>
                            <li><a href="#ideology" data-id="ideology" class="scroll-link">Ideology</a></li>
                            <li><a href="#services" data-id="services" class="scroll-link">Services</a></li>
                            <li><a href="#about" data-id="about" class="scroll-link">About</a></li>
                            <li><a href="#work" data-id="work" class="scroll-link">Work</a></li>
                            <li><a href="#team" data-id="team" class="scroll-link">Team</a></li>
                            <li><a href="#contact" data-id="contact" class="scroll-link">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="components.html">Components</a></li>
                                    <li><a href="pricing-options.html">Pricing Options</a></li>
                                    <li><a href="team-options.html">Team Options</a></li>
                                    <li><a href="http://aliensix.com/particles-1.3/index.html">Demos</a></li>
                                    <li><a href="https://wrapbootstrap.com/theme/particles-personal-agency-template-WB05N7852" target="_blank">Purchase</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Begin Jumbotron -->
    <div class="jumbotron jumbotron-main" id="home">
        <div id="particles-js"></div><!-- /.particles div -->
        <div class="container center-vertically-holder">
            <div class="center-vertically">
                <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <h1 class="scaleReveal">
                        A template with a bit of a different <strong>look &amp; feel</strong>.
                    </h1>
                    <hr class="bottomReveal">
                    <p class="bottomReveal">Particles is a fun and multipurpose template, with clean &amp; modern design <i>+</i>&nbsp; code.</p>
                    <a href="#ideology" data-id="ideology" class="scroll-link">
                        <div class="scroll-indicator rotateBottomReveal">
                            <span class="ion-mouse"></span><br>
                            <span class="ion-android-arrow-down arrow-scroll-indicator"></span>
                        </div>
                    </a>
                </div><!-- /.column -->
            </div><!-- /.vertical center -->
        </div><!-- /.container -->
    </div>
    <!-- End Jumbotron -->

    <!-- Begin Intro -->
    <section id="ideology">

        <!-- Begin Hello Intro -->
        <div id="hello-intro" class="pt60 pb60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-3">
                        <h2 class="no-margin rotateLeftReveal">Hello.</h2>
                    </div>
                    <div class="col-lg-10 col-sm-9 mt30-xs">
                        <h3 class="no-margin rightReveal">We are an interactive agency with a focus on UI design and development. Our team is from all over the world and <strong>we know how to deliver quality pixels from miles away</strong>.</h3>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.div -->
        <!-- End Hello Intro -->

        <!-- Begin Our Process Title -->
        <div id="our-process-title" class="pt30 pb30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="no-margin">Our Ideology</h4>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.div -->
        <!-- End Our Process Title -->

        <!-- Begin Our Process -->
        <div id="our-process">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 process-box text-center pt50 pb50">
                        <div class="leftReveal">
                            <div class="process-intro">
                                <h3 class="process-number">01</h3>
                                <div><span class="process-icons pe-7s-users rotateBottomReveal"></span></div>
                                <h2>Effective<br>Communication</h2>
                            </div>
                            <div class="process-content">
                                <div><span class="process-icons pe-7s-users"></span></div>
                                <h2 class="mt15 mb20">Effective<br>Communication</h2>
                                <p class="no-margin">Nullam suscipit, massa id tempor ullamcorper, lacus felis ac, id vulputate daui risus porta libero.</p>
                            </div>
                        </div><!-- /.animation -->
                    </div><!-- /.column -->
                    <div class="col-sm-4 col-md-4 col-lg-4 process-box text-center pt50 pb50">
                        <div class="bottomReveal">
                            <div class="process-intro">
                                <h3 class="process-number">02</h3>
                                <div><span class="process-icons pe-7s-diamond rotateBottomReveal"></span></div>
                                <h2>Quality<br>Design Work</h2>
                            </div>
                            <div class="process-content">
                                <div><span class="process-icons pe-7s-diamond"></span></div>
                                <h2 class="mt15 mb20">Quality<br>Design Work</h2>
                                <p class="no-margin">Nullam suscipit, massa id tempor ullamcorper, lacus felis ac, id vulputate daui risus porta libero.</p>
                            </div>
                        </div><!-- /.animation -->
                    </div><!-- /.column -->
                    <div class="col-sm-4 col-md-4 col-lg-4 process-box text-center pt50 pb50 no-border-right">
                        <div class="rightReveal">
                            <div class="process-intro">
                                <h3 class="process-number">03</h3>
                                <div><span class="process-icons pe-7s-rocket rotateBottomReveal"></span></div>
                                <h2>Rocketship<br>Astro Designing</h2>
                            </div>
                            <div class="process-content">
                                <div><span class="process-icons pe-7s-rocket"></span></div>
                                <h2 class="mt15 mb20">Rocketship<br>Astro Designing</h2>
                                <p class="no-margin">Nullam suscipit, massa id tempor ullamcorper, lacus felis ac, id vulputate daui risus porta libero.</p>
                            </div>
                        </div><!-- /.animation -->
                    </div><!-- /.column -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.div -->
        <!-- End Our Process -->

        <!-- Begin Quote Carousel -->
        <div id="carousel" class="testimonial-carousel pt40 pb20">                  
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <span class="pe-7s-close heading-3-icon"></span>
                        <h2 class="heading-3">Testimonials</h2>
                        <div class="fade-quote-carousel carousel slide" id="quote-carousel" data-ride="carousel" data-interval="3000">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#quote-carousel" data-slide-to="1"></li>
                                <li data-target="#quote-carousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item">
                                    <blockquote>
                                        <p>"Phasellus pulvinar lacinia elit nec tristique. Nulla accumsan velit id nulla tincidunt ornare. Sed cursus urna sed. Aliquam elementum orci at dolor viverra."</p>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <p>"Phasellus pulvinar lacinia elit nec tristique. Nulla accumsan velit id nulla tincidunt ornare. Sed cursus urna sed. Aliquam elementum orci at dolor viverra."</p>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <p>"Phasellus pulvinar lacinia elit nec tristique. Nulla accumsan velit id nulla tincidunt ornare. Sed cursus urna sed. Aliquam elementum orci at dolor viverra."</p>
                                    </blockquote>
                                </div>
                            </div>
                            
                        </div><!-- /.carousel -->   
                    </div><!-- /.column -->                     
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.carousel -->
        <!-- End Quote Carousel -->

    </section><!-- /.section -->
    <!-- End Intro -->

    <!-- Begin Services -->
    <section id="services" class="background2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section-title text-center">
                    <h2>Services</h2>
                    <span class="section-divider"></span>
                </div><!-- /.column -->
            </div><!-- /.row -->

            <div class="row">
                <!-- Item 1 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="services-box leftReveal">
                        <span class="pe-7s-airplay services-icon"></span>
                        <h3 class="service-name">1. Web Design</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item1-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 1 Modal -->
                <div class="modal fade" id="item1-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-airplay services-icon-2"></span>
                                <h4 class="service-title">Web Design</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Item 2 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30-xs">
                    <div class="services-box topReveal">
                        <span class="services-badge badge">New</span>
                        <span class="pe-7s-phone services-icon"></span>
                        <h3 class="service-name">2. Applications</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item2-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 2 Modal -->
                <div class="modal fade" id="item2-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-phone services-icon-2"></span>
                                <h4 class="service-title">Applications</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Item 3 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30-sm mt30-xs">
                    <div class="services-box rightReveal">
                        <span class="pe-7s-camera services-icon"></span>
                        <h3 class="service-name">3. Photography</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item3-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 3 Modal -->
                <div class="modal fade" id="item3-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-camera services-icon-2"></span>
                                <h4 class="service-title">Photography</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Item 4 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30">
                    <div class="services-box leftReveal">
                        <span class="services-badge badge">New</span>
                        <span class="pe-7s-anchor services-icon"></span>
                        <h3 class="service-name">4. Iconography</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item4-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 4 Modal -->
                <div class="modal fade" id="item4-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-anchor services-icon-2"></span>
                                <h4 class="service-title">Iconography</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Item 5 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30">
                    <div class="services-box bottomReveal">
                        <span class="pe-7s-users services-icon"></span>
                        <h3 class="service-name">5. Support</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item5-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 5 Modal -->
                <div class="modal fade" id="item5-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-users services-icon-2"></span>
                                <h4 class="service-title">Support</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Item 6 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30">
                    <div class="services-box rightReveal">
                        <span class="services-badge badge">New</span>
                        <span class="pe-7s-volume services-icon"></span>
                        <h3 class="service-name">6. Audio</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item6-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 6 Modal -->
                <div class="modal fade" id="item6-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-volume services-icon-2"></span>
                                <h4 class="service-title">Audio</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- End Services -->

    <!-- Begin About -->
    <section id="about" class="background1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section-title text-center">
                    <h2>About</h2>
                    <span class="section-divider"></span>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row mb15">
                <div class="col-sm-5 leftReveal">
                    <h5 class="heading-1 mb20">Our Trade</h5>
                    <h3 class="mb15 no-margin-top">Designing, Developing, and <br>Innovating for people like you...</h3>
                    <p class="no-margin text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec tristiq enim. Integer eu <strong>neque</strong> arcu. Aenean sed odio nibh. Cras imperdiet, arcu eget dictum vestibulum elit.</p>
                </div><!-- /.column -->
                <div class="col-sm-7 mt30-xs rightReveal">
                    <h5 class="heading-1 mb20">How we started it</h5>
                    <span class="icon-handle-streamline-vector logo-about"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras est urna, imperdiet eget sem at, pellentesque cursus elit. Etiam id ante et elit interdum sollicitudin. Cras imperdiet, arcu eget dictum vestibulum elit.</p>
                    <p>Curabitur egestas interdum ex, sed commodo ipsum consectetur vitae. Nulla auctor ante erat. Class aptent taciti sociosqu nostra enean sed.</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row mb30">
                <div class="col-sm-9 leftReveal">
                    <h5 class="heading-1 mb20">Why?</h5>
                    <p class="lead no-margin">Lorem ipsum dolor sit amet, consectetur adipicing elit. tristique enim. Integer euef neque arcu. Aenean sed odio nibh. <strong>Cras imperdiet</strong>, arcu eget dictum vestibulumizor. Lorem ipsil dolor sit amet, consectetur adipiscing elit.</p>
                </div><!-- /.column -->
                <div class="col-sm-3 mt30-xs rightReveal">
                    <h5 class="heading-1 mb20">Quote</h5>
                    <p class="no-margin text-small"><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus quibusdam."</i></p>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-lg-7 col-sm-5 bottomReveal">
                    <h5 class="heading-1 mb20">Skills</h5>
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            Development
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            Design
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                            Photography
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            Icon Design
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            Audio
                        </div>
                    </div>
                    <div class="progress-meter mb30-xs">
                        <div class="meter meter-left" style="width: 30%;"><span class="meter-text">Beginner</span></div>
                        <div class="meter meter-left" style="width: 20%;"><span class="meter-text">Intermediate</span></div>
                        <div class="meter meter-right" style="width: 20%;"><span class="meter-text">Pro</span></div>
                        <div class="meter meter-right" style="width: 30%;"><span class="meter-text">Master</span></div>
                    </div>
                </div><!-- /.column --> 
                <div class="col-lg-5 col-sm-7 mt10 rotateLeftReveal">
                    <div id="about-carousel" class="basic-carousel carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#about-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#about-carousel" data-slide-to="1"></li>
                            <li data-target="#about-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="home/images/placeholder.png" alt="..." class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="home/images/placeholder2.png" alt="..." class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="home/images/placeholder3.png" alt="..." class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div><!-- /.column --> 
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- End About -->

    <!-- Begin Our Count -->
    <section id="ourcount" class="section-padding parallax-window our-count" data-parallax="scroll" data-image-src="images/slider1.jpg">
        <div class="container">
            <div class="row mb30">
                <div class="section-title col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <h2>The Count</h2>
                    <span class="section-divider mb15"></span>
                    <p class="no-margin">We have spent various amounts of time on activities. Oh and we like coffee and free time as well.</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-6 col-md-3 item leftReveal">
                    <div class="circle-hold">
                        <i class="ion-coffee"></i>
                    </div>
                    <h2 class="timer mb5" data-from="1" data-to="4321" data-refresh-interval="20">1</h2>
                    <p class="no-margin">Cups of coffee</p>
                </div><!-- /.column -->
                <div class="col-sm-6 col-md-3 item mt30-xs rightReveal">
                    <div class="circle-hold">
                        <i class="ion-code"></i>
                    </div>
                    <h2 class="timer mb5" data-from="1" data-to="15381" data-refresh-interval="20">1</h2>
                    <p class="no-margin">Lines of code</p>
                </div><!-- /.column -->
                <div class="col-sm-6 col-md-3 item mt30-xs mt30-sm leftReveal">
                    <div class="circle-hold">
                        <i class="ion-android-people"></i>
                    </div>
                    <h2 class="timer mb5" data-from="1" data-to="17" data-refresh-interval="20">1</h2>
                    <p class="no-margin">Employees</p>
                </div><!-- /.column -->
                <div class="col-sm-6 col-md-3 item mt30-xs mt30-sm rightReveal">
                    <div class="circle-hold">
                        <i class="ion-android-restaurant"></i>
                    </div>
                    <h2 class="timer mb5" data-from="1" data-to="921" data-refresh-interval="20">1</h2>
                    <p class="no-margin">Pizzas eaten</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- End Our Count -->

    <!-- Start Profile -->
    <section id="profile" class="background2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section-title text-center">
                    <h2>Profile</h2>
                    <span class="section-divider"></span>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-4">
                    <img alt="" src="home/images/team-member-1.jpg" class="img-responsive">
                    <div class="profile-box">
                        <ul class="list-unstyled">
                            <li><strong>Name:</strong> Denis Samardjiev</li>
                            <li><strong>Nationality:</strong> Bulgaria</li>
                            <li><strong>Position:</strong> Top Dog</li>
                            <li><strong>Phone:</strong> (000) 1234 5678</li>
                            <li><strong>Email:</strong> yourmail@iamx.com</li>
                        </ul>
                    </div>
                </div><!-- column -->
                <div class="col-sm-8 mt30-xs">
                    <h5 class="heading-1 mb20">Intro</h5>
                    <h3 class="mb15 no-margin-top">Hi, my name is Denis Samardjiev. I am the project leader.</h3>
                    <p class="text-small text-switch">No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                    <span class="divider"></span>
                    <p class="text-small">"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                    <h5 class="heading-1 mt20 mb20">Skills</h5>
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            Development
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            Design
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            Icon Design
                        </div>
                    </div>
                    <div class="progress-meter">
                        <div class="meter meter-left" style="width: 30%;"><span class="meter-text">Beginner</span></div>
                        <div class="meter meter-left" style="width: 20%;"><span class="meter-text">Intermediate</span></div>
                        <div class="meter meter-right" style="width: 20%;"><span class="meter-text">Professional</span></div>
                        <div class="meter meter-right" style="width: 30%;"><span class="meter-text">Master</span></div>
                    </div>
                    <p class="text-small mt50 no-margin-bottom"><span class="text-switch">"Good God!"</span> cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah.</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- End Profile -->

    <!-- Begin Work -->
    <section id="work" class="background1 section-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 section-title text-center">
                    <h2>Work</h2>
                    <span class="section-divider mb15"></span>
                    <p class="mb30 scaleReveal">We do awesome stuff, and yeah.</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-xs-12 text-center mb50">
                    <!-- Filter Buttons -->
                    <button class="filter btn btn-default btn-category btn-lg" data-filter="all">All</button>
                    <button class="filter btn btn-default btn-category btn-lg" data-filter=".identity">Identity</button>
                    <button class="filter btn btn-default btn-category btn-lg" data-filter=".print">Print</button>
                    <button class="filter btn btn-default btn-category btn-lg" data-filter=".graphics">Graphics</button>
                    <button class="filter btn btn-default btn-category btn-lg" data-filter=".web">Web</button>

                    <!-- Sort Buttons -->
                    <button class="sort btn btn-default btn-sort btn-lg" data-sort="my-order:asc"><span class="ion-ios-plus-empty"></span></button>
                    <button class="sort btn btn-default btn-sort btn-lg" data-sort="my-order:desc"><span class="ion-ios-minus-empty"></span></button>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div id="thework">
                <!-- Item 1 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-box no-padding mix graphics" data-my-order="3">
                    <div class="portfolio-image-holder"><img src="home/images/work/1.jpg" alt="1" class="img-responsive portfolio-image"></div>
                    <span class="portfolio-badge badge">Graphics</span>
                    <span class="portfolio-hover">
                        <span>
                            <a href="https://dribbble.com/" target="_blank">
                                <span class="portfolio-links"><span class="ion-ios-arrow-right portfolio-links-icons"></span></span>
                            </a>
                            <a href="home/images/work/1.jpg" class="zoom" title="Equipt Design">
                                <span class="portfolio-links"><span class="ion-arrow-expand portfolio-links-icons"></span></span>
                            </a>
                            <span class="project-title no-margin-bottom mt10">Equipt Design</span>
                        </span>
                    </span>
                </div><!-- /.column -->

                <!-- Item 2 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-box no-padding mix print identity" data-my-order="6">
                    <div class="portfolio-image-holder"><img src="home/images/work/2.jpg" alt="2" class="img-responsive portfolio-image"></div>
                    <span class="portfolio-badge badge">Print + Identity</span>
                    <span class="portfolio-hover">
                        <span>
                            <a href="https://dribbble.com/" target="_blank">
                                <span class="portfolio-links"><span class="ion-ios-arrow-right portfolio-links-icons"></span></span>
                            </a>
                            <a href="home/images/work/2.jpg" class="zoom" title="Goodman's Burger">
                                <span class="portfolio-links"><span class="ion-arrow-expand portfolio-links-icons"></span></span>
                            </a>
                            <span class="project-title no-margin-bottom mt10">Goodman's Burger</span>
                        </span>
                    </span>
                </div><!-- /.column -->

                <!-- Item 3 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-box no-padding mix identity" data-my-order="4">
                    <div class="portfolio-image-holder"><img src="home/images/work/3.jpg" alt="3" class="img-responsive portfolio-image"></div>
                    <span class="portfolio-badge badge">Print</span>
                    <span class="portfolio-hover">
                        <span>
                            <a href="https://dribbble.com/" target="_blank">
                                <span class="portfolio-links"><span class="ion-ios-arrow-right portfolio-links-icons"></span></span>
                            </a>
                            <a href="home/images/work/3.jpg" class="zoom" title="Paper Mockup">
                                <span class="portfolio-links"><span class="ion-arrow-expand portfolio-links-icons"></span></span>
                            </a>
                            <span class="project-title no-margin-bottom mt10">Paper Mockup</span>
                        </span>
                    </span>
                </div><!-- /.column -->

                <!-- Item 4 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-box no-padding mix graphics" data-my-order="5">
                    <div class="portfolio-image-holder"><img src="home/images/work/4.jpg" alt="4" class="img-responsive portfolio-image"></div>
                    <span class="portfolio-badge badge">Graphics</span>
                    <span class="portfolio-hover">
                        <span>
                            <a href="https://dribbble.com/" target="_blank">
                                <span class="portfolio-links"><span class="ion-ios-arrow-right portfolio-links-icons"></span></span>
                            </a>
                            <a href="home/images/work/4.jpg" class="zoom" title="Simple Pleasure">
                                <span class="portfolio-links"><span class="ion-arrow-expand portfolio-links-icons"></span></span>
                            </a>
                            <span class="project-title no-margin-bottom mt10">Simple Pleasure</span>
                        </span>
                    </span>
                </div><!-- /.column -->

                <!-- Item 5 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-box no-padding mix print identity" data-my-order="2">
                    <div class="portfolio-image-holder"><img src="home/images/work/5.jpg" alt="5" class="img-responsive portfolio-image"></div>
                    <span class="portfolio-badge badge">Print + Identity</span>
                    <span class="portfolio-hover">
                        <span>
                            <a href="https://dribbble.com/" target="_blank">
                                <span class="portfolio-links"><span class="ion-ios-arrow-right portfolio-links-icons"></span></span>
                            </a>
                            <a href="home/images/work/5.jpg" class="zoom" title="Wine Bottles">
                                <span class="portfolio-links"><span class="ion-arrow-expand portfolio-links-icons"></span></span>
                            </a>
                            <span class="project-title no-margin-bottom mt10">Wine Bottles</span>
                        </span>
                    </span>
                </div><!-- /.column -->

                <!-- Item 6 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-box no-padding mix web" data-my-order="1">
                    <div class="portfolio-image-holder"><img src="home/images/work/6.jpg" alt="6" class="img-responsive portfolio-image"></div>
                    <span class="portfolio-badge badge">Web</span>
                    <span class="portfolio-hover">
                        <span>
                            <a href="https://dribbble.com/" target="_blank">
                                <span class="portfolio-links"><span class="ion-ios-arrow-right portfolio-links-icons"></span></span>
                            </a>
                            <a href="home/images/work/6.jpg" class="zoom" title="Web UI">
                                <span class="portfolio-links"><span class="ion-arrow-expand portfolio-links-icons"></span></span>
                            </a>
                            <span class="project-title no-margin-bottom mt10">Web UI</span>
                        </span>
                    </span>
                </div><!-- /.column -->

                <!-- Item 7 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-box no-padding mix graphics print" data-my-order="9">
                    <div class="portfolio-image-holder"><img src="home/images/work/7.jpg" alt="7" class="img-responsive portfolio-image"></div>
                    <span class="portfolio-badge badge">Graphics + Print</span>
                    <span class="portfolio-hover">
                        <span>
                            <a href="https://dribbble.com/" target="_blank">
                                <span class="portfolio-links"><span class="ion-ios-arrow-right portfolio-links-icons"></span></span>
                            </a>
                            <a href="home/images/work/7.jpg" class="zoom" title="Hello World">
                                <span class="portfolio-links"><span class="ion-arrow-expand portfolio-links-icons"></span></span>
                            </a>
                            <span class="project-title no-margin-bottom mt10">Hello World</span>
                        </span>
                    </span>
                </div><!-- /.column -->

                <!-- Item 8 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-box no-padding mix web" data-my-order="7">
                    <div class="portfolio-image-holder"><img src="home/images/work/8.jpg" alt="8" class="img-responsive portfolio-image"></div>
                    <span class="portfolio-badge badge">Web</span>
                    <span class="portfolio-hover">
                        <span>
                            <a href="https://dribbble.com/" target="_blank">
                                <span class="portfolio-links"><span class="ion-ios-arrow-right portfolio-links-icons"></span></span>
                            </a>
                            <a href="home/images/work/8.jpg" class="zoom" title="We Create Mobile">
                                <span class="portfolio-links"><span class="ion-arrow-expand portfolio-links-icons"></span></span>
                            </a>
                            <span class="project-title no-margin-bottom mt10">We Create Mobile</span>
                        </span>
                    </span>
                </div><!-- /.column -->

                <!-- Item 9 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-box no-padding mix web" data-my-order="8">
                    <div class="portfolio-image-holder"><img src="home/images/work/9.jpg" alt="9" class="img-responsive portfolio-image"></div>
                    <span class="portfolio-badge badge">Web</span>
                    <span class="portfolio-hover">
                        <span>
                            <a href="https://dribbble.com/" target="_blank">
                                <span class="portfolio-links"><span class="ion-ios-arrow-right portfolio-links-icons"></span></span>
                            </a>
                            <a href="home/images/work/9.jpg" class="zoom" title="Captain da Ship">
                                <span class="portfolio-links"><span class="ion-arrow-expand portfolio-links-icons"></span></span>
                            </a>
                            <span class="project-title no-margin-bottom mt10">Captain da Ship</span>
                        </span>
                    </span>
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- Begin Work -->

    <!-- Begin Timeline -->
    <section id="timeline" class="background1 section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section-title text-center">
                    <h2>Timeline</h2>
                    <span class="section-divider"></span>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline pb80">

                        <!-- Item 1 -->
                        <li>
                            <div class="timeline-image scaleReveal"><img alt="" class="img-circle img-responsive" src="home/images/timeline-1.jpg"></div>
                            <div class="timeline-panel leftReveal">
                                <div class="timeline-heading">
                                    <h5 class="heading-1 mb15">2015</h5>
                                    <h4 class="subheading">We Began Our Venture</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>

                        <!-- Item 2 -->
                        <li class="timeline-inverted">
                            <div class="timeline-image scaleReveal"><img alt="" class="img-circle img-responsive" src="home/images/timeline-2.jpg"></div>
                            <div class="timeline-panel rightReveal">
                                <div class="timeline-heading">
                                    <h5 class="heading-1 mb15">April 2016</h5>
                                    <h4 class="subheading">A Company is in Mind</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>

                        <!-- Item 3 -->
                        <li>
                            <div class="timeline-image scaleReveal"><img alt="" class="img-circle img-responsive" src="home/images/timeline-3.jpg"></div>
                            <div class="timeline-panel leftReveal">
                                <div class="timeline-heading">
                                    <h5 class="heading-1 mb15">May 2016</h5>
                                    <h4 class="subheading">We Launch The Hex Group</h4>
                                </div>
                                <div class="timeline-body"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>

                        <!-- Item 4 -->
                        <li class="timeline-inverted">
                            <div  class="timeline-image scaleReveal"><img alt="" class="img-circle img-responsive" src="home/images/timeline-4.jpg"></div>
                            <div class="timeline-panel rightReveal">
                                <div class="timeline-heading">
                                    <h5 class="heading-1 mb15">July 2016</h5>
                                    <h4 class="subheading">We Expand to 15 Employees</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- End Timeline -->

    <!-- Begin Team -->
    <section id="team" class="background2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section-title text-center">
                    <h2>Team</h2>
                    <span class="section-divider"></span>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row mb40">

                <!-- Item 1 -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 topReveal">
                    <div class="team-member-box">
                        <h3>John Bender</h3>
                        <p class="mb20">CEO</p>
                        <div class="team-image-wrapper">
                            <span class="team-image-hover">
                                <span class="team-hover-content">
                                    <!-- Social -->
                                    <span><span class="ion-android-share-alt social-icon-title"></span></span>
                                    <a href="#"><span class="ion-social-twitter social-icons-light-hover mr15"></span></a>
                                    <a href="#"><span class="ion-social-facebook social-icons-light-hover mr15"></span></a>
                                    <a href="#"><span class="ion-social-googleplus-outline social-icons-light-hover"></span></a>
                                </span>
                            </span>
                            <img src="home/images/team-member-1.jpg" alt="1 Member" class="img-responsive img-circle team-member-img">
                        </div>
                    </div>
                </div><!-- /.column -->

                <!-- Item 2 -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-xs bottomReveal">
                    <div class="team-member-box">
                        <h3>Steve Bender</h3>
                        <p class="mb20">Designer</p>
                        <div class="team-image-wrapper">
                            <span class="team-image-hover">
                                <span class="team-hover-content">
                                    <!-- Social -->
                                    <span class="ion-android-share-alt social-icon-title"></span>
                                    <a href="#"><span class="ion-social-twitter social-icons-light-hover mr15"></span></a>
                                    <a href="#"><span class="ion-social-facebook social-icons-light-hover mr15"></span></a>
                                    <a href="#"><span class="ion-social-googleplus-outline social-icons-light-hover"></span></a>
                                </span>
                            </span>
                            <img src="home/images/team-member-2.jpg" alt="2 Member" class="img-responsive img-circle team-member-img">
                        </div>
                    </div>
                </div><!-- /.column -->

                <!-- Item 3 -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-sm mt30-xs topReveal">
                    <div class="team-member-box">
                        <h3>Artie McCraft</h3>
                        <p class="mb20">Developer</p>
                        <div class="team-image-wrapper">
                            <span class="team-image-hover">
                                <span class="team-hover-content">
                                    <!-- Social -->
                                    <span><span class="ion-android-share-alt social-icon-title"></span></span>
                                    <a href="#"><span class="ion-social-twitter social-icons-light-hover mr15"></span></a>
                                    <a href="#"><span class="ion-social-facebook social-icons-light-hover mr15"></span></a>
                                    <a href="#"><span class="ion-social-googleplus-outline social-icons-light-hover"></span></a>
                                </span>
                            </span>
                            <img src="home/images/team-member-3.jpg" alt="3 Member" class="img-responsive img-circle team-member-img">
                        </div>
                    </div>
                </div><!-- /.column -->

                <!-- Item 4 -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-sm mt30-xs bottomReveal">
                    <div class="team-member-box">
                        <h3>Lisa Chen</h3>
                        <p class="mb20">Accounting</p>
                        <div class="team-image-wrapper">
                            <span class="team-image-hover">
                                <span class="team-hover-content">
                                    <!-- Social -->
                                    <span><span class="ion-android-share-alt social-icon-title"></span></span>
                                    <a href="#"><span class="ion-social-twitter social-icons-light-hover mr15"></span></a>
                                    <a href="#"><span class="ion-social-facebook social-icons-light-hover mr15"></span></a>
                                    <a href="#"><span class="ion-social-googleplus-outline social-icons-light-hover"></span></a>
                                </span>
                            </span>
                            <img src="home/images/team-member-4.jpg" alt="4 Member" class="img-responsive img-circle team-member-img">
                        </div>
                    </div>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-4 leftReveal">
                    <h5 class="heading-1 mb20">Our Goal</h5>
                    <h3 class="no-margin-top mb15">To create a better and more functional world through the web.</h3>
                    <p class="no-margin text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec tristiq enim. Integer eu <strong>neque</strong> arcu. Aenean sed odio nibh. Cras imperdiet, arcu eget dictum vestibulum elit.</p>
                </div><!-- /.column -->
                <div class="col-sm-8 mt20-xs rightReveal">
                    <h5 class="heading-1 mb20">Who are we?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipicing elit. tristique enim. Integer eu neque arcu. Aenean sed odio nibh. Cras imperdiet, arcu eget dictum vestibulum. Lorem ipsil dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="no-margin">Integer eu neque arcu. Aenean sed odio nibh. Cras imperdiet, arcu eget dictum vestibulum elit. Lorem ipsum dolor sit amet, consectetur adipicing elit. Etiam nisi orci, fringilla eget nulla vel, aliquam porta ante. Integer bibendum nunc eu ipsum maximus, non ornare elit molestie. </p>
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- End Team -->

    <!-- Begin Pricing -->
    <section class="background1 section-padding">
        <div class="container">
            <div class="row mb30">
                <div class="col-lg-6 col-lg-offset-3 section-title text-center">
                    <h2>Pricing</h2>
                    <span class="section-divider mb15"></span>
                    <p class="no-margin">We offer extremely competitive prices for all products.</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row mb50">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="heading-3 mt10 scaleReveal">Some of Our Clients</h2>
                    <img src="home/images/logos/coca.png" alt="Client 1" class="img-responsive pricing-clients mr15 topReveal">
                    <img src="home/images/logos/ebay.png" alt="Client 2" class="img-responsive pricing-clients mr15 bottomReveal">
                    <img src="home/images/logos/microsoft.png" alt="Client 3" class="img-responsive pricing-clients mr15 topReveal">
                    <img src="home/images/logos/pepsi.png" alt="Client 4" class="img-responsive pricing-clients bottomReveal">
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row">

                <!-- Item 1 -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 bottomReveal">
                    <ul class="plan plan1">
                        <li class="plan-name">Basic</li>
                        <li class="plan-price"><strong>$29</strong> / month</li>
                        <li><strong>400GB</strong> Bandwidth</li>
                        <li><strong>10</strong> Email Address</li>
                        <li><strong>Forum</strong> Support</li>
                        <li><strong>No</strong> Squirel</li>
                        <li class="plan-action">
                            <a class="btn btn-default btn-lg" href="#">Signup</a>
                        </li>
                    </ul>
                </div><!-- /.column -->

                <!-- Item 2 -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-xs topReveal">
                    <ul class="plan plan2 featured">
                        <li class="plan-name">Standard</li>
                        <li class="plan-price"><strong>$39</strong> / month</li>
                        <li><strong>400GB</strong> Bandwidth</li>
                        <li><strong>10</strong> Email Address</li>
                        <li><strong>Forum</strong> Support</li>
                        <li><strong>No</strong> Squirel</li>
                        <li class="plan-action">
                            <a class="btn btn-default btn-lg" href="#">Signup</a>
                        </li>
                    </ul>
                </div><!-- /.column -->

                <!-- Item 3 -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-sm mt30-xs bottomReveal">
                    <ul class="plan plan3">
                        <li class="plan-name">Advanced</li>
                        <li class="plan-price"><strong>$199</strong> / month</li>
                        <li><strong>1024GB</strong> Bandwidth</li>
                        <li><strong>Unlimited</strong> Email Address</li>
                        <li><strong>Forum</strong> Support</li>
                        <li><strong>Free</strong> Squirel</li>
                        <li class="plan-action">
                            <a class="btn btn-default btn-lg" href="#">Signup</a>
                        </li>
                    </ul>
                </div><!-- /.column -->

                <!-- Item 4 -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-sm mt30-xs topReveal">
                    <ul class="plan plan4">
                        <li class="plan-name">Mighty</li>
                        <li class="plan-price"><strong>$999</strong> / month</li>
                        <li><strong>1024GB</strong> Bandwidth</li>
                        <li><strong>Unlimited</strong> Email Address</li>
                        <li><strong>Forum</strong> Support</li>
                        <li><strong>Free</strong> Squirel</li>
                        <li class="plan-action">
                            <a class="btn btn-default btn-lg" href="#">Signup</a>
                        </li>
                    </ul>
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- End Pricing -->

    <!-- Begin Contact -->
    <section id="contact" class="background2 section-padding">
        <div class="container">
            <div class="row mb30">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 section-title text-center">
                    <h2>Contact</h2>
                    <span class="section-divider mb15"></span>
                    <p class="no-margin scaleReveal">Our team is from all over the world and we know how to deliver quality pixels from miles away.</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-5 col-lg-4">
                    <h5 class="heading-1 mb20">Visit Us</h5>
                    <h4 class="mb15">142 Pelican Drive • 1252nd Floor, Suite 420<br>New York City, New York 99912</h4>
                    <p class="no-margin text-xs-small">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates. Temporibus autem quibusdam et aut.</p>
                    <hr class="mini-hr">
                    <p class="text-xs-small mb5"><strong class="text-switch">Email:</strong> info@particle.com</p>
                    <p class="text-xs-small mb5"><strong class="text-switch">Phone:</strong> +1 212-249-2390</p>
                    <p class="text-xs-small mb5"><strong class="text-switch">Fax:</strong> +1 112-444-2390</p>
                </div><!-- /.column -->
                <div class="col-sm-6 col-lg-7 mt30-xs">
                    <form data-toggle="validator" id="contactForm" name="contactForm">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <input class="form-control" data-error="This section is required."
                                        id="msg_subject" placeholder="Subject *" required="" type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div><!-- /.column -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <input class="form-control" id="phone" placeholder="Phone" type="text">
                                    </div>
                                </div>
                            </div><!-- /.column -->
                        </div><!-- /.row -->
                        <div class="row mb10">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <input class="form-control" data-error="This section is required." id="name" placeholder="Your Name *" required="" type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div><!-- /.column -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <input class="email form-control" data-error="This section is required." id="email" placeholder="Email *" required="" type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div><!-- /.column -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <textarea class="form-control" data-error="This section is required." id="message" placeholder="Message *" required="" rows="5"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt15">
                            <div class="col-sm-6">
                                <div id="msgSubmit" class="h4 hidden mt10 no-margin-bottom"></div> 
                            </div><!-- /.column -->
                            <div class="col-sm-6 text-right">
                                <button type="submit" id="submit" class="btn btn-default btn-lg">Send</button>
                            </div><!-- /.column -->
                        </div><!-- /.row -->
                    </form><!-- /.form -->
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- End Contact -->

    <!-- Begin Map -->
    <div id="map"></div>
    <!-- End Map -->

    <!-- Begin Footer -->
    <footer class="footer-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <span class="icon-handle-streamline-vector logo"></span>
                    <h2 class="theme-title">Particles<span class="theme-title-smaller">Theme</span></h2>
                    <a href="#"><span class="ion-social-twitter social-icons-dark-hover mr15"></span></a>
                    <a href="#"><span class="ion-social-facebook social-icons-dark-hover mr15"></span></a>
                    <a href="#"><span class="ion-social-googleplus-outline social-icons-dark-hover"></span></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-small text-center">
                    <hr>
                    <button type="button" class="btn btn-primary btn-up-footer btn-lg scroll-top">Up</button>
                    <p class="no-margin">&copy; Denis Samardjiev</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /.footer -->
    <!-- Begin Footer -->

    <!-- Javascript Files -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArLNT3t4qsJEBmR0R9P_6ueLIQz0Jvt1M&amp;callback=initMap" async defer></script>
    <script type="text/javascript">
        /* ---- Google Maps ---- */
        function initMap() {
            var mapOptions = {
                zoom: 15,
                zoomControl: false,
                scaleControl: false,
                scrollwheel: true,
                disableDoubleClickZoom: true,
                center: new google.maps.LatLng(13.150160, 123.712181), // New York
                styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(13.150160, 123.712181),
                map: map,
                title: 'Our Office!'
            });
        }
    </script>
    <script type="text/javascript" src="home/js/particles.min.js"></script>
    <script type="text/javascript" src="home/js/particlesRun.js"></script>
    <script type="text/javascript" src="home/js/jquery.mixitup.js"></script>
    <script type="text/javascript" src="home/js/form-validator.min.js"></script>  
    <script type="text/javascript" src="home/js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="home/js/jquery.countTo.js"></script>  
    <script type="text/javascript">
        /* ---- Counter (our count) ---- */
        $('#ourcount').one('inview', function(event, isInView) {
            if (isInView) {
                $('.timer').countTo({speed: 3000});
            }
        });
    </script>
    <script type="text/javascript" src="home/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="home/js/scrollreveal.min.js"></script>
    <script type="text/javascript" src="home/js/style-switcher.js"></script><!-- Remove for production -->
    <script type="text/javascript" src="home/js/main.js"></script>
</body>

<!-- Mirrored from aliensix.com/particles-1.3/HTML/index-default-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Oct 2016 13:43:19 GMT -->
</html>
