<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]>
<html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Автоперална Клип Плус">
    <meta itemprop="description" content="Најдобрата нега за вашиот автомобил">
    <!-- <meta itemprop="image" content="">-->


    <!-- Open Graph data -->
    <!--  <meta property="fb:app_id" content=""/> -->
    <meta property="og:locale" content="mk_MK"/>
    <meta property="og:title" content="Автоперална Клип Плус"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://KlipPlus.mk"/>
    <!--  <meta property="og:image" content="https://pingdevs.com/images/brand/pingdevs_main.png"/> -->
    <meta property="og:description" content="Најдобрата нега за вашиот автомобил"/>
    <meta property="og:site_name" content="KlipPlus"/>

    <meta charset="utf-8">
    <title>{{$settings->title}}</title>
    <meta name="description" content="Најдобрата нега за вашиот автомобил">
    <meta name="author" content="">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/logo/originals/{{$settings->logo}}">

    <!-- Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="/frontend/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="/frontend/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="/frontend/fonts/fontello/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="/frontend/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/frontend/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
    <link href="/frontend/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
    <link href="/frontend/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
    <link href="/frontend/css/animations.css" rel="stylesheet">
    <link href="/frontend/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/frontend/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/frontend/plugins/hover/hover-min.css" rel="stylesheet">

    <!-- The Project's core CSS file -->
    <!-- Use css/rtl_style.css for RTL version -->
    <link href="/frontend/css/style.css" rel="stylesheet">
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Lato -->
    <!-- Used font for headings: Roboto Slab -->
    <!-- Use css/rtl_typography-scheme-2.css for RTL version -->
    <link href="/frontend/css/typography-scheme-2.css" rel="stylesheet">
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="/frontend/css/skins/brown.css" rel="stylesheet">


    <!-- Custom css -->
    <link href="/frontend/css/custom.css" rel="stylesheet">
</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class="no-trans front-page transparent-header gradient-background-header ">


<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

    <!-- header-container start -->
    <div class="header-container">

        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "full-width": mandatory class for the full-width menu layout -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        <header class="header  fixed fixed-before  dark clearfix">

            <div class="container">
                <div class="row">
                    <div class="col-md-3  hidden-xs ">
                        <!-- header-first start -->
                        <!-- ================ -->
                        <div class="header-first clearfix">

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <img id="logo_img" src="/assets/img/logo/thumbnails/{{$settings->logo}}" alt=""
                                     style="max-height: 32px;max-widows: 32px;">
                            </div>

                            <!-- name-and-slogan -->

                        </div>
                        <!-- header-first end -->

                    </div>
                    <div class="col-md-9">

                        <!-- header-second start -->
                        <!-- ================ -->
                        <div class="header-second clearfix">

                            <!-- main-navigation start -->
                            <!-- classes: -->
                            <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                            <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                            <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                            <!-- ================ -->
                            <div class="main-navigation  animated with-dropdown-buttons">

                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">

                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                    data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>

                                            <!-- header-first start -->
                                            <!-- ================ -->
                                            <div class="header-first clearfix  visible-xs ">

                                                <!-- logo -->
                                                <div id="logo-mobile" class="logo">
                                                    <img id="logo-img-mobile"
                                                         src="/assets/img/logo/thumbnails/{{$settings->logo}}" alt="">
                                                </div>

                                                <!-- name-and-slogan -->

                                            </div>
                                            <!-- header-first end -->

                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                            <!-- main-menu -->
                                            <ul class="nav navbar-nav pull-right">

                                                <!-- mega-menu start -->

                                                <li class="nav-item g-mx-30--lg g-mb-7 g-mb-0--lg">
                                                    <a href="#about" class="nav-link p-0">За нас</a>
                                                </li>
                                                <li class="nav-item g-mx-30--lg g-mb-7 g-mb-0--lg">
                                                    <a href="#services" class="nav-link p-0">Услуги</a>
                                                </li>
                                                <li class="nav-item g-mx-30--lg g-mb-7 g-mb-0--lg">
                                                    <a href="#products" class="nav-link p-0">Продукти</a>
                                                </li>
                                                <!-- header buttons -->
                                                <div class="header-dropdown-buttons">
                                                    <!-- ahref?-->
                                                </div>
                                                <!-- header buttons end-->

                                        </div>

                                    </div>
                                </nav>
                                <!-- navbar end -->

                            </div>
                            <!-- main-navigation end -->
                        </div>
                        <!-- header-second end -->

                    </div>
                </div>
            </div>

        </header>
        <!-- header end -->
    </div>
    <!-- header-container end -->

    <!-- banner start -->
    <!-- ================ -->
    @yield('slider')
    <div id="page-start"></div>

    <!-- section start -->
    <!-- ================ -->
@yield('about')
<!-- section end -->

    <!-- section start -->
    <!-- ================ -->
@yield('whyus')
<!-- section end -->


@yield('services')

<!-- footer top start -->
    <!-- ================ -->
@yield('introproducts')

@yield('products')

@yield('intromap')

@yield('map')

<!-- footer top end -->
    <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
    <!-- ================ -->
    <footer id="footer" class="clearfix ">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">

            @yield('contact')

            <div class="container">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <i class="footer-content text-center padding-ver-clear">
                                <div class="logo-footer"><img id="logo-footer" class="center-block"
                                                              style="max-height: 64px;opacity: 70%;"
                                                              src="/assets/img/logo/originals/{{$settings->logo}}"
                                                              alt=""></div>
                                <p><!-- footer text--></p>
                                <ul class="list-inline mb-20">
                                    <li>
                                        <i class="text-default fa fa-map-marker pr-5"></i>{{$settings->address}}
                                    </li>
                                    <li>
                                        <i class="text-default fa fa-phone pl-10 pr-5"></i>{{$settings->phone}}</br>
                                        <i class="text-default fa fa-phone pl-10 pr-5"></i>{{$settings->mobilephone}}
                                    </li>
                                    <li>
                                        <i class="text-default fa fa-envelope-o pl-10 pr-5"></i>{{$settings->email}}
                                    </li>
                                </ul>
                                <ul class="social-links circle animated-effect-1 margin-clear">
                                    <li class="facebook"><a target="_blank"
                                                            href="{{$settings->facebook}}"><i
                                                class="fa fa-facebook"></i></a></li>
                                </ul>
                                <div class="separator"></div>
                                <p class="text-center margin-clear">Copyright © Klip Plus - All Rights
                                    Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- .footer end -->

</footer>
<!-- footer end -->

</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="/frontend/plugins/jquery.min.js"></script>
<script type="text/javascript" src="/frontend/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="/frontend/plugins/modernizr.js"></script>
<script type="text/javascript" src="/frontend/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript"
        src="/frontend/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="/frontend/plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="/frontend/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="/frontend/plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="/frontend/plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="/frontend/plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="/frontend/plugins/jquery.validate.js"></script>
<!-- Background Video -->
<script src="/frontend/plugins/vide/jquery.vide.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="/frontend/plugins/owlcarousel2/owl.carousel.min.js"></script>
<!-- SmoothScroll javascript -->
<script type="text/javascript" src="/frontend/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="/frontend/plugins/SmoothScroll.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="/frontend/js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="/frontend/js/custom.js"></script>

<!-- Google Maps javascript -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyBgqGqpGPtQUqx48lRRdbTQ8lKoxmNdVDA"></script>
<script type="text/javascript" src="/frontend/js/google.map.config.js"></script>

</body>
</html>
