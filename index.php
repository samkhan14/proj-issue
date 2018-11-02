<?php require_once('header.php'); ?>
        <!-- Web Ticker -->
        <section class="top-news">
            <div class="container-fluid">
                <div class="news-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ticker d-flex justify-content-between">
                                <div class="news-head">
                                    <span>BREAKING NEWS<i class="fa fa-caret-right"></i></span>
                                </div>
                                <ul id="webTicker">
                                    <li><a href=""><i class="fa fa-dot-circle-o"></i>These sentences are selected from various online news.</a></li>
                                    <li><a href=""><i class="fa fa-dot-circle-o"></i>This handout will help you understand how paragraphs are formed.</a></li>
                                    <li><a href=""><i class="fa fa-dot-circle-o"></i>It is usually composed of several sentences that together develop one.</a></li>
                                    <li><a href=""><i class="fa fa-dot-circle-o"></i>The purpose of this handout is to give some basic instruction.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Web Ticker -->

         <!-- Slider Area -->

      <section class="slider">
       <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">

                    <!--Carousel Wrapper-->
                <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-2" data-slide-to="1"></li>
                        <li data-target="#carousel-example-2" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="view">
                                <img class="d-block w-100" src="images/image-6.jpg" alt="First slide">
                                <div class="mask rgba-black-light"></div>
                            </div>
                            <div class="carousel-caption">
                                <a href="#"><h1 class="h1-responsive">The World Is Beautifull adn i am admin</h1></a>
                                <p>First text</p>   
                                <span>Technology</span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img class="d-block w-100" src="images/details-1.jpg" alt="Second slide">
                                <div class="mask rgba-black-strong"></div>
                            </div>
                            <div class="carousel-caption">
                                <h1 class="h1-responsive">Strong mask</h1>
                                <p>Secondary text</p>
                            <span>Technology</span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img class="d-block w-100" src="images/second.jpg" alt="Third slide">
                                <div class="mask rgba-black-slight"></div>
                            </div>
                            <div class="carousel-caption">
                                <h1 class="h1-responsive">Slight mask</h1>
                                <p>Third text</p>
                            </div>
                        </div>
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
            </div>

            <div class="col-md-4">
                                <!-- Card -->
                    <div class="card">

                        <!-- Bacground color -->
                        <div class="card-up mx-auto">
                        <img src="images/author.jpg" class="rounded-circle"/>
                    </div>                                               

                        <div class="card-body"><br><br><br>
                            <!-- Name -->
                            <h4 class="card-title"><center>Sumaim Ahmed</center></h4>
                            <hr>
                            <!-- Quotation -->
                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Eos, 
                            <a href="#"><b style="color:#199EB8;">Read more</b></a>
                        </div>                   
                    <!-- Card -->
            </div>
            </div>
            </div>
            </section>




       <!--  <section class="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 padding-fix-r">
                        <div class="owl-carousel owl-slider">
                            <div class="slider-content">
                                <img src="images/slider-1.jpg" alt="" class="img-fluid">
                                <div class="slider-layer">
                                    <p><a href="">This handout will help you understand how paragraphs are formed. It is usually composed of several sentences that together develop one.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">SPORTS</li>
                                        <li class="list-inline-item">September 24, 2017</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-content">
                                <img src="images/slider-2.jpg" alt="" class="img-fluid">
                                <div class="slider-layer">
                                    <p><a href="">The purpose of this handout is to give some basic instruction. It is usually composed of several sentences that together develop one.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">LIFE STYLE</li>
                                        <li class="list-inline-item">September 24, 2017</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-content">
                                <img src="images/slider-3.jpg" alt="" class="img-fluid">
                                <div class="slider-layer">
                                    <p><a href="">It is usually composed of several sentences that together develop one. It is usually composed of several sentences that together develop one.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">FOOD</li>
                                        <li class="list-inline-item">September 24, 2017</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 slider-fix">
                        <div class="slider-sidebar sidebar-o">
                            <img src="images/tech.jpg" alt="" class="img-fluid">
                            <div class="sidebar-layer">
                                <p><a href="">It is usually composed of several sentences that together develop one.</a></p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">TECHNOLOGY</li>
                                    <li class="list-inline-item">September 24, 2017</li>
                                </ul>
                            </div>
                        </div>
                        <div class="slider-sidebar">
                            <img src="images/health.jpg" alt="" class="img-fluid">
                            <div class="sidebar-layer">
                                <p><a href="">These sentences are selected from various online news.</a></p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">HEALTH</li>
                                    <li class="list-inline-item">September 24, 2017</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Slider Area -->	

         <!-- All News -->
        <section class="allnews">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="latest-top">
                            <h4>LATEST NEWS</h4>
                        </div>
                        <div class="owl-carousel latest-slider">
                            <div class="latest-item ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="latest-content ">
                                            <img src="images/latest-1.jpg" alt="" class="img-fluid">
                                            <h6><a href="">These sentences are selected from various online news.</a></h6>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">TECHNOLOGY</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Ex tenetur, quasi, provident animi magni voluptas fugit quae ad........</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="slider-content ">
                                            <div class="slider-img ">
                                                <a href=""><img src="images/latest-3.jpg" alt="" class=" img-thumbnail"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>September 24, 2017</span>
                                            </div>
                                        </div>
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/latest-4.jpg" alt="" class="img-thumbnail"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>September 24, 2017</span>
                                            </div>
                                        </div>
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/latest-5.jpg" alt="" class="img-thumbnail"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>September 24, 2017</span>
                                            </div>
                                        </div>
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/latest-6.jpg" alt="" class="img-thumbnail"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>September 24, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="latest-content">
                                            <img src="images/latest-2.jpg" alt="" class="img-fluid">
                                            <h6><a href="">These sentences are selected from various online news.</a></h6>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">COMPUTER</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Ex tenetur, quasi, provident animi magni voluptas fugit quae ad........</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/latest-7.jpg" alt="" class="img-thumbnail"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>September 24, 2017</span>
                                            </div>
                                        </div>
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/latest-5.jpg" alt="" class="img-thumbnail"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>September 24, 2017</span>
                                            </div>
                                        </div>
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/latest-6.jpg" alt="" class="img-thumbnail"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>September 24, 2017</span>
                                            </div>
                                        </div>
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/latest-3.jpg" alt="" class="img-thumbnail"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news.</a></p>
                                                <span>September 24, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popular-top">
                            <h4>POPULAR NEWS</h4>
                        </div>
                        <div class="owl-carousel popular-slider">
                            <div class="popular-item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                             <?php
                                            $pro = $obj->getallpro();
                                            foreach ($pro as $p) {
                                                echo '<div class="slider-img">
                                                <a href=""><img src="images/image-6.jpg" c="images/popular-1.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">'.$p['pdetails'].'</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">'.$p['pname'].'</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>'; 
                                            }                                             
                                             ?>
                                            
                                        </div>
                                        <div class="clearfix">...</div>
                                    </div>

                                   <!--  <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">2
                                                <a href=""><img src="images/latest-3.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">FAMILY</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->

                                   <!--  <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">3
                                                <a href=""><img src="images/popular-3.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">FOOD</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->

                                  <!--   <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">4
                                                <a href=""><img src="images/popular-4.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">WORLD</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">5
                                                <a href=""><img src="images/popular-5.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">LIFESTYLE</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                     -->
                                    <!-- <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">6
                                                <a href=""><img src="images/popular-6.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">WORLD</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>                                
                            </div>
                            <div class="popular-item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/popular-3.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">SPORTS</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/popular-1.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">SPORTS</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/popular-4.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">SPORTS</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/popular-6.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">SPORTS</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/popular-2.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">SPORTS</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="images/popular-5.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">These sentences are selected from various online news....</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">SPORTS</li>
                                                    <li class="list-inline-item">September 24, 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">

                   

                        <div class="add-widget">
                            <a href=""><img src="images/add-1.png" alt="" class="img-fluid"></a>
                        </div>

                         <div class="follow-widget">
                            <h4>FOLLOW US</h4>
                            <ul class="list-unstyled clearfix">
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook"></i>
                                        <p><span>44,410</span>fans</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-twitter"></i>
                                        <p><span>31,219</span>subscriber</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-rss"></i>
                                        <p><span>11,209</span>subscriber</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-linkedin"></i>
                                        <p><span>19,323</span>follower</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-google-plus"></i>
                                        <p><span>29,559</span>follower</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-youtube"></i>
                                        <p><span>56,717</span>subscriber</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        

                    </div>
                </div>
            </div>
        </section>
        <!-- End All News -->

         <!-- Latest Videos -->
       
       <!--  <section class="videos">
            <div class="container">
                <div class="vodeo-c">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="video-top">
                                <h4>LATEST VIDEOS</h4>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="video-content text-center">
                                <a href="https://www.youtube.com/watch?v=uXFUl0KcIkA" id="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-12">
                            <div class="video-list">
                                <div class="list-content">
                                    <img src="images/latest-4.jpg" alt="" class="img-fluid">
                                    <p><a href="">These sentences are selected from various online news.</a></p>
                                </div>
                                <div class="list-content">
                                    <img src="images/latest-5.jpg" alt="" class="img-fluid">
                                    <p><a href="">These sentences are selected from various online news.</a></p>
                                </div>
                                <div class="list-content">
                                    <img src="images/latest-7.jpg" alt="" class="img-fluid">
                                    <p><a href="">These sentences are selected from various online news.</a></p>
                                </div>
                                <div class="list-content">
                                    <img src="images/latest-6.jpg" alt="" class="img-fluid">
                                    <p><a href="">These sentences are selected from various online news.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- End Latest Videos -->


          <!-- Other News -->
        <section class="oth-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="trending-top">
                            <h4>TRENDING NEWS</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="trending-content">
                                    <img src="images/trending-1.jpg" alt="" class="img-fluid">
                                    <div class="trending-layer">
                                        <p><a href="">This handout will help you understand how paragraphs are formed.</a></p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">LIFESTYLE</li>
                                            <li class="list-inline-item">September 24, 2017</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="trending-content">
                                    <img src="images/trending-2.jpg" alt="" class="img-fluid">
                                    <div class="trending-layer">
                                        <p><a href="">This handout will help you understand how paragraphs are formed.</a></p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">TECHNOLOGY</li>
                                            <li class="list-inline-item">September 24, 2017</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="trending-s">
                                    <div class="trending-s-content">
                                        <div class="trending-img">
                                            <a href=""><img src="images/latest-4.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="trending-s-content">
                                        <div class="trending-img">
                                            <a href=""><img src="images/latest-5.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="trending-s-content">
                                        <div class="trending-img">
                                            <a href=""><img src="images/latest-6.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="trending-s">
                                    <div class="trending-s-content">
                                        <div class="trending-img">
                                            <a href=""><img src="images/latest-3.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="trending-s-content">
                                        <div class="trending-img">
                                            <a href=""><img src="images/latest-7.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="trending-s-content">
                                        <div class="trending-img">
                                            <a href=""><img src="images/latest-4.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

         <!-- Footer --> 
         <!-- =========================================
        JavaScript Files
        ========================================== -->

        <!-- jQuery JS -->
        <script src="js/assets/vendor/jquery-1.12.4.min.js"></script>

         <!-- Poppers Js -->
        <script src="js/assets/popper.js"></script>

         <!-- Bootstrap -->
        <script src="js/assets/bootstrap.min.js"></script>

        <!-- Sticky Js -->
        <script src="js/assets/jquery.sticky.js"></script>

         <!-- WOW JS -->
        <script src="js/assets/wow.min.js"></script>

         <!-- Smooth Scroll -->
        <script src="js/assets/smooth-scroll.js"></script>

         <!-- Mean Menu -->
        <script src="js/assets/jquery.meanmenu.min.js"></script>

         <!-- News Ticker -->
        <script src="js/assets/jquery.newsticker.min.js"></script>

         <!-- Owl Carousel -->
        <script src="js/assets/owl.carousel.min.js"></script>

         <!-- Magnific Popup -->
        <script src="js/assets/jquery.magnific-popup.min.js"></script>

         <!-- Syotimer -->
        <script src="js/assets/jquery.syotimer.min.js"></script>

          <!-- Custom JS -->
        <script src="js/plugins.js"></script>
        <script src="js/custom.js"></script>
    </body>
        </html>
