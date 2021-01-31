@extends('app') @section('body')
<div style="height: 100px;"></div>
<section class="hero-banner" >
    <div class="container text-center" data-animate="fadeInUp" data-delay="100">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>
                    <strong>RAYZ UMM HOTEL</strong>
                </h2>
                <hr style="border-top: 1px solid #ccc;">

                <section class="featured-block" style="padding-bottom:0;">
                    <center>
                        <div class="malasngoding-slider">
                            <div class="isi-slider">
                                <img src="{{asset ('public/inclar/images/slideshow/rayz1.jpg')}}">
                                <img src="{{asset ('public/inclar/images/slideshow/rayz_2.jpg')}}">
                                <img src="{{asset ('public/inclar/images/slideshow/rayz2.jpg')}}">
                                <img src="{{asset ('public/inclar/images/slideshow/rayz4.jpg')}}">
                            </div>
                        </center>

                    </section>

                </div>
            </div>
        </div>
    </div>
    <section class="services-block" style="padding-top:0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1" data-animate="fadeInRight">

                    <div class="row align-items-center">
                       
                        <div >
                            
                            <p>Rayz is a city resort concept hotel located on the border of Malang City and
                                Batu Tourism City and about 30 minutes from Abdulrahman Saleh Airport. With a
                                modern-minimalist design, this hotel, owned by Muhammadiyah University of
                                Malang, provides facilities for guests with business, education and tourism
                                purposes with a wide selection of meeting rooms, ballrooms, amphi theater, and
                                other recreational facilities.</p>
                        </div>
                        <div style="text-align: center;">
                        <a class="btn btn-warning" style="text-align: center;" href="http://rayz-hotel.com" target="_blank">View More</a></div>
                    </div>
                </div>

            </div>
        </section>
        @endsection