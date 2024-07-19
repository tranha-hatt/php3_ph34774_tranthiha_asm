@extends('layout.master')
@section('content')
     <!-- News Feed Area Start Here -->
     <section class="bg-accent border-bottom add-top-margin">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                    <div class="topic-box mt-4 mb-5">Top Stories</div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-8 col-7">
                    <div class="feeding-text-dark">
                        <ol id="sample" class="ticker">
                            <li>
                                <a href="#">McDonell Kanye West highlights difficulties for celebritiesComplimentary decor and
                                    design advicewith Summit Park homes</a>
                            </li>
                            <li>
                                <a href="#">Magnificent Image Of The New Hoover Dam Bridge Taking Shape</a>
                            </li>
                            <li>
                                <a href="#">If Obama Had Governed Like This in 2017 He'd Be the Transformational.</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Feed Area End Here -->
    <!-- News Info List Area Start Here -->
    <section class="bg-body">
        <div class="container">
            <ul class="news-info-list text-center--sm">
                <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>Australia</li>
                <li>
                    <i class="fa fa-calendar" aria-hidden="true"></i><span id="current_date"></span></li>
                <li>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>Last Update 11.30 am</li>
                <li>
                    <i class="fa fa-cloud" aria-hidden="true"></i>29&#8451; Sydney, Australia</li>
            </ul>
        </div>
    </section>
    <!-- News Info List Area End Here -->
    <!-- Breadcrumb Area Start Here -->
    <section class="breadcrumbs-area" style="background-image: url('client/img/banner/breadcrumbs-banner.jpg');">
        <div class="container">
            <div class="breadcrumbs-content">
                <h1>Post Style_3</h1>
                <ul>
                    <li>
                        <a href="index.html">Home</a> -</li>
                    <li>All Posts</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End Here -->
    <!-- Post Style 3 Page Area Start Here -->
    <section class="bg-body section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="position-relative mb-50-r">
                        <a class="img-opacity-hover" href="single-news-1.html">
                            <img src="{{asset('client/img/news/news154.jpg')}}" alt="news" class="img-fluid width-100 mb-30">
                        </a>
                        <div class="topic-box-top-lg">
                            <div class="topic-box-sm color-cod-gray mb-20">Nature</div>
                        </div>
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                    <span>by</span>
                                    <a href="single-news-1.html">Adams</a>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>March 22, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-c26">
                            <a href="single-news-1.html">John Baldessari on designing the newest BMW art car simply dummy and type industry.</a>
                        </h3>
                        <p>Nimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since thewhen an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.</p>
                        <a href="single-news-1.html" class="btn-ftf-dtp-52">Read More</a>
                    </div>
                    <div class="position-relative mb-50-r">
                        <a class="img-opacity-hover" href="single-news-3.html">
                            <img src="{{asset('client/img/news/news155.jpg')}}" alt="news" class="img-fluid width-100 mb-30">
                        </a>
                        <div class="topic-box-top-lg">
                            <div class="topic-box-sm color-cod-gray mb-20">Adventure</div>
                        </div>
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                    <span>by</span>
                                    <a href="single-news-1.html">Adams</a>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>March 22, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-c26">
                            <a href="single-news-3.html">John Baldessari on designing the newest BMW art car simply dummy and type industry.</a>
                        </h3>
                        <p>Nimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since thewhen an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.</p>
                        <a href="single-news-3.html" class="btn-ftf-dtp-52">Read More</a>
                    </div>
                    <div class="position-relative mb-50-r">
                        <a class="img-opacity-hover" href="single-news-4.html">
                            <img src="{{asset('client/img/news/news156.jpg')}}" alt="news" class="img-fluid width-100 mb-30">
                        </a>
                        <div class="topic-box-top-lg">
                            <div class="topic-box-sm color-cod-gray mb-20">Technology</div>
                        </div>
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                    <span>by</span>
                                    <a href="single-news-1.html">Adams</a>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>March 22, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-c26">
                            <a href="single-news-4.html">John Baldessari on designing the newest BMW art car simply dummy and type industry.</a>
                        </h3>
                        <p>Nimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since thewhen an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.</p>
                        <a href="single-news-4.html" class="btn-ftf-dtp-52">Read More</a>
                    </div>
                    <div class="position-relative mb-50-r">
                        <a class="img-opacity-hover" href="single-news-2.html">
                            <img src="{{asset('client/img/news/news157.jpg')}}" alt="news" class="img-fluid width-100 mb-30">
                        </a>
                        <div class="topic-box-top-lg">
                            <div class="topic-box-sm color-cod-gray mb-20">Fashion</div>
                        </div>
                        <div class="post-date-dark">
                            <ul>
                                <li>
                                    <span>by</span>
                                    <a href="single-news-1.html">Adams</a>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>March 22, 2017</li>
                            </ul>
                        </div>
                        <h3 class="title-medium-dark size-c26">
                            <a href="single-news-2.html">John Baldessari on designing the newest BMW art car simply dummy and type industry.</a>
                        </h3>
                        <p>Nimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since thewhen an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.</p>
                        <a href="single-news-2.html" class="btn-ftf-dtp-52">Read More</a>
                    </div>
                    <div class="row mb-30">
                        <div class="col-sm-6 col-12">
                            <div class="pagination-btn-wrapper text-center--xs mb15--xs">
                                <ul>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="pagination-result text-right pt-10 text-center--xs">
                                <p class="mb-none">Page 1 of 4</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">Stay Connected</div>
                        </div>
                        <ul class="stay-connected overflow-hidden">
                            <li class="facebook">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <div class="connection-quantity">50.2 k</div>
                                    <p>Fans</p>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <div class="connection-quantity">10.3 k</div>
                                    <p>Followers</p>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    <div class="connection-quantity">25.4 k</div>
                                    <p>Fans</p>
                                </a>
                            </li>
                            <li class="rss">
                                <a href="#">
                                    <i class="fa fa-rss" aria-hidden="true"></i>
                                    <div class="connection-quantity">20.8 k</div>
                                    <p>Subscriber</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <div class="ne-banner-layout1 text-center">
                            <a href="#">
                                <img src="{{asset('client/img/banner/banner3.jpg')}}" alt="ad" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">Newsletter</div>
                        </div>
                        <div class="newsletter-area bg-primary">
                            <h2 class="title-medium-light size-xl pl-30 pr-30">Subscribe to our mailing list to get the new updates!</h2>
                            <img src="{{asset('client/img/banner/newsletter.png')}}" alt="newsletter" class="img-fluid m-auto mb-15">
                            <p>Subscribe our newsletter to stay updated</p>
                            <div class="input-group stylish-input-group">
                                <input type="text" placeholder="Enter your mail" class="form-control">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">Most Reviews</div>
                        </div>
                        <div class="position-relative mb30-list bg-body">
                            <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Apple</div>
                            </div>
                            <div class="media">
                                <a class="img-opacity-hover" href="single-news-1.html">
                                    <img src="{{asset('client/img/news/news117.jpg')}}" alt="news" class="img-fluid">
                                </a>
                                <div class="media-body">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark mb-none">
                                        <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mb30-list bg-body">
                            <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Gadgets</div>
                            </div>
                            <div class="media">
                                <a class="img-opacity-hover" href="single-news-2.html">
                                    <img src="{{asset('client/img/news/news118.jpg')}}" alt="news" class="img-fluid">
                                </a>
                                <div class="media-body">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>June 06, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark mb-none">
                                        <a href="single-news-3.html">Can Be Monit roade year with Program.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mb30-list bg-body">
                            <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Software</div>
                            </div>
                            <div class="media">
                                <a class="img-opacity-hover" href="single-news-3.html">
                                    <img src="{{asset('client/img/news/news119.jpg')}}" alt="news" class="img-fluid">
                                </a>
                                <div class="media-body">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>August 22, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark mb-none">
                                        <a href="single-news-1.html">Can Be Monit roade year with Program.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mb30-list bg-body">
                            <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Tech</div>
                            </div>
                            <div class="media">
                                <a class="img-opacity-hover" href="single-news-1.html">
                                    <img src="{{asset('client/img/news/news120.jpg')}}" alt="news" class="img-fluid">
                                </a>
                                <div class="media-body">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark mb-none">
                                        <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mb30-list bg-body">
                            <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Ipad</div>
                            </div>
                            <div class="media">
                                <a class="img-opacity-hover" href="single-news-1.html">
                                    <img src="{{asset('client/img/news/news121.jpg')}}" alt="news" class="img-fluid">
                                </a>
                                <div class="media-body">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>February 10, 2017</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark mb-none">
                                        <a href="single-news-2.html">Can Be Monit roade year with Program.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-25">
                            <div class="topic-box-lg color-cod-gray">Tags</div>
                        </div>
                        <ul class="sidebar-tags">
                            <li>
                                <a href="#">Apple</a>
                            </li>
                            <li>
                                <a href="#">Business</a>
                            </li>
                            <li>
                                <a href="#">Architecture</a>
                            </li>
                            <li>
                                <a href="#">Gadgets</a>
                            </li>
                            <li>
                                <a href="#">Software</a>
                            </li>
                            <li>
                                <a href="#">Microsoft</a>
                            </li>
                            <li>
                                <a href="#">Robotic</a>
                            </li>
                            <li>
                                <a href="#">Technology</a>
                            </li>
                            <li>
                                <a href="#">Others</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection