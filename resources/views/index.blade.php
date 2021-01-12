@extends('app')
@section('header')
<section class="main-slider fullsize" data-stellar-background-ratio="0.5">
                    <div
                        class="main-slider fullsize"
                        data-stellar-background-ratio="0.5"
                        style="background-image: url( {{asset ('public/inclar/images/slideshow/slider.png)')}}"
                        id="main-slider">
                        <div class="row">
                            <div class="slider-caption">
                                <div
                                    class="col-sm-12"
                                    style="width: 100%; padding-right: 0px; margin-bottom: 0px;">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <img
                                            style=" height: 150px;width: 150px; margin-bottom:0; position: absolutes;"
                                            src="{{asset ('public/inclar/img/inclar3.png')}}"
                                            data-animate="fadeInRight"
                                            class="class">
                                        <h2
                                            data-animate="fadeInDown"
                                            data-delay="1000"
                                            data-duration="2s"
                                            style="color:white; text-shadow: #282828;  margin-bottom: 0;">2<sup>nd</sup>
                                            International Conference on Law Reform
                                        </h2>
                                        <h1
                                            data-animate="fadeInDown"
                                            data-delay="1000"
                                            data-duration="2s"
                                            style="color:white; text-shadow: #282828; margin: 0;">
                                            <b>INCLAR</b>
                                            <hr style=" width: 50%;">
                                        </h1>
                                        <div class=" col-sm-12" style="width: 100%; margin: 0;">

                                            <h2
                                                data-animate="fadeInUp"
                                                data-delay="1000"
                                                data-duration="2s"
                                                style="color:white; text-shadow: #282828; margin: 0; ">Sept 23-24<sup>th</sup>, 2021</h2>
                                   </div>

                                        <br>
                                        <div class=" col-sm-12" style="width: 100%; margin: 0;">
                                            <h2
                                                data-animate="fadeInDown"
                                                data-delay="1000"
                                                data-duration="2s"
                                                style="color:white">
                                                <strong>CALL FOR PAPERS</strong>
                                            </h2>
                                            <a
                                                id=""
                                                data-animate="fadeInUp"
                                                data-duration="2s"
                                                data-delay="1300"
                                                href="{{route('registration')}}"
                                                class="btn-primary, btn btn-lg"
                                                style="background-color:#F2B705; box-shadow: #282828;">REGISTER NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
