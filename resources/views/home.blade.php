<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')


<!-- Hero Start -->
<div class="hero" id="home">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <!-- <p></p> -->
                        <h1>{{__('trans.Hello Im')}}</h1>
                        <h2></h2>
                        <div class="typed-text">{{__('trans.Welcome to My Personal Page')}}</div>
                    </div>
                    <div class="hero-btn">
                        <a class="btn" href="#about">{{__('trans.About Me')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-block">
                <div class="hero-image">
                    <img src="{{asset('assets/img/team-4.jpg')}}" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 " style="padding:0;">
                <div class="about-img">
                    <img src="{{asset('assets/img/team-2.jpg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="about-content">
                    <div class="section-header">
                        <p>{{__('trans.My Story')}}</p>
                        <h2>{{__('trans.little about me')}}</h2>
                    </div>
                    <div class="about-text text-justify mb-4">
                        {!! __('trans.aboutdetails1') !!}
                    </div>

                    <a class="btn" href="#contact">{{__('trans.Contact')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<!-- <div class="service" id="service">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>What I do</p>
                    <h2>Awesome Quality Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="service-text">
                                <h3>Web Design</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <div class="service-text">
                                <h3>Web Development</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="service-text">
                                <h3>Apps Design</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="service-text">
                                <h3>Apps Development</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Service End -->




<!-- Banner Start -->
<!-- <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Reasonable Price</p>
                    <h2>Get A <span>Special</span> Price</h2>
                </div>
                <div class="container banner-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. 
                    </p>
                    <a class="btn">Pricing Plan</a>
                </div>
            </div>
        </div> -->
<!-- Banner End -->


<!-- Portfolio Start -->
<div class="portfolio" id="portfolio">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>{{__('trans.Portofolio')}}</p>
            <h2>{{__('trans.PortfolioSub')}}</h2>
        </div>
        <!-- <div class="row">
            <div class="col-12">
                <ul id="portfolio-filter">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-1">Web Design</li>
                    <li data-filter=".filter-2">Mobile Apps</li>
                    <li data-filter=".filter-3">Game Dev</li>
                </ul>
            </div>
        </div> -->
        <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="{{asset('assets/img/portfolio-1.jpg')}}" alt="Image">
                    </div>
                    <div class="portfolio-text">
                        <h3> <a href="{{asset('assets/img/portfolio-1.jpg')}}" data-lightbox="portfolio">{{__('trans.Work Title')}}</a></h3>
                        <a class="btn" href="{{asset('assets/img/portfolio-1.jpg')}}" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="{{asset('assets/img/portfolio-2.jpg')}}" alt="Image">
                    </div>
                    <div class="portfolio-text">
                    <h3> <a href="{{asset('assets/img/portfolio-1.jpg')}}" data-lightbox="portfolio">{{__('trans.Work Title')}}</a></h3>
                        <a class="btn" href="{{asset('assets/img/portfolio-2.jpg')}}" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="{{asset('assets/img/portfolio-3.jpg')}}" alt="Image">
                    </div>
                    <div class="portfolio-text">
                    <h3> <a href="{{asset('assets/img/portfolio-1.jpg')}}" data-lightbox="portfolio">{{__('trans.Work Title')}}</a></h3>
                        <a class="btn" href="{{asset('assets/img/portfolio-3.jpg')}}" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="{{asset('assets/img/portfolio-4.jpg')}}" alt="Image">
                    </div>
                    <div class="portfolio-text">
                    <h3> <a href="{{asset('assets/img/portfolio-1.jpg')}}" data-lightbox="portfolio">{{__('trans.Work Title')}}</a></h3>
                        <a class="btn" href="{{asset('assets/img/portfolio-4.jpg')}}" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="{{asset('assets/img/portfolio-5.jpg')}}" alt="Image">
                    </div>
                    <div class="portfolio-text">
                    <h3> <a href="{{asset('assets/img/portfolio-1.jpg')}}" data-lightbox="portfolio">{{__('trans.Work Title')}}</a></h3>
                        <a class="btn" href="{{asset('assets/img/portfolio-5.jpg')}}" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="1s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="{{asset('assets/img/portfolio-6.jpg')}}" alt="Image">
                    </div>
                    <div class="portfolio-text">
                    <h3> <a href="{{asset('assets/img/portfolio-1.jpg')}}" data-lightbox="portfolio">{{__('trans.Work Title')}}</a></h3>
                        <a class="btn" href="{{asset('assets/img/portfolio-6.jpg')}}" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->


<!-- Banner Start -->
<!-- <div class="banner wow zoomIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-header text-center">
            <p>{{__('trans.My Story')}}</p>
            <h2>{{__('trans.little about me')}}</h2>
        </div>
        <div class="container banner-text">
            <p>
            {!! __('trans.aboutdetails1') !!}
            </p>
            <a class="btn" href="#portfolio">{{__('trans.Portofolio')}}</a>
        </div>
    </div>
</div> -->
<!-- Banner End -->



<!-- Testimonial Start -->
<!-- <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
            <div class="container">
                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/img/testimonial-1.jpg')}}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/img/testimonial-2.jpg')}}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/img/testimonial-3.jpg')}}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Testimonial End -->


<!-- Our Video Start -->
<div class="team" id="team">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
        <p>{{__('trans.Our Video Library')}}</p>   
        <h2>{{__('trans.Explore Our Library of Videos')}}</h2>

        </div>
        <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="team-item">
                    <div class="team-img">
                        <!-- <img src="{{asset('assets/img/team-1.jpg')}}" alt="Image"> -->
                        <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                            title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0" width="100%"
                            height="250px"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="team-text">
                        <h2> <a href="https://www.youtube.com/watch?time_continue=5&v=4Z9mUjtFJYY&ab_channel=ScenicRelaxation"
                                target="_blank">
                                {{__('trans.Video Title')}}
                            </a>
                        </h2>
                        <p>
                            {{__('trans.Video Sub Title')}}
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <!-- <img src="{{asset('assets/img/team-1.jpg')}}" alt="Image"> -->
                        <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                            title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0" width="100%"
                            height="250px"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="team-text">
                        <h2> <a href="https://www.youtube.com/watch?time_continue=5&v=4Z9mUjtFJYY&ab_channel=ScenicRelaxation"
                                target="_blank">
                                {{__('trans.Video Title')}}
                            </a>
                        </h2>
                        <p>
                        {{__('trans.Video Sub Title')}}
                        </p>

                    </div>
                </div>

            </div>

            <!-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/img/team-4.jpg')}}" alt="Image">
                    </div>
                    <div class="team-text">
                        <h2>Josh Dunn</h2>
                        <h4>Apps Developer</h4>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                        </p>
                        <div class="team-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Contact Start -->
<div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="{{__('trans.Name')}}"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="{{__('trans.Email')}}"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject"
                                    placeholder="{{__('trans.Subject')}}" required="required"
                                    data-validation-required-message="Please enter a subject" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message"
                                    placeholder="{{__('trans.Tell me about your request')}}" required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">{{__('trans.Send')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Blog Start -->
<div class="blog" id="blog">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>{{__('trans.Blog')}}</p>
            <h2>{{__('trans.Our Latest News & Articles')}}</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-img">
                        <img src="{{asset('assets/img/blog-1.jpg')}}" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>{{__('trans.article title')}}</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-list-alt"></i>{{__('trans.article category')}}</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                        </div>
                        <p>
                            {{__('trans.subtitle')}}
                        </p>
                        @if($lang=="ar")
                        <a class="btn" href="{{route('articleDetails',$lang)}}">{{ __('trans.Read More')}} <i class="fa fa-angle-left"></i></a>
                        @else
                        <a class="btn" href="{{route('articleDetails',$lang)}}">{{ __('trans.Read More')}} <i class="fa fa-angle-right"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-img">
                        <img src="{{asset('assets/img/blog-2.jpg')}}" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>{{__('trans.article title')}}</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-list-alt"></i>{{__('trans.article category')}}</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                        </div>
                        <p>
                            {{__('trans.subtitle')}}
                        </p>
                        @if($lang=="ar")
                        <a class="btn" href="{{route('articleDetails',$lang)}}">{{ __('trans.Read More')}} <i class="fa fa-angle-left"></i></a>
                        @else
                        <a class="btn" href="{{route('articleDetails',$lang)}}">{{ __('trans.Read More')}} <i class="fa fa-angle-right"></i></a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-img">
                        <img src="{{asset('assets/img/blog-2.jpg')}}" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>{{__('trans.article title')}}</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-list-alt"></i>{{__('trans.article category')}}</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                        </div>
                        <p>
                            {{__('trans.subtitle')}}
                        </p>
                        @if($lang=="ar")
                        <a class="btn" href="{{route('articleDetails',$lang)}}">{{ __('trans.Read More')}} <i class="fa fa-angle-left"></i></a>
                        @else
                        <a class="btn" href="{{route('articleDetails',$lang)}}">{{ __('trans.Read More')}} <i class="fa fa-angle-right"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


@endsection