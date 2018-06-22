<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
        <?php $__env->startSection('title'); ?>
            | Welcome to Beacon Frontend
        <?php echo $__env->yieldSection(); ?>
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/lib.css')); ?>">
    <!--end of global css-->
    <!--page level css-->
<?php echo $__env->yieldContent('header_styles'); ?>
<!--end of page level css-->
</head>

<body>
<!-- Header Start -->
<header>
    <!-- Icon Section Start -->
    <div class="icon-section" style="background-color: #224777">
        <div class="container">
            <ul class="list-inline">
                <li>
                    <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li class="pull-right">
                    <ul class="list-inline icon-position">
                        <li>
                            <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                            <label class="hidden-xs"><a href="mailto:" class="text-white">sales@beaconinvestment.org</a></label>
                        </li>
                        <li>
                            <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                            <label class="hidden-xs"><a href="tel:" class="text-white">+92 334 5054117</a></label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- //Icon Section End -->
    <!-- Nav bar Start -->
    <nav class="navbar navbar-default container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"><i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="logo" class="logo_position">
                
            </a>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php echo (Request::is('/') ? 'class="active"' : ''); ?>><a href="<?php echo e(route('home')); ?>"> Home</a>
                </li>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

                
                
                <li <?php echo (Request::is('contact') ? 'class="active"' : ''); ?>><a href="<?php echo e(URL::to('contact')); ?>">Contact</a>
                </li>

                
                <?php if(Sentinel::guest()): ?>
                    <li><a href="<?php echo e(URL::to('login')); ?>">Login</a>
                    </li>
                    <li><a href="<?php echo e(URL::to('blog')); ?>">Blog</a>
                    </li>
                <?php else: ?>
                    <li <?php echo e((Request::is('my-account') ? 'class=active' : '')); ?>><a href="<?php echo e(URL::to('my-account')); ?>">My Account</a>
                    </li>
                    <li><a href="<?php echo e(URL::to('logout')); ?>">Logout</a>
                    </li>
                    <li><a href="<?php echo e(URL::to('blog')); ?>">Blog</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <!-- Nav bar End -->
</header>
<!-- //Header End -->

<!-- slider / breadcrumbs section -->
<?php echo $__env->yieldContent('top'); ?>

<!-- Content -->
<?php echo $__env->yieldContent('content'); ?>

<!-- Footer Section Start -->
<footer>
    <div class="container footer-text">
        <!-- About Us Section Start -->
        <div class="col-sm-4">
            <h4>About Us</h4>
            <p>
                Our Investment Company, located in Islamabad, Pakistan, is a full service real estate company that provides acquisition, development and finance expertise for both commercial and multi-family projects.
                <br>
                <br>
                The mission of Beacon Investment is to provide our investors with the most honest, reliable and efficient real estate services in Pakistan. We will strive to meet all of your real estate needs and provide you with exceptional loyalty.
            </p>
            <hr id="hr_border2">
            <h4 class="menu">Follow Us</h4>
            <ul class="list-inline">
                <li>
                    <a href="https://www.facebook.com/beaconinvestment"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/beaconinvest"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                    </a>
                </li>
                
                
                
                
                <li>
                    <a href="https://pk.linkedin.com/company/beacon-investment"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                    </a>
                </li>
                
                
                
                
            </ul>
        </div>
        <!-- //About us Section End -->
        <!-- Contact Section Start -->
        <div class="col-sm-4">
            <h4>Contact Us</h4>
            <ul class="list-unstyled">
                <li>Office # 26, Third Floor,</li>
                <li>Al-Hameed Mall,Markaz</li>
                <li>G-11, Islamabad, Pakistan</li>
                <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone:+92 334 5054117</li>
                
                <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="text-success" style="cursor: pointer;">
                        sales@beaconinvestment.org</span>
                </li>
                <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Skype:
                    <span class="text-success"  style="cursor: pointer;">Beacon</span>
                </li>
            </ul>
            <hr id="hr_border">
            <div class="news menu">
                <h4>News letter</h4>
                <p>subscribe to our newsletter and stay up to date with the latest news and deals</p>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="yourmail@mail.com" aria-describedby="basic-addon2">
                    <a href="#" class="btn btn-primary text-white" role="button">Subscribe</a>
                </div>
            </div>
        </div>
        <!-- //Contact Section End -->
        <!-- Recent post Section Start -->
        <div class="col-sm-4">
            <h4>We as a TEAM</h4>
            <div class="media">
                <div class="media-left media-top">
                    <a href="#">
                        <img class="media-object img-circle" src="<?php echo e(asset('assets/images/team-beacon-01-189x189.jpg')); ?>" alt="image">
                    </a>
                </div>
                <div class="media-body">
                    <p class="media-heading">Tariq Iqbal Malik
                    </p>
                    <p class="pull-left"><i>Co-founder & CEO</i></p>
                </div>
            </div>
            <div class="media">
                <div class="media-left media-top">
                    <a href="#">
                        <img class="media-object img-circle" src="<?php echo e(asset('assets/images/team-beacon-02-189x189.jpg')); ?>" alt="image">
                    </a>
                </div>
                <div class="media-body">
                    <p class="media-heading">Shahid Mehmood
                    </p>
                    <p class="pull-left"><i>Co-founder & CEO</i></p>
                </div>
            </div>
            <div class="media">
                <div class="media-left media-top">
                    <a href="#">
                        <img class="media-object img-circle" src="<?php echo e(asset('assets/images/team-beacon-04-189x189.jpg')); ?>" alt="image">
                    </a>
                </div>
                <div class="media-body">
                    <p class="media-heading">Sahban Tariq Malik
                    </p>
                    <p class="pull-left"><i>Chief Marketing Officer</i></p>
                </div>
            </div>
            <div class="media">
                <div class="media-left media-top">
                    <a href="#">
                        <img class="media-object img-circle" src="<?php echo e(asset('assets/images/team-beacon-03-189x189.jpg')); ?>" alt="image">
                    </a>
                </div>
                <div class="media-body">
                    <p class="media-heading">Zain Tariq
                    </p>
                    <p class="pull-left"><i>Chief Marketing Technology Officer</i></p>
                </div>
            </div>
        </div>
        <!-- //Recent Post Section End -->
    </div>
</footer>
<!-- //Footer Section End -->
<div class="copyright">
    <div class="container">
        <p>Copyright &copy; Beacon, 2018</p>
    </div>
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!--global js starts-->

<script src="<?php echo e(asset('assets/js/app.js')); ?>" type="text/javascript"></script>
<!--global js end-->
<!-- begin page level js -->
<?php echo $__env->yieldContent('footer_scripts'); ?>
<!-- end page level js -->
</body>

</html>
