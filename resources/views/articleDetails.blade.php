<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')


<section class="hero d-flex justify-content-center align-items-center" id="section_1" style="padding-bottom:80px;">
    <div class="container mt-5">
        <div class="row">

            <div class="col-lg-7 col-12">
                <div class="hero-text ">
                    <h2 class=""><a href="{{route ('index',$lang)}}">{{__('trans.home')}}</a></h2>
                    <h2 class=""> / </h2>
                    <h2 class="">{{__('trans.article title')}}</h2>
                </div>
            </div>

            <div class="col-lg-5 col-12 position-relative">

            </div>

        </div>
    </div>


</section>




<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="row">

            <div class="col-lg-8 col-12">
                <div>
                    <div class="text-center">
                        <img src="{{asset('assets/img/blog-2.jpg')}}" class="img-fluid mb-2 mt-2" width="100%" alt="">
                    </div>
                    <div class="text-justify mb-4 mt-2" style="color:#000; padding:5px">{{__('trans.aboutdetails1')}}
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-12">

                <div class="portfolio" id="portfolio" style="padding-top:0px;">
                    <div class="container">
                        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                            <p>{{__('trans.other articles')}}</p>
                        </div>

                        <div class="row portfolio-container">

                            <div class="col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-img">
                                        <img src="{{asset('assets/img/portfolio-1.jpg')}}" alt="Image">
                                    </div>
                                    <div class="portfolio-text">
                                        <h3> <a href="{{asset('assets/img/portfolio-1.jpg')}}"
                                                data-lightbox="portfolio">{{__('trans.article title')}}</a></h3>
                                        <a class="btn" href="{{asset('assets/img/portfolio-1.jpg')}}"
                                            data-lightbox="portfolio">+</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-img">
                                        <img src="{{asset('assets/img/portfolio-2.jpg')}}" alt="Image">
                                    </div>
                                    <div class="portfolio-text">
                                        <h3> <a href="{{asset('assets/img/portfolio-2.jpg')}}"
                                                data-lightbox="portfolio">{{__('trans.article title')}}</a></h3>
                                        <a class="btn" href="{{asset('assets/img/portfolio-1.jpg')}}"
                                            data-lightbox="portfolio">+</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-img">
                                        <img src="{{asset('assets/img/portfolio-1.jpg')}}" alt="Image">
                                    </div>
                                    <div class="portfolio-text">
                                        <h3> <a href="{{asset('assets/img/portfolio-1.jpg')}}"
                                                data-lightbox="portfolio">{{__('trans.article title')}}</a></h3>
                                        <a class="btn" href="{{asset('assets/img/portfolio-1.jpg')}}"
                                            data-lightbox="portfolio">+</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




            </div>

        </div>

    </div>
</div>
<!-- About End -->





@endsection