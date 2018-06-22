@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Home
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">

    <!--end of page level css-->
@stop


@section('top')
    <!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="{{ asset('assets/images/Slide_Beacon.jpg') }}" alt="slider-image">
        </div>

    </div>
    <!-- //Carousel End -->
@stop


@section('content')
    <div class="container">
        <section class="purchas-main">
            <div class="container bg-border wow pulse" data-wow-duration="2.5s">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="row">
                            <div class="col-md-10">
                                <p>
                                    In view of growing housing demand in the twin cities, FDHL intends to build a quality housing project on M2 Motorway near New Islamabad International Airport falling on the eastern route of CPEC. Capital Smart City Islamabad aims to become first ever smart city in Pakistan and a model for sustainable development.
                                    <br><br>
                                    We are the official dealers of Capital Smart city sales and purchase of plots villas and farm houses in the wonderfull and high tech housing ever built in islamabad and rawalpindi the most exclusive and most perfect way to invest in Capital Smart City is through Beacon Investment.Capital Smart City is one of the spectacular way to invest in the peacefull future of your childeren into the modren age.Capital Smart City is the best way to invest in futueristic housing here in Islamabad and Rawalpindi.Capital Smart City will no doubt be the most advanced hosing where technology and people will come together as one unit.
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/C8XxbVsxqoo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Service Section Start-->
        <div class="row">
            <!-- Responsive Section Start -->
            <div class="text-center">
                <h3 class="border-primary"><span class="heading_border bg-primary">Our Services</span></h3>
            </div>
            <div class="col-sm-6 col-md-3 wow bounceInLeft" data-wow-duration="3.5s">
                <div class="box">
                    <div class="box-icon">
                        <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </div>
                    <div class="info">
                        <h3 class="primary text-center">Investments</h3>
                        <p>Here at beacon investments we manage your investments and care for your capital as well as manage all your capital with extreme care and resposibility.</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Responsive Section End -->
            <!-- Easy to Use Section Start -->
            <div class="col-sm-6 col-md-3 wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.4s">
                <!-- Box Start -->
                <div class="box">
                    <div class="box-icon box-icon1">
                        <i class="livicon icon1" data-name="gears" data-size="55" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                    </div>
                    <div class="info">
                        <h3 class="primary text-center">Sales And Trading</h3>
                        <p>Our sales Department works day and night to work for betterment and sales of our product .We have the most professsional sales team in all of islamabad and rawlapindi.</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Easy to Use Section End -->
            <!-- Clean Design Section Start -->
            <div class="col-sm-6 col-md-3 wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.8s">
                <div class="box">
                    <div class="box-icon box-icon2">
                        <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#f89a14" data-hc="#f89a14"></i>
                    </div>
                    <div class="info">
                        <h3 class="primary text-center">Construction</h3>
                        <p>Our expertise are to provide a complete plate form to our investers weather they are of Capital Smart City or others for Construction of there dream home.</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Clean Design Section End -->
            <!-- 20+ Page Section Start -->
            <div class="col-sm-6 col-md-3 wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.2s">
                <div class="box">
                    <div class="box-icon box-icon3">
                        <i class="livicon icon1" data-name="folder-open" data-size="55" data-loop="true" data-c="#FFD43C" data-hc="#FFD43C"></i>
                    </div>
                    <div class="info">
                        <h3 class="primary text-center">Real Estate</h3>
                        <p>Beacon investment provides services for real estate development purchase and dealing we provide a highly professional means to buy and sell your real estate properties.</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //20+ Page Section End -->
        </div>
        <!-- //Services Section End -->
    </div>
    <!-- Layout Section Start -->
    <section class="feature-main">
        <div class="container">
            <div class="row">

                <div class="col-md-9 col-sm-9 col-xs-12 wow zoomIn" data-wow-duration="2s">
                    <div class="layout-image">
                        <img src="{{ asset('assets/images/capital-smart-city-islamabad-1505910349-image-2-actual.jpg') }}" alt="layout" class="img-responsive" />
                    </div>
                </div>
                <div style="margin-top:-50px;" class="col-md-3 col-sm-3 col-xs-12 wow lightSpeedIn" data-wow-duration="2s">
                    <ul class="list-unstyled pull-right text-right layout-styl">
                        <li><img src="{{ asset('assets/images/Capital1.jpg') }}" alt="layout" class="img-responsive" /></li>
                        <li><img src="{{ asset('assets/images/Capital2.jpg') }}" alt="layout" class="img-responsive" /></li>
                        <li><img src="{{ asset('assets/images/Capital3.jpg') }}" alt="layout" class="img-responsive" /></li>
                        {{--<li><img src="{{ asset('assets/images/Capital4.jpg') }}" alt="layout" class="img-responsive" /></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //Layout Section Start -->
    <!-- Accordions Section End -->
    <div class="container">
    {{--<div class="row">--}}
    {{--<!-- Accordions Start -->--}}
    {{--<div class="text-center wow flash" data-wow-duration="3s">--}}
    {{--<h3 class="border-success"><span class="heading_border bg-success">Accordions</span></h3>--}}
    {{--<label class=" text-center"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label>--}}
    {{--</div>--}}
    {{--<!-- Accordions End -->--}}
    {{--<div class="col-md-6 col-sm-12 wow slideInLeft" data-wow-duration="1.5s">--}}
    {{--<!-- Tabbable-Panel Start -->--}}
    {{--<div class="tabbable-panel">--}}
    {{--<!-- Tabbablw-line Start -->--}}
    {{--<div class="tabbable-line">--}}
    {{--<!-- Nav Nav-tabs Start -->--}}
    {{--<ul class="nav nav-tabs ">--}}
    {{--<li class="active">--}}
    {{--<a href="#tab_default_1" data-toggle="tab">--}}
    {{--Web </a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#tab_default_2" data-toggle="tab">--}}
    {{--Html 5 </a>--}}
    {{--</li>--}}
    {{--<li class="clear_both">--}}
    {{--<a href="#tab_default_3" data-toggle="tab">--}}
    {{--CSS 3 </a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#tab_default_4" data-toggle="tab">--}}
    {{--Bootstrap </a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--<!-- //Nav Nav-tabs End -->--}}
    {{--<!-- Tab-content Start -->--}}
    {{--<div class="tab-content">--}}
    {{--<div class="tab-pane active" id="tab_default_1">--}}
    {{--<div class="media">--}}
    {{--<div class="media-left tab col-sm-12">--}}
    {{--<a href="#">--}}
    {{--<img class="media-object img-responsive" src="{{ asset('assets/images/authors/img1.jpg') }}" alt="image">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<p>--}}
    {{--Metrics business-to-business beta bootstrapping virality graphical user interface infrastructure conversion launch party long tail. Strategy virality validation bandwidth creative low hanging fruit long tail startup gen-z business plan technology. Strategy termsheet venture stealth non-disclosure agreement accelerator research & development scrum project product management freemium infographic business plan.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<div class="tab-pane" id="tab_default_2">--}}
    {{--<div class="media">--}}
    {{--<div class="media-left media-middle tab col-sm-12">--}}
    {{--<a href="#">--}}
    {{--<img class="media-object img-responsive" src="{{ asset('assets/images/authors/img2.jpg') }}" alt="image">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<p>--}}
    {{--Branding iteration conversion market sales advisor holy grail entrepreneur backing. Gen-z non-disclosure agreement holy grail business-to-consumer disruptive deployment marketing channels seed money seed round ramen pivot social proof. Venture creative metrics focus A/B testing crowdfunding. IPhone scrum project user experience freemium interaction design long tail stealth ownership hackathon crowdfunding investor.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<div class="tab-pane" id="tab_default_3">--}}
    {{--<div class="media">--}}
    {{--<div class="media-left media-middle tab col-sm-12">--}}
    {{--<a href="#">--}}
    {{--<img class="media-object img-responsive" src="{{ asset('assets/images/authors/img3.jpg') }}" alt="image">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<p>--}}
    {{--Beta analytics startup direct mailing leverage learning curve www.discoverartisans.com business-to-consumer. IPad metrics channels pivot deployment business plan android burn rate hackathon vesting period research & development launch party user experience. Seed round freemium value proposition learning curve series A financing funding research & development crowdsource.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<div class="tab-pane" id="tab_default_4">--}}
    {{--<div class="media">--}}
    {{--<div class="media-left media-middle tab col-sm-12">--}}
    {{--<a href="#">--}}
    {{--<img class="media-object img-responsive" src="{{ asset('assets/images/authors/img4.jpg') }}" alt="image">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<p>--}}
    {{--Paradigm shift twitter pitch research & development venture. Startup partnership www.discoverartisans.com supply chain crowdsource hackathon metrics paradigm shift interaction design influencer holy grail first mover advantage ramen validation. User experience founders burn rate learning curve infographic leverage gen-z supply chain first mover advantage.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Tab-content End -->--}}
    {{--</div>--}}
    {{--<!-- //Tabbablw-line End -->--}}
    {{--</div>--}}
    {{--<!-- Tabbable_panel End -->--}}
    {{--</div>--}}
    {{--<div class="col-md-6 col-sm-12 wow slideInRight" data-wow-duration="3s">--}}
    {{--<!-- Panel-group Start -->--}}
    {{--<div class="panel-group" id="accordion">--}}
    {{--<!-- Panel Panel-default Start -->--}}
    {{--<div class="panel panel-default">--}}
    {{--<!-- Panel-heading Start -->--}}
    {{--<div class="panel-heading text_bg">--}}
    {{--<h4 class="panel-title">--}}
    {{--<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">--}}
    {{--<span class=" glyphicon glyphicon-minus success"></span>--}}
    {{--<span class="success">Why Choose Us</span></a>--}}
    {{--</h4>--}}
    {{--</div>--}}
    {{--<!-- //Panel-heading End -->--}}
    {{--<!-- Collapseone Start -->--}}
    {{--<div id="collapseOne" class="panel-collapse collapse in">--}}
    {{--<div class="panel-body">--}}
    {{--<p>In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Come and knock on our door. We've been waiting for you. Where the kisses are hers and hers and his. Three's company too. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own. One two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated? Till the one day when the lady met this fellow and they knew it was much more than a hunch. Baby if you've ever wondered.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Collapseone End -->--}}
    {{--</div>--}}
    {{--<!-- //Panel Panel-default End -->--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading text_bg">--}}
    {{--<h4 class="panel-title">--}}
    {{--<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">--}}
    {{--<span class=" glyphicon glyphicon-plus success"></span>--}}
    {{--<span class="success">Why Choose Us</span>--}}
    {{--</a>--}}
    {{--</h4>--}}
    {{--</div>--}}
    {{--<div id="collapseTwo" class="panel-collapse collapse">--}}
    {{--<div class="panel-body">--}}
    {{--<p>--}}
    {{--In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Come and knock on our door. We've been waiting for you. Where the kisses are hers and hers and his. Three's company too. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own. One two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated? Till the one day when the lady met this fellow and they knew it was much more than a hunch. Baby if you've ever wondered.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading text_bg">--}}
    {{--<h4 class="panel-title">--}}
    {{--<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">--}}
    {{--<span class=" glyphicon glyphicon-plus success"></span>--}}
    {{--<span class="success">Why Choose Us</span></a>--}}
    {{--</h4>--}}
    {{--</div>--}}
    {{--<div id="collapseThree" class="panel-collapse collapse">--}}
    {{--<div class="panel-body">--}}
    {{--<p>--}}
    {{--In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Come and knock on our door. We've been waiting for you. Where the kisses are hers and hers and his. Three's company too. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own. One two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated? Till the one day when the lady met this fellow and they knew it was much more than a hunch. Baby if you've ever wondered.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- //Panle-group End -->--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- //Accordions Section End -->
        <!-- Our Team Start -->
        <div class="row text-center">
            <h3 class=" border-primary"><span class="heading_border bg-primary">Our Team</span></h3>
            <div class="col-md-3 col-sm-5 profile wow fadeInLeft"  data-wow-duration="3s" data-wow-delay="0.5s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('assets/images/team-beacon-01-189x189.jpg') }}" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>Tariq Iqbal Malik</b>
                        <p class="text-center"> Chief Executive Officer</p>
                        <div class="divide">

                            <a href="#">
                                <a href="tel:" class="text-black">+92 (333) 972-2217</a>
                            </a>
                            <a href="#">
                                <a href="mailto:" class="text-black">beacon.tariqmalik@gmail.com</a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-5 profile wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('assets/images/team-beacon-02-189x189.jpg') }}" alt="team-image">
                    <div class="caption">
                        <b>Shahid Mehmood </b>
                        <p class="text-center"> Chief Executive Officer</p>
                        <div class="divide">

                            <a href="#">
                                <a href="tel:" class="text-black">+92 (331) 995-5066</a>
                            </a>
                            <a href="#">
                                <a href="mailto:" class="text-black">beacon.shahidmehmood@gmail.com</a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-5 profile wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.5s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('assets/images/team-beacon-04-189x189.jpg') }}" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>Sehban Tariq</b>
                        <p class="text-center"> Chief Marketing Officer </p>
                        <div class="divide">

                            <a href="#">
                                <a href="tel:" class="text-black">+92 (334) 505-4117</a>
                            </a>
                            <a href="#">
                                <a href="mailto:" class="text-black">beacon.sehbantariq@gmail.com</a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-5 profile wow fadeInRight" data-wow-duration="3s" data-wow-delay="0.5s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('assets/images/team-beacon-03-189x189.jpg') }}" alt="team-image">
                    <div class="caption">
                        <b>Zain Tariq</b>
                        <p class="text-center"> Chief Marketing Technology Officer </p>
                        <div class="divide">

                            <a href="#">
                                <a href="tel:" class="text-black">+92 (333) 973-3317</a>
                            </a>
                            <a href="#">
                                <a href="mailto:" class="text-black">zaintariq163@gmail.com</a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Our Team End -->
        <!-- What we are section Start -->
        <div class="row">
            <!-- What we are Start -->
            <div class="col-md-6 col-sm-6 wow zoomInLeft" data-wow-duration="3s">
                <div class="text-left">
                    <div>
                        <h4 class="border-primary"><span class="heading_border bg-primary">What We Are</span></h4>
                    </div>
                </div>
                <img src="{{ asset('assets/images/Capital-Smart-City-Islamabad.jpg') }}" alt="image_12" class="img-responsive">
                <p>
                    At beacon invest ments in a very professional and friendly enviroment we deal with real estate investments and dealings of plots and investers intrest regarding the capital smart city .Capital Smart city is an extraordinary and high tech realestate venture we deal with all kinds of capital smart city investmentsall people and investors interested in capital smart city come to us for investment guide and real estate investment advice.
                </p>
                <p class="text-right primary"><a href="#">Read more</a>
                </p>
            </div>
            <!-- //What we are End -->
            <!-- About Us Start -->
            <div class="col-md-6 col-sm-6 wow zoomInRight" data-wow-duration="3s">
                <div class="text-left">
                    <div>
                        <h4 class="border-primary"><span class="heading_border bg-primary">About Us</span></h4>
                    </div>
                </div>
                <img src="{{ asset('assets/images/biex2.jpg') }}" alt="image_11" class="img-responsive">
                <p>
                    Our Investment Company, located in Islamabad, Pakistan, is a full service real estate company that provides acquisition, development and finance expertise for both commercial and multi-family projects.
                    The mission of Beacon Investment is to provide our investors with the most honest, reliable and efficient real estate services in Pakistan. We will strive to meet all of your real estate needs and provide you with exceptional loyalty.
                </p>
                <p class="text-right primary"><a href="#">Read more</a>
            </div>
            <!-- //About Us End -->
        </div>
        <!-- //What we are section End -->
        <!-- Testimonial Start -->
    {{--<div class="row">--}}
    {{--<!-- Testimonial Section -->--}}
    {{--<div class="text-center">--}}
    {{--<h3 class="border-primary"><span class="heading_border bg-primary">Testimonials</span></h3>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 wow bounceInLeft" data-wow-duration="3s">--}}
    {{--<div class="author">--}}
    {{--<img src="{{ asset('assets/images/authors/avatar3.jpg') }}" alt="avatar3" class="img-responsive img-circle pull-left">--}}
    {{--<p class="text-right">--}}
    {{--Tonny Jakson--}}
    {{--<br>--}}
    {{--<small class="text-right">Themeforest.net</small>--}}
    {{--</p>--}}
    {{--<p>--}}
    {{--<label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 wow bounceIn" data-wow-duration="3s">--}}
    {{--<div class="author">--}}
    {{--<img src="{{ asset('assets/images/authors/avatar2.jpg') }}" alt="avatar2" class="img-responsive img-circle pull-left">--}}
    {{--<p class="text-right">--}}
    {{--Tonny Jakson--}}
    {{--<br>--}}
    {{--<small class="text-right">Themeforest.net</small>--}}
    {{--</p>--}}
    {{--<p>--}}
    {{--<label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 wow bounceInRight" data-wow-duration="3s">--}}
    {{--<div class="author">--}}
    {{--<img src="{{ asset('assets/images/authors/avatar4.jpg') }}" alt="avatar4" class="img-responsive img-circle pull-left">--}}
    {{--<p class="text-right">--}}
    {{--Tonny Jakson--}}
    {{--<br>--}}
    {{--<small class="text-right">Themeforest.net</small>--}}
    {{--</p>--}}
    {{--<p>--}}
    {{--<label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Testimonial Section End -->--}}
    {{--</div>--}}
    <!-- Testimonial End -->
        <!-- Features Start -->
        <div class="row features">
            <div class="text-center">
                <div class="text-center">
                    <h3 class=" border-primary"><span class="heading_border bg-primary">Services</span></h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
                <div>
                    <a href="#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#25a3d8" data-hc="#25a3d8"></i></a>
                    <h4>Real Estate</h4>
                </div>
                <div>
                    <p>
                        <label>"Beacon Investment is the best real estate investment firm in islamabad we deal in all kinds of real estate and property dealings throghout islamabad and rawalpindi"</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#ef8424 " data-hc="#ef8424 "></i>
                    </a>
                    <h4>Best Sales Team</h4>
                    <p>
                        <label>"At Beacon Investment we have the best sales team to deal with all kinds of property sales and to provide the best sales services to our clients"</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.5s">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </a>
                    <h4>Trustworthy Team</h4>
                    <p>
                        <label>"We at beacon invesment are working very hard for our clients and there satisfaction and our team is the most trustworthy individuals"</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#1360b3 " data-hc="#1360b3 "></i>
                    </a>
                    <h4>Online CMS </h4>
                    <p>
                        <label>"We have online systems availeble for our Clients and investers so that they can check on there payment plans and schedules online any where"</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#FFD43C" data-hc="#FFD43C"></i>
                    </a>
                    <h4>IT Professionals</h4>
                    <p>
                        <label>"Beacon investment has the best IT professionals working day and night for our investors to provide online services for payment schedules and payment plans"</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#91d659 " data-hc="#91d659 "></i>
                    </a>
                    <h4>Capital Smart City</h4>
                    <p>
                        <label>"Beacon investment team is hard at work for the investors of capital smart city .capital smart city is one of our priorities we are hard at work for investors of capital smart city "</label>
                    </p>
                </div>
            </div>
        </div>
        <!-- //Features End -->
        <!-- Our Skills Start -->

        {{--<div class="text-center marbtm10">--}}
        {{--<h3 class="border-danger"><span class="heading_border bg-danger">Our Skills</span></h3>--}}
        {{--</div>--}}
    </div>
    {{--<div class="sliders">--}}
    {{--<!-- Our skill Section start -->--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3.5s">--}}
    {{--<div class="text-center center-block">--}}
    {{--<div id="myStat3" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>--}}
    {{--<strong class="success">Bootstrap</strong>--}}
    {{--</div>--}}
    {{--<span>Lorem Ipsum is simply dummy text of the printing and type setting industry</span>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="0.8s">--}}
    {{--<div class="text-center center-block">--}}
    {{--<div id="myStat4" class="center-block" data-startdegree="0" data-dimension="150" data-text="60%" data-width="4" data-fontsize="28" data-percent="60" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>--}}
    {{--<strong class="success">Jquery</strong>--}}
    {{--</div>--}}
    {{--<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="1.2s">--}}
    {{--<div class="text-center center-block">--}}
    {{--<div id="myStat5" class="center-block" data-startdegree="0" data-dimension="150" data-text="100%" data-width="4" data-fontsize="28" data-percent="100" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>--}}
    {{--<strong class="success">Html 5</strong>--}}
    {{--</div>--}}
    {{--<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="1.8s">--}}
    {{--<div class="text-center center-block">--}}
    {{--<div id="myStat6" class="center-block" data-startdegree="0" data-dimension="150" data-text="70%" data-width="4" data-fontsize="28" data-percent="70" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>--}}
    {{--<strong class="success">CSS 3</strong>--}}
    {{--</div>--}}
    {{--<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Our skills Section End -->--}}
    {{--</div>--}}
    {{--<!-- //Our Skills End -->--}}
    {{--</div>--}}
    <!-- //Container End -->
@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <!--page level js ends-->
@stop