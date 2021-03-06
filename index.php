<!DOCTYPE html>
<html lang="en">
<!--
 __  __ ____  ____  _       _                      _   _
|  \/  / ___||  _ \(_)_ __ | |_ ___ _ __ __ _  ___| |_(_)_   _____
| |\/| \___ \| |_) | | '_ \| __/ _ \ '__/ _` |/ __| __| \ \ / / _ \
| |  | |___) |  _ <| | | | | ||  __/ | | (_| | (__| |_| |\ V /  __/
|_|  |_|____/|_| \_\_|_| |_|\__\___|_|  \__,_|\___|\__|_| \_/ \___|

Powered by MSRinteractive - msrinteractive.com
-->

<!--
TODO
Colors for the things:  #121b82 blue   Yellow #f4c824

Add contact form, and test it

Create FAVicon and add to each header
keyword research and metas

test mobile operation / padding / margins / responsiveness
remove demo content and code comments and any un-necessary files

-->

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Giordano Restoration - We specialize in addressing residential mold issues, Mold Problems, Mold Remediation, Flood Recovery, Southeastern CT, Montville, Waterford, Norwich, East Lyme, Niantic, New Haven, Hartford, Old Saybrook, Westbrook, Essex" />
        <meta name="keywords" content="How to Fix Mold Problems, Mold Remediation, Flood Recovery, Disaster Recovery, Water Damage, Southeastern CT, Montville, Waterford, Norwich, East Lyme, Niantic, New Haven, Mold Problems, Groton, Ledyard, Preston, Old Saybrook, Salem, Bozrah, uncasville" />
        <meta name="author" content="Giordano Restoration">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 month">
        <title>Giordano Restoration - We specialize in addressing residential mold issues, Mold Remediation, Flood Recovery, Southeastern CT, Montville, Waterford, Norwich, East Lyme, Niantic, New Haven, Hartford, Westbrook, Old Saybrook, Mold Problems</title>
        <!-- Mold Problems, Mold Remediation, Giordano Restoration -->
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- icons-->
        <link href="assets/icons/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--google fonts-->

        <!--Flex slider-->
        <link href="assets/css/flexslider.css" rel="stylesheet">
        <!--popups css-->
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        <!--animated css-->
        <link href="assets/css/animate.css" rel="stylesheet">
        <!--cube portfolio-->
        <link href="assets/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet">
        <!--pricing css-->
        <link href="assets/css/pricing.css" rel="stylesheet" type="text/css">
        <!--revolution slider setting css-->
        <link href="assets/rs-plugin/css/settings.css" rel="stylesheet">
        <!--master slider-->
        <link href="assets/master-slider/style/masterslider.css" rel="stylesheet">
        <link href="assets/master-slider/skins/default/style.css" rel="stylesheet">
        <link href="assets/css/master-slider-custom.css" rel="stylesheet" type="text/css"> 
          <link href="assets/video-background/background.css" rel="stylesheet" type="text/css">
         <!--custom css (Using style.scss file for customize)-->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
<!-- Contact Form PHP -->
<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Website Contact Form';
    $to = 'garygiordano@hotmail.com';
    $subject = 'Message from Website Form';

    $body ="From: $name\n E-Mail: $email\n Message:\n $message";

    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
        $errHuman = 'Your anti-spam is incorrect';
    }

// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
}
?>
    <body data-spy="scroll" data-target=".navbar" data-offset="80">
      
        
        <section id="home" class="video-section">
            <div class="overlay"></div>
            <div class="video-overlay">
                <div class="container scroll-to">
                    <a href='#about' class="btn btn-lg btn-theme-bg wow animated fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
        </section>
        <!-- Static navbar -->
        <nav class="navbar navbar-inverse sticky-nav navbar-static-top navbar-border">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" id="menu-button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/images/menu-logo.jpg" alt="LOGO"></a>
                    </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>                                 
                        <li class="dropdown">
                            <span class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">More <i class="caret"></i></span>
                            <ul class="dropdown-menu">
                                <li><a href="mold-faq.html">Mold FAQ</a></li>
                                <li><a href="fire-damage.html">Fire Damage</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </nav>



        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="text-center logo-intro">
                            <br/><br/>
                            <img src="assets/images/blue-logo.PNG" class="header-logo"><br/>
                            <a href="http://www.iaqa.org/about/" target="_blank">
                            <img src="assets/images/iaqa-badge.png" class="badges"></a>
                            <a href="http://www.bbb.org/connecticut/business-reviews/mold-and-mildew-remediation/giordano-restoration-in-uncasville-ct-87107886" target="_blank">
                            <img src="assets/images/bbb.jpg" class="badges">
                            </a>
                            <a href="https://www.epa.gov/lead/learn-about-lead" target="_blank">
                            <img src="assets/images/lead-safe.jpg" class="badges"></a>


                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 text-center">
                        <br/><br/>
                        <h2 class="text-center">Giordano Restoration</h2>
                        <span class="center-border-line"></span>
                        <p class="sub-text colored-text">Mold, Smoke, and Fire damage restoration</p>
                        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s">
                            Giordano Restoration is eastern Connecticut's premiere disaster restoration company, offering 24 hour emergency disaster recovery services. A proud member of the Indoor Air Quality Association. Giordano Restoration is A+ rated by the Better Business Bureau. We are nationally EPA Lead-Safe certified, state licensed, and fully insured. Family owned and operated to bring you the highest level of service and direct attention to your specific needs. <em>CT License # 615119</em>
                        </p>


                    </div>


                </div><!--left title row end-->
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div>

                            <a href="#contact"><button class="btn btn-lg btn-theme-bg wow tada">Contact Us</button></a>
                            <br/><br/>
                        </div>

                    </div>
                </div><!--ROW sub title center-->

                <div class="row">
                    <div class="col-sm-4 margin-bottom30">
                        <div class="service-features">
                            <i class="ion-ios-people-outline"></i>
                            <h3>Family Owned</h3>
                            <p>
                                We are a local-family owned operation that cares deeply about it's performance. We pride ourselves on doing the job right. Our keen attention to detail ensures that your home will be clean, odor free, and back to normal.
                            </p>
                        </div><!--service features-->
                    </div>
                    <div class="col-sm-4 margin-bottom30">
                        <div class="service-features">
                            <i class="ion-erlenmeyer-flask"></i>
                            <h3>Mold Experts</h3>
                            <p>
                                We are experts in water damage mitigation and mold remediation. We use specialized containment, specialty equipment, and the highest standard of remediation techniques to restore your home.
                            </p>
                        </div><!--service features-->
                    </div>
                    <div class="col-sm-4 margin-bottom30">
                        <div class="service-features">
                            <i class="ion-ios-speedometer-outline"></i>
                            <h3>Rapid Response</h3>
                            <p>
                                Our fast, efficient team will restore your home quickly and as conveniently as possible. We are experienced in handling insurance companies to get results FAST.
                            </p>
                        </div><!--service features-->
                    </div>
                </div><!--row-->
            </div><!--container-->      
        </section><!--about section end-->

        <div class=" fun-facts">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="text-center wow animated fadeIn" data-wow-delay=".1s">
                            <h2 class="center-title"> 6 Reasons to Choose us</h2>
                            <span class="center-border-line"></span>
                            <p class="sub-text">Some fun facts about our company.</p>
                        </div>
                    </div>
                </div><!--center title row end-->
                <div class="row">
                    <div class="col-md-2 col-sm-6 margin-bottom30">
                        <div class="fun-facts-inner wow animated fadeIn" data-wow-delay=".1s">
                            <h2>1488</h2>
                            <h4>Rapid Responses</h4>
                        </div>
                    </div><!--fun facts col-->
                    <div class="col-md-2 col-sm-6 margin-bottom30">
                        <div class="fun-facts-inner wow animated fadeIn" data-wow-delay=".2s">
                            <h2>24/7 </h2>
                            <h4>Emergency Service</h4>
                        </div>
                    </div><!--fun facts col-->
                    <div class="col-md-2 col-sm-6 margin-bottom30">
                        <div class="fun-facts-inner wow animated fadeIn" data-wow-delay=".3s">
                            <h2>90</h2>
                            <h4>Billion Spores Destroyed</h4>
                        </div>
                    </div><!--fun facts col-->
                    <div class="col-md-2 col-sm-6 margin-bottom30">
                        <div class="fun-facts-inner wow animated fadeIn" data-wow-delay=".4s">
                            <h2>592</h2>
                            <h4>Flooded Basements</h4>
                        </div>
                    </div><!--fun facts col-->
                    <div class="col-md-2 col-sm-6 margin-bottom30">
                        <div class="fun-facts-inner wow animated fadeIn" data-wow-delay=".4s">
                            <h2>483</h2>
                            <h4>Moldy Attics</h4>
                        </div>
                    </div><!--fun facts col-->
                    <div class="col-md-2 col-sm-6 margin-bottom30">
                        <div class="fun-facts-inner wow animated fadeIn" data-wow-delay=".4s">
                            <h2>10</h2>
                            <h4><strong>YEARS</strong> of happy customers</h4>
                        </div>
                    </div><!--fun facts col-->
                </div> <!--ROW  -->
            </div>
        </div><!--fun facts end -->

        <section id="services" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="text-center wow animated fadeIn" data-wow-delay=".1s">
                            <h2 class="center-title"> Our services</h2>
                            <span class="center-border-line"></span>
                            <p class="sub-text">We are disaster recovery experts.</p>
                        </div>
                    </div>
                </div><!--center title row end-->


                <div class="row">
                    <div class="col-sm-4 margin-bottom30">
                        <div class="services-box wow animated fadeIn" data-wow-delay="0.2s">
                            <h3 class="services-title">Mold Damage</h3>
                            <i class="ion-nuclear icon-big-round"></i>
                            <p>
                                We are experts in water damage mitigation and mold remediation. We use specialized methods to remove and stop the spread of mold.
                            </p>
                            <h4>What we offer</h4>
                            <ul class=" list-unstyled">
                                <li>Containment</li>
                                <li>Cleaning</li>
                                <li>Removal</li>


                            </ul>
                        </div><!--service box-->
                    </div><!--col-->
                    <div class="col-sm-4 margin-bottom30">
                        <div class="services-box wow animated fadeIn" data-wow-delay="0.4s">
                            <h3 class="services-title">Smoke Damage</h3>
                            <i class="ion-ios-home icon-big-round"></i>
                            <p>
                                Our immersion cleaning, wet & dry cleaning, or abrasive cleaning methods will restore your items and home leaving them odor-free and clean.
                            </p>
                            <h4>What we offer</h4>
                            <ul class=" list-unstyled">
                                <li>Wet Cleaning</li>
                                <li>Dry Cleaning</li>
                                <li>Abrasive Cleaning</li>

                            </ul>
                        </div><!--service box-->
                    </div><!--col-->
                    <div class="col-sm-4 margin-bottom30">
                        <div class="services-box wow animated fadeIn" data-wow-delay="0.6s">
                            <h3 class="services-title">Fire Damage</h3>
                            <i class="ion-fireball icon-big-round"></i>
                            <p>
                                A fire in your home of business can be devastating. Our team will restore your home quickly and with sensitivity to your situation.
                            </p>
                            <h4>What we offer</h4>
                            <ul class=" list-unstyled">
                                <li>Restoration</li>
                                <li>Sensitivity</li>
                                <li>Claim handling</li>

                            </ul>
                        </div><!--service box-->
                    </div><!--col-->
                </div>
            </div>
        </section><!--services section end here-->


        <div class="gray-cta">
            <div class="container text-center scroll-to wow tada">
                <h2>are you ready to start a conversation?</h2>
                <a href="#contact" class="btn btn-lg btn-theme-bg">Get in touch</a>
            </div>
        </div><!--gray cta-->

        <div class="container accordion-video-row">
            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <h2 class="elements-title">Why choose us?</h2>
                    <hr class="fancy-hr">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Reliable & Professional
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    When we make an appointment with you, you can trust that we will be there on time and ready to get the job done.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Experts in Restoration
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    We offer an uncompromised level of service with many years of experience. We communicate well with insurance companies to deliver the results quickly. Our expertise ensures that your home will be clean, odor free, and back to normal as soon as possible.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Incredible Value
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    We offer competitive pricing that delivers the maximum value for your budget.
                                </div>
                            </div>
                        </div>
                    </div><!--collapse-->
                </div>
                <div class="col-xs-12 col-md-6 video-holder wow animated fadeInLeftBig">

                    <video poster="assets/images/blue-logo.PNG" src="assets/video-background/vid.mp4" controls width="100%">Your browser does not support this video. Please come back with an HTML5 compliant browser. </video>

                </div>
            </div><!-- col-->


        </div><!-- row-->

        <div class="testimonials " id="testimonials">
        <div class="container">
            <div class="row">
                <div class="text-center wow animated fadeInDown" data-wow-delay=".1s">
                    <h2 class="center-title"> <span class="colored-text">Happy </span> Clients</h2>
                    <span class="center-border-line"></span>
                    <p class="sub-text">Hundreds of extremely satisfied clients!</p>
                </div>
                <!--carousel -->
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                        <li data-target="#quote-carousel" data-slide-to="3"></li>
                        <li data-target="#quote-carousel" data-slide-to="4"></li>


                    </ol>

                <div class="carousel-inner">

                    <!-- Quote 1 -->
                    <div class="item active">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <span><i class="ion-happy-outline"></i></span>

                                </div>
                                <div class="col-sm-9">
                                    <p>The professional, personal service we received from Gary and his team was a tremendous blessing and comfort during an incredibly difficult experience. He and his team were patient and understanding as we struggled with the heart-wrenching decisions our mold invasion forced us to make. More importantly, they were deeply concerned with the health and well-being of ourselves and our children and did a phenomenal job mitigating the mold and educating us. In addition to all of this, Gary was extremely helpful in navigating the messy web of insurance. Truly a blessing and a wonderful team of dedicated employees!</p>
                                    <small>Robert T. from Groton CT</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Quote 2 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <span><i class="ion-happy-outline"></i></span>
                                </div>
                                <div class="col-sm-9">
                                    <p>Makes you feel at ease. Always does a great job! Would highly recommend him!</p>
                                    <small>Laura B. - Facebook review</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Quote 3 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <span><i class="ion-happy-outline"></i></span>
                                </div>
                                <div class="col-sm-9">
                                    <p>I had a devastating fire in my home, which led to extensive water and mold damage. Gary and his crew were so polite and professional. They took great care in cleaning and packing my possessions in an orderly way. They compiled an easy to follow inventory, cataloging everything and providing a detailed list of all of the contents of my home. When I was able to move back into my house, all of my belongings were returned to their proper places.  Gary always worked in my best interest and it was wonderful to feel like he was an ally to me during this extremely difficult time in my life.  I would recommend Giordano Restoration to anyone who is faced with a disaster in their home.</p>
                                    <small>Rita V. from Amston CT</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Quote 4 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <span><i class="ion-happy-outline"></i></span>
                                </div>
                                <div class="col-sm-9">
                                    <p>FIVE STAR SERVICE!!!</p>
                                    <small>Mike O. - Facebook review</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                    <!-- Quote 5 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-3 text-center">
                                    <span><i class="ion-happy-outline"></i></span>
                                </div>
                                <div class="col-sm-9">
                                    <p>Professional and polite! - 5 stars</p>
                                    <small>Melissa D. - Facebook Review</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                    <!-- Quote 6 -->

                </div><!--carousel inner  -->
                <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div><!--row -->
        </div><!--container-->
        </div><!--testimonial parallax-->

        <section id="mold" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-offset-2">
                        <div class="text-center">
                            <h2 class="center-title">What is Mold?</h2>
                            <span class="center-border-line"></span>
                            <p class="sub-text">Mold is a fungus. All molds are dangerous to your home. </p>
                        </div>
                    </div>
                </div><!--row-->

                <div class="col-xs-12 col-md-6">
                    <h2 class="elements-title">&nbsp;</h2>
                    <hr class="fancy-hr">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="assets/images/mold-01.jpg" class="img-responsive" alt="...">

                            </div>
                            <div class="item">
                                <img src="assets/images/mold-02.jpg" class="img-responsive" alt="...">

                            </div>
                            <div class="item">
                                <img src="assets/images/mold-03.jpg" class="img-responsive" alt="...">

                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div><br/>
                </div>

                <div class="col-xs-12 col-md-6">
                    <h2 class="elements-title">Mold Statistics</h2>
                    <hr class="fancy-hr">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            <span>7 Million Deaths</span>
                        </div>
                    </div><!--progress-->
                    <p>Causes 7 Million Deaths Annually</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                            <span>Sinus Infections</span>
                        </div>
                    </div><!--progress-->
                    <p>93% of Chronic Sinus infections are attributed to mold</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span>Asthma</span>
                        </div>
                    </div><!--progress-->
                    <p>300% increase in mold-related Asthma in the past 20 years</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%">
                            <span>Health Issues</span>
                        </div>
                    </div><!--progress-->
                    <p>100% of all types of mold have the potential to cause some health issues.</p>
                </div>

                <div class="col-xs-12">
                    <br/>
                    <h2 class="text-center">Molds can spread rapidly and damage your home.</h2>
                    <p>There are thousands of varieties of mold, but they all survive by digesting organic matter, and reproduce by forming spores. Mold needs both food and water to survive. A single square inch of drywall can contain between one and ten million mold spores. Because molds literally consume the materials they grow on, serious and permanent damage to those materials is guaranteed if mold is allowed to continue growing and producing new colonies.<br/>
                    </p>
                    <p class="text-center"><a href="mold-faq.html" class="btn btn-lg btn-theme-bg learn-more-btn text-center">Learn More</a>
                    </p>
                </div>


            </div>
        </section>


        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-offset-2">
                        <div class="text-center">
                            <h2 class="center-title">Contact Us</h2>
                            <span class="center-border-line"></span>
                            <p class="sub-text">Our fast, efficient team is standing by for your call. <br/> <a href="tel:860-885-4892">860-885-4892</a> </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="contact-form wow animated fadeInLeft" data-wow-delay=".2s">
                            <form class="form-horizontal" role="form" method="post" action="index.php">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                        <?php echo "<p class='text-danger'>$errName</p>";?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="col-sm-2 control-label">Message</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                        <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                        <?php echo "<p class='text-danger'>$errHuman</p>";?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <input id="submit" name="submit" type="submit" value="Send Feedback"  class="btn btn-dark-bg btn-lg" data-loading-text="Sending..." >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <?php echo $result; ?>
                                    </div>
                                </div>
                            </form>

                        </div><!--contact form-->
                    </div><!--col-7-->
                    <div class="col-sm-5">
                        <h4>Love to hear from you!</h4>
                        <p>
                            Don't wait until disaster is at your doorstep to get to know us. Reach out and say hello!
                        </p>
                        <br>
                        <br>
                        <h4>About Us</h4>
                        <p>
                            Giordano Restoration is eastern Connecticut's premiere disaster restoration company. We offer 24 hour emergency disaster recovery services. We a proud member of the Indoor Air Quality Association and carry an A+ rating with the Better Business Bureau. We are nationally EPA Lead-Safe certified, state licensed, and fully insured. We are family owned and operated right here in your community.

                            CT License # 615119
                        </p>
                        <div class="text-center">
                            <a href="http://www.iaqa.org/about/" target="_blank">
                            <img src="assets/images/iaqa-badge.png" class="badges"></a>
                            <a href="http://www.bbb.org/connecticut/business-reviews/mold-and-mildew-remediation/giordano-restoration-in-uncasville-ct-87107886" target="_blank">
                            <img src="assets/images/bbb.jpg" class="badges">
                            </a>
                            <a href="https://www.epa.gov/lead/learn-about-lead" target="_blank">
                            <img src="assets/images/lead-safe.jpg" class="badges"></a>
                            <a href="https://www.facebook.com/Giordano-Restoration-170840389597581/" target="_blank">
                            <img src="assets/images/facebook-badge.png" class="badges wow flip"></a>
                        </div>
                    </div>
                </div><!--row-->
            </div><!--container-->
        </section><!--contact section end-->

        <div class="numbers-cta">
            <div class="container">
                <div class="col-sm-6 col-md-3  text-center">
                    <a href="tel:860-885-4892"><i class="ion-android-call"></i></a>
                    <h3><a href="tel:860-885-4892">860-885-4892</a></h3>
                </div>
                <div class="col-sm-6 col-md-3  text-center">
                    <a href="mailto:garygiordano@hotmail.com"><i class="ion-email"></i></a>
                    <h3><a href="mailto:garygiordano@hotmail.com"> garygiordano@hotmail.com </a></h3>
                </div>
                <div class="col-sm-6 col-md-3  text-center">
                    <i class="ion-location"></i>
                    <h3>2 Glen Rd, Uncasville CT 06382</h3>
                </div>
                <div class="col-sm-6 col-md-3  text-center">
                    <a href="https://www.facebook.com/Giordano-Restoration-170840389597581/" target="_blank"> <i class="fa fa-facebook wow flip"></i>
                    <h3>Follow us on Facebook</h3></a>
                </div>
            </div>

        </div>


        <footer class="footer">
            <div class="container text-center">

                <p>&copy; 2017. Powered by <a href="http://msrinteractive.com" target="_blank">MSR Interactive</a></p>
            </div>
        </footer><!--footer end-->

        <!--jquery-->

        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery-migrate.min.js" type="text/javascript"></script> 
        <script src="assets/js/moderniz.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="assets/js/parallax.min.js"></script>
        <script src="assets/js/tweetie.min.js" type="text/javascript"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.sticky.js" type="text/javascript"></script>  
        <script src="assets/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/js/wow.min.js" type="text/javascript"></script>
        <script src="assets/js/template.js" type="text/javascript"></script>
        <script src="assets/js/contact-form.js" type="text/javascript"></script>
        <script src="assets/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/js/cube-portfolio.js" type="text/javascript"></script>
        <script src="assets/js/pricing.js" type="text/javascript"></script>
        <!--master slider-->
        <script src="assets/master-slider/js/masterslider.min.js" type="text/javascript"></script>
        <script src="assets/js/masterslider-custom.js" type="text/javascript"></script>
        <!--pace plugin-->
        <script src="assets/js/pace.min.js" type="text/javascript"></script>
              <script src="assets/video-background/core.js"></script>
        <script src="assets/video-background/transition.js"></script>
        <script src="assets/video-background/background.js"></script>
        <!--testimonial carousel  -->
        <script src="assets/js/carousel.js" type="text/javascript"></script>
        <script>
              // Formstone Background - Video Background Settings
    $(".video-section").background({
        source: {
            poster: "assets/video-background/poster.png",
            mp4: "assets/video-background/vid.mp4"
        }

    });
        </script>

    </body>


</html>
