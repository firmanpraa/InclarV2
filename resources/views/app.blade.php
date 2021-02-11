<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Home | INCLAR 2021</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta
            name="keywords"
            content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <link
            href="{{asset('public/inclar/libs/bootstrap/css/bootstrap.min.css')}}"
            rel="stylesheet"/>
        <link href="{{asset ('public/inclar/libs/pace/pace.css" rel="stylesheet')}}"/>
        <link
            href="{{asset ('public/inclar/libs/animate-css/animate.min.css')}}"
            rel="stylesheet"/>
        <link href="{{asset ('public/inclar/libs/iconmoon/style.css" rel="stylesheet')}}"/>

        <!-- LESS FILE <link href="css/style.less" rel="stylesheet/less" type="text/css"
        /> -->
        <!-- Extra CSS Libraries Start -->
        <link
            href="{{asset ('public/inclar/libs/owl-carousel/owl.carousel.css')}}"
            rel="stylesheet"
            type="text/css"/>
        <link
            href="{{asset ('public/inclar/libs/owl-carousel/owl.theme.css')}}"
            rel="stylesheet"
            type="text/css"/>
        <link
            href="{{asset ('public/inclar/libs/owl-carousel/owl.transitions.css')}}"
            rel="stylesheet"
            type="text/css"/>
        <link
            href="{{asset ('public/inclar/libs/jquery-magnific/magnific-popup.css')}}"
            rel="stylesheet"
            type="text/css"/>
        <link
            href="{{asset ('public/inclar/css/style.css')}}"
            rel="stylesheet"
            type="text/css"/>

        <link
            href="{{asset ('public/inclar/css/timeline.css')}}"
            rel="stylesheet"
            type="text/css"/>

        <link
            href="{{asset ('public/inclar/libs/iconmoon/style.css')}}"
            rel="stylesheet"
            type="text/css"/>
        <!-- Extra CSS Libraries End -->
        <!--[if lt IE 9]> <script
        src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script
        src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link
            rel="apple-touch-icon"
            sizes="57x57"
            href="{{asset ('public/inclar/img/icon/apple-icon-57x57.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="60x60"
            href="{{asset ('public/inclar/img/icon//apple-icon-60x60.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="72x72"
            href="{{asset ('public/inclar/img/icon//apple-icon-72x72.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="{{asset ('public/inclar/img/icon//apple-icon-76x76.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="114x114"
            href="{{asset ('public/inclar/img/icon//apple-icon-114x114.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="120x120"
            href="{{asset ('public/inclar/img/icon//apple-icon-120x120.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="144x144"
            href="{{asset ('public/inclar/img/icon//apple-icon-144x144.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="152x152"
            href="{{asset ('public/inclar/img/icon//apple-icon-152x152.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="{{asset ('public/inclar/img/icon//apple-icon-180x180.png')}}">
        <link
            rel="icon"
            type="image/png"
            sizes="192x192"
            href="{{asset ('public/inclar/img/icon//android-icon-192x192.png')}}">
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="{{asset ('public/inclar/img/icon//favicon-32x32.png')}}">
        <link
            rel="icon"
            type="image/png"
            sizes="96x96"
            href="{{asset ('public/inclar/img/icon//favicon-96x96.png')}}">
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{asset ('public/inclar/img/icon//favicon-16x16.png')}}">
        <!-- <link rel="manifest" href="{{asset ('/manifest.json')}}"> -->
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff"> 
    </head>

    <body class="">
        <div id="wrapper">
            <header>
             <nav class="navbar navbar-default {{request()->is('/') ? 'non-bg' : ''}}" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button
                                type="button"
                                class="navbar-toggle"
                                data-toggle="collapse"
                                data-target="#main-navigation">
                                <span class="icon-navicon"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">
                                <img
                                    src="{{asset ('public/inclar/img/inclar1.png')}}"
                                    data-dark-src="{{asset ('public/inclar/img/inclar1.png')}}"
                                    alt="Coco Frontend Template"
                                    class="logo">
                            </a>
                        </div>
                      <div class="collapse navbar-collapse" id="main-navigation">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="{{route('index')}}" class="{{request()->is('/') ? 'active':'' }}">
                                        <h5>
                                            <strong>HOME</strong>
                                        </h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('speakers')}}" class="{{ request()->is('speakers*') ? 'active' : '' }}">
                                        <h5>
                                            <strong>SPEAKERS</strong>
                                        </h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('publication')}}" class="{{ request()->is('publication*') ? 'active' : '' }}">
                                        <h5>
                                            <strong>PUBLICATION</strong>
                                        </h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('committee')}}" class="{{ request()->is('committee*') ? 'active' : '' }}">
                                        <h5>
                                            <strong>COMMITTEE</strong>
                                        </h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('venue')}}" class="{{ request()->is('venue*') ? 'active' : '' }}">
                                        <h5>
                                            <strong>VENUE</strong>
                                        </h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                @yield('header')
                    </header>   
                      @yield('body')                   
                        <footer>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h4>QUICK LINKS</h4>
                                        <hr>
                                        <li style="list-style: none;">
                                            <a href="{{route('speakers')}}">Speakers</a>
                                        </li>
                                        
                                        <li style="list-style: none;">
                                            <a href="{{route('publication')}}">Publication</a>
                                        </li>
                                        <li style="list-style: none;">
                                            <a href="{{route('committee')}}">Committee</a>
                                        </li>
                                        <li style="list-style: none;">
                                            <a href="{{route('venue')}}">Venue</a>
                                        </li>
                                    
                                    </div>

                                    <div class="col-sm-4">
                                        <h4>CONTACT US</h4>
                                        <hr>
                                        <ul class="list-unstyled company-info" style="color: white">
                                            <li>
                                            <i class="icon-phone-square"></i>
                                                <h5 style="color:white">Ratri Novita Erdianti</h5>
                                                <a href="https://wa.me/628121772315" target="blank"><strong>08121772315</strong></a>
            
                                            </li>
                                            <li>
                                            <i class="icon-phone-square"></i>
                                            <h5 style="color:white">Muhammad Lutfi </h5>
                                                <a href="https://wa.me/6285855123238" target="blank"><strong>085855123238</strong></a>
            
                                            </li>
                                            <li>
                                                <i class="icon-envelope"></i>
                                                <a href="mailto:inclar@umm.ac.id"><strong>inclar@umm.ac.id</strong></a>
                                            </li>
                                            <li>
                                            <i class="icon-building"></i>Law Faculty, University of Muhammadiyah Malang</li>
                                            <li>
                                            <i class="icon-map-marker"></i>Jl. Raya Tlogomas No. 246 Malang, East Java, Indonesia Postal Code 65144</li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-4">
                                        <h4>PRESENTED BY</h4>
                                        <hr>
                                        <a href="http://www.umm.ac.id">
                                            <img
                                                style=" height: 20%;width: 20%; margin-bottom:4%; padding-top: 4%; position: absolutes;"
                                                title="University of Muhammadiyah Malang"
                                                src="{{asset ('public/inclar/images/logo/logoo.png')}}"
                                                data-animate="fadeInRight"
                                                class="class">
                                        </a>
                                        <a href="http://lppi.umm.ac.id">
                                            <img
                                                style=" height: 20%;width: 20%; margin-bottom:4%; padding-top: 4%; position: absolutes;"
                                                title="LPPI UMM"
                                                src="{{asset ('public/inclar/img/lppi.png')}}"
                                                data-animate="fadeInRight"
                                                class="class">
                                        </a>
                                        <a href="http://inclar.umm.ac.id">
                                            <img
                                                style=" height: 20%;width: 20%; margin-bottom:4%; padding-top: 4%; position: absolutes;"
                                                title="INCLAR"
                                                src="{{asset ('public/inclar/img/inclar2.png')}}"
                                                data-animate="fadeInRight"
                                                class="class">
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Copyright © 2021 by
                                            <a href="http://lppi.umm.ac.id" target="_blank">LPPI UMM</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <a class="tothetop" href="javascript:;">
                            <i class="icon-angle-up"></i>
                        </a>
                    </div>

                    <script>
                        var resizefunc = [];
                    </script>
                    <script src="{{asset ('public/inclar/libs/less-js/less-1.7.5.min.js')}}"></script>
                    <script src="{{asset ('public/inclar/libs/pace/pace.min.js')}}"></script>
                    <script src="{{asset ('public/inclar/libs/jquery/jquery-1.11.1.min.js')}}"></script>
                    <script src="{{asset ('public/inclar/libs/bootstrap/js/bootstrap.min.js')}}"></script>
                    <script src="{{asset ('public/inclar/libs/jquery-browser/jquery.browser.min.js')}}"></script>
                    <script src="{{asset ('public/inclar/libs/fastclick/fastclick.js')}}"></script>
                    <script src="{{asset ('public/inclar/libs/stellarjs/jquery.stellar.min.js')}}"></script>
                    <script src="{{asset ('public/inclar/libs/jquery-appear/jquery.appear.js')}}"></script>
                    <script src="{{asset ('public/inclar/js/init.js')}}"></script>
                    <script src="{{asset ('public/inclar/libs/owl-carousel/owl.carousel.min.js')}}"></script>
                    <script
                        src="{{asset ('public/inclar/libs/jquery-magnific/jquery.magnific-popup.min.js')}}"></script>
                    <script src="{{asset ('public/inclar/js/pages/index.js')}}"></script>
                    <script type="text/javascript">
                    </script>
                </body>

            </html>