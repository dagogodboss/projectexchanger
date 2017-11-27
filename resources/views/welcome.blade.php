@extends('layouts.frontend')

@section('content')
    <section id="demo-hero-1" class="jumbotron full-vh" data-pages="parallax">
    <div class="inner full-height">

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide fit slide-1">
                    <div class="slider-wrapper">
                        <div class="bg-image full-width full-height" data-swiper-parallax="30%" data-pages-bg-image="{{asset('Frontend/assets/images/bg_pattern_1.jpg')}}"></div>
                    </div>
                    <div class="content-layer">
                        <div class="inner full-height">
                            <div class="container-xs-height full-height">
                                <div class="col-xs-height col-middle text-center">
                                    <div class="container sm-m-b-30">
                                        <div class="row sm-m-b-30">
                                            <div class="col-md-6 col-md-offset-3 p-b-90 sm-p-b-40 sm-m-b-30">
                                                <h1 class="light text-white sm-no-margin" data-swiper-parallax="-15%">
                                                Something Different
                                                </h1>
                                                <a href="#" class="block-title text-white link">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img class="" draggable="false" src="{{asset('Frontend/assets/images/1.png')}}" alt="" title="" data-swiper-parallax="50%">
                    <img class="bg-elements hidden-xs lazy" src="{{asset('Frontend/assets/images/2.png')}}" data-swiper-parallax="-20%" alt="">
                </div>


                <div class="swiper-slide fit slide-3">

                <div class="slider-wrapper">
                <div class="bg-image full-width full-height" data-swiper-parallax="30%" data-pages-bg-image="{{asset('Frontend/assets/images/bg_pattern_3.jpg')}}">
                </div>
                </div>


                <div class="content-layer">
                <div class="inner full-height">
                <div class="container-xs-height full-height">
                <div class="col-xs-height col-middle text-center">
                <div class="container sm-m-b-30">
                <div class="row sm-m-b-30">
                <div class="col-md-6 col-md-offset-3 p-b-90 sm-p-b-40 sm-m-b-30">
                <h1 class="light text-white sm-no-margin" data-swiper-parallax="-15%">
                Something New
                </h1>
                <a href="#" class="block-title text-white link">Learn more</a>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>

                <img class=" lazy" draggable="true" src="{{asset('Frontend/assets/images/3.png')}}" alt="" title="" data-swiper-parallax="80%">
                <img class="bg-elements hidden-xs lazy" src="{{asset('Frontend/assets/images/4.png')}}" data-swiper-parallax="-20%" alt="">
                </div>


                <div class="swiper-slide fit slide-2">

                <div class="slider-wrapper">
                <div class="bg-image full-width full-height" data-swiper-parallax="30%" data-pages-bg-image="{{asset('Frontend/assets/images/bg_pattern_2.jpg')}}">
                </div>
                </div>


                <div class="content-layer">
                <div class="inner full-height">
                <div class="container-xs-height full-height">
                <div class="col-xs-height col-middle text-center">
                <div class="container sm-m-b-30">
                <div class="row sm-m-b-30">
                <div class="col-md-6 col-md-offset-3 p-b-90 sm-p-b-40 sm-m-b-30">
                <h1 class="light text-white sm-no-margin" data-swiper-parallax="-15%">
                Something Exciting
                </h1>
                <a href="#" class="block-title text-white link">Learn more</a>
                </div>
                </div>
                </div>
                 </div>
                </div>
                </div>
                </div>

                <img class="ipad lazy" draggable="false" src="{{asset('Frontend/assets/images/5.png')}}" alt="" title="" data-swiper-parallax="80%">
                <img class="bg-elements hidden-xs lazy" src="{{asset('Frontend/assets/images/7.png')}}" data-swiper-parallax="-20%" alt="">
                </div>

            </div>

        <div class="swiper-navigation swiper-white-solid swiper-button-prev"></div>
        <div class="swiper-navigation swiper-white-solid swiper-button-next"></div>
        </div>
    </div>

</section>
@endsection

