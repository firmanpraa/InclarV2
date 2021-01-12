@extends('app')
@section('body')
        <section class="hero-banner">
            <div class="container text-center" data-animate="fadeInUp" data-delay="100">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 style="color:white">
                            <strong>THE VENUE</strong>
                        </h2>
                        <hr style="border-color: white; background:white;">
                        <div class="row" style="color:white" data-animate="fadeInUp" data-delay="200">
                            <h2 style="color:white">
                                <strong>RAYZ UMM Hote</strong>l</h2>
                            <div class="col-sm-12 ">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <strong>
                                        The 2<sub2></sub2>
                                        INCLAR 2021 will be held in<br>

                                        RAYZ UMM Hotel<br>
                                        Located in Malang City,<br>
                                        East Java<br>
                                        Indonesia
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class="col-sm-4 col-sm-offset-4">
                            <a
                                id=""
                                data-animate="fadeInUp"
                                data-duration="2s"
                                data-delay="1300"
                                href="#map"
                                class="btn-default, btn btn-lg"
                                style="background-color:#F2B705; color: azure;">View Maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="featured-block">
    <center>
            <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="images/slideshow/rayz2.jpg" style="width:70%">
               </div>
            
            <div class="mySlides fade">
              <img src="images/slideshow/rayz3.jpg" style="width:70%">
               </div>
            
            <div class="mySlides fade">
              <img src="images/slideshow/rayz4.jpg" style="width:70%">
              </div>
            
            </div>
        </center>
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
        </section>

        <br><br><br><br>
    
            <div id="map">
                <section class="contact-map">
                    <div id="gmap" style="height:500px"></div>
                </section>
            </div>
            <section class="services-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1" data-animate="fadeInRight">
                            <center>
                                <h2>
                                    <strong>About The Venue</strong>
                                </h2>
                            </center>
                            <hr style="border-top: 1px solid #ccc;">
                            <br>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6"><img
                                    width="100%"
                                    alt="Grandfather with child"
                                    src="images/slideshow/ra.jpg"
                                    sizes="(max-width: 660px) 100vw, 660px"></div>
                                <div class="col-12 col-md-6">
                                    <h3>
                                        <strong>Rayz UMM Hotel</strong>
                                    </h3>
                                    <p>Rayz is a city resort concept hotel located on the border of Malang City and
                                        Batu Tourism City and about 30 minutes from Abdulrahman Saleh Airport. With a
                                        modern-minimalist design, this hotel, owned by Muhammadiyah University of
                                        Malang, provides facilities for guests with business, education and tourism
                                        purposes with a wide selection of meeting rooms, ballrooms, amphi theater, and
                                        other recreational facilities.</p>
                                    <a
                                        class="btn btn-warning"
                                        href="http://rayz-hotel.com">View More</a>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6"><img
                                    width="100%"
                                    alt="Grandfather with child"
                                    src="images/slideshow/malang.jpg"
                                    sizes="(max-width: 660px) 100vw, 660px"></div>
                                <div class="col-12 col-md-6">
                                    <h3>
                                        <strong>About Malang City</strong>
                                    </h3>
                                    <p>Malang, the second largest city in East Java, is known for its cooler
                                        temperatures, beautiful surrounding countryside and attractive streets lined
                                        with historical buildings. Set on the Brantas River, Malang is a lively trade
                                        centre and a popular destination for visitors, with vibrant markets, parks and
                                        Dutch colonial buildings to see. The Dutch used it as a holiday escape, and a
                                        number of the mansions, government buildings and churches they built still
                                        remain standing today.</p>
                                    <a
                                        class="btn btn-warning"
                                        href="http://www.indonesia-holidays.com/java/malang.htm">View More</a>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6"><img
                                    width="100%"
                                    alt="Grandfather with child"
                                    src="images/slideshow/malang2.jpg"
                                    sizes="(max-width: 660px) 100vw, 660px"></div>
                                <div class="col-12 col-md-6">
                                    <h3>
                                        <strong>Travel Destination in Malang</strong>
                                    </h3>
                                    <p>Nestled between four mountain ranges, Malang is blessed with chilly weathers
                                        and stunning scenery – it is the ultimate place to seek refuge from the bustling
                                        city life but what’s more is that it also offers a selection of exciting
                                        attractions; known to be the ideal stopover before heading off to the
                                        magnificent Mount Bromo.</p>
                                    <a
                                        class="btn btn-warning"
                                        href="https://indonesia.tripcanvas.co/malang/best-things-to-do/">View More</a>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6"><img
                                    width="100%"
                                    alt="Grandfather with child"
                                    src="images/slideshow/malang3.jpg"
                                    sizes="(max-width: 660px) 100vw, 660px"></div>
                                <div class="col-12 col-md-6">
                                    <h3>
                                        <strong>Culinary of Malang City</strong>
                                    </h3>
                                    <p>Malang is a famous culinary city at affordable prices. The number of cheap
                                        culinary is caused by many people are students from the rest of Indonesia.
                                        Dishes typical of Malang, Javanese cuisine, domestically Indonesia cuisine,
                                        Chinese cuisine, Indian cuisine, Arab cuisine and European cuisine in
                                        Malang.[159][160] In regard to food, Malang is also known to have many warung
                                        that are quite legendary and have lasted for decades.</p>
                                    <a
                                        class="btn btn-warning"
                                        href="https://www.tripadvisor.com/Restaurants-g297710-c10690-Malang_East_Java_Java.html">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            @endsection