@endsection
@section('body')
<section class="features-block">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1" data-animate="fadeInUp" data-delay="0">
                                    <h2>
                                        <strong style="color: #fff;">THEME OF THE CONFERENCE</strong>
                                    </h2>
                                    <hr style="border-top: 1px solid #fff;">
                                    <h1 style="color: #fff;">
                                        “Narrating Law Reform in Asia :<br></h1>
                                    <h2 style="color: #fff;">Between Fullfilling Human Rights<br>and Restorative Justice"</h2>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1" data-animate="fadeInUp" data-delay="0">
                                    <hr style="border-top: 1px solid #fff;">
                                    <h2>
                                        <strong style="color: #fff;">CONFERENCE TOPIC</strong>
                                    </h2>
                                    <hr style="border-top: 1px solid #fff;">
                                    <h4 style="color: #fff">We encourage the participant to present their papers on
                                        various field of topics as bellow :</h4>
                                    <h3 style="color: #fff">
                                        <strong>Philosophy of Law</strong>
                                    </h3>
                                    <h3 style="color: #fff">
                                        <strong>Criminal Law</strong>
                                    </h3>
                                    <h3 style="color: #fff">
                                        <strong>Private Law</strong>
                                    </h3>
                                    <h3 style="color: #fff">
                                        <strong>International Law</strong>
                                    </h3>
                                    <h3 style="color: #fff">
                                        <strong>Constitutional Law</strong>
                                    </h3>
                                    <h3 style="color: #fff">
                                        <strong>Islamic Law</strong>
                                    </h3>
                                    <h3 style="color: #fff">
                                        <strong>Human Right Issues</strong>
                                    </h3>
                                    <h3 style="color: #fff">
                                        <strong>Enviroment Law</strong>
                                    </h3>
                                    <h3 style="color: #fff">
                                        <strong>Health Law</strong>
                                    </h3>
                                    <h3 style="color: #fff">Other related field</h3>
                                </div>
                            </div>
                        </div>
                    </section>
                @include('appSpeaker')
                        <section class="hero-banner" style="background-color:#661616;">
                            <div class="container " style="color: white">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3" data-animate="fadeInLeft">
                                        <h2 style="color: white" class="text-center">
                                            <strong>IMPORTANT DATES</strong>
                                        </h2>
                                        <table class="table">
                                            <tbody>
                                                <tr class="row-2 odd">
                                                    <td class="column-2" style="text-align: left;">
                                                        Abstracts Submission
                                                    </td>
                                                    <td class="column-1" style="text-align: left;">
                                                        <strong>Batch I, 15 Januari 2021 sd 14 Maret 2021</strong>
                                                    </td>
                                                </tr>
                                                <tr class="row-2 odd">
                                                    <td class="column-2" style="text-align: left;"></td>
                                                    <td class="column-1" style="text-align: left;">
                                                        <strong>Batch II, 15 Maret 2021 sd 22 Mei 2021</strong>
                                                    </td>
                                                </tr>
                                                <tr class="row-2 odd">
                                                    <td class="column-2" style="text-align: left;"></td>
                                                    <td class="column-1" style="text-align: left;"></td>
                                                </tr>
                                                <tr class="row-2 odd">
                                                    <td class="column-2" style="text-align: left;">
                                                        Full Paper Submission
                                                    </td>
                                                    <td class="column-1" style="text-align: left;">
                                                        <strong>Batch I, 15 Januari 2021 sd 14 Maret 2021
                                                        </strong>
                                                    </td>
                                                </tr>
                                                <tr class="row-2 odd">
                                                    <td class="column-2" style="text-align: left;"></td>
                                                    <td class="column-1" style="text-align: left;">
                                                        <strong>Batch II, 15 Maret 2021 sd 14 Juni 2021</strong>
                                                    </td>
                                                </tr>
                                                <tr class="row-2 odd">
                                                    <td class="column-2" style="text-align: left;"></td>
                                                    <td class="column-1" style="text-align: left;"></td>
                                                </tr>
                                                <tr class="row-2 odd">
                                                    <td class="column-2" style="text-align: left;">
                                                        Acceptance and Payment
                                                    </td>
                                                    <td class="column-1" style="text-align: left;">
                                                        <strong>Batch I, 15 Maret 2021 sd 3 April 2021</strong>
                                                    </td>
                                                </tr>
                                                <tr class="row-2 odd">
                                                    <td class="column-2" style="text-align: left;"></td>
                                                    <td class="column-1" style="text-align: left;">
                                                        <strong>Batch II, 28 Juni 2021 sd 12 Juli 2021
                                                        </strong>
                                                    </td>
                                                </tr>
                                                <tr class="row-2 odd">
                                                    <td class="column-2" style="text-align: left;"></td>
                                                    <td class="column-1" style="text-align: left;"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                     </div>
                                </div>
                            </div>
                        </section>
                        @include('appPublication')
                        <section class="hero-banner" style="background-color:#F2B705;">
                            <div class="container">
                                <div class="col-md-6">
                                    <div class="container " style="color: white">
                                        <h2 style="color: white" class="text-center">
                                            <strong>CONFERENCE HISTORY</strong>
                                            <hr>
                                        </h2>
                                        <!-- <h1 id="timeline">Timeline</h1> -->
                                        <ul class="timeline">
                                            <li class="timeline">
                                                <div class="timeline-badge info" style="z-index: initial">
                                                    <i class="fa fa-envelope-o"></i>
                                                </div>
                                                
                                                <div class="timeline-panel-r hidden-lg hidden-md hidden-sm zoom" data-animate="fadeInUp" data-duration="2s" data-delay="300">
                                                <a href="{{route('history')}}" style="color: white;">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">
                                                            <strong>2019</strong>
                                                        </h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>1<sup2>st</sup2>
                                                            International Conference on Law Reform
                                                            <b>(INCLAR)</b>, Indonesia</p>
                                                    </div>
                                                    </a>
                                                </div>
                                               
                                                
                                                <div class="timeline-panel-l  hidden-xs zoom" data-animate="fadeInRight" data-duration="2s" data-delay="300">
                                                <a href="{{route('history')}}" style="color: white;">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">
                                                            <strong>2019</strong>
                                                        </h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>1<sup2>st</sup2>
                                                            International Conference on Law Reform
                                                            <b>(INCLAR)</b>, Indonesia</p>
                                                    </div>
                                                    </a>
                                                </div>
                                              
                                            </li>
                                            <li class="timeline">
                                                <div class="timeline-badge info" style="z-index: initial;" >
                                                    <i class="fa fa-envelope-o"></i>
                                                </div>
                                                <div class="timeline-panel-r" data-animate="fadeInLeft" data-duration="2s" data-delay="300">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">
                                                            <strong>2021</strong>
                                                        </h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>2<sup2>nd</sup2>
                                                            International Conference on Law Reform
                                                            <b>(INCLAR)</b>, Indonesia</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="product-block">
                            <div class="container text-center">
                                <div class="row">
                                    <h2 style="margin:0;">
                                        <strong>HOST OF CONFERENCE</strong>
                                    </h2>
                                    <div class="item">
                                        <div class="zoom" style="padding: 0;">
                                            <a href="http://www.umm.ac.id/" target="_blank">
                                                <img
                                                    style=" height: 40%;width: 40%; position: absolutes;"
                                                    title="University of Muhammadiyah Malang"
                                                    src="{{asset ('public/inclar/images/logo/logoo.png')}}"
                                                    data-animate="zoomIn"
                                                    class="class">
                                            </a>
                                        </div>
                                        <a href="http://www.umm.ac.id/" target="_blank">
                                            <h3 data-animate="fadeInUp" data-duration="2s" data-delay="300" style="margin:0;">
                                                University of Muhammadiyah Malang,
                                                <br>
                                                <strong>
                                                    Indonesia</strong>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                      </section>
@endsection