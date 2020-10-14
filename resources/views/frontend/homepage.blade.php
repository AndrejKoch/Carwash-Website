@extends('layouts.frontend')
@section('slider')

    <div class="banner clearfix">
        <!-- slideshow start -->
        <div class="slideshow">

            <!-- slider revolution start -->
            <!-- ================ -->
            <div class="slider-revolution-5-container">
                <div id="slider-banner-fullwidth" class="slider-banner-fullwidth rev_slider" data-version="5.0">
                    <ul class="slides">
                        <!-- slide 1 start -->
                        <!-- ================ -->

                        @foreach($sliders as $slider)
                            <li class="text-center" data-transition="random" data-slotamount="default"
                                data-masterspeed="default" data-title="">

                                <!-- main image -->
                                <img src="/assets/img/slider/originals/{{$slider->image}}" alt="slidebg1"
                                     data-bgposition="center center"
                                     data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                                <!-- Transparent Background -->
                                <div class="tp-caption dark-translucent-bg"
                                     data-x="center"
                                     data-y="center"
                                     data-start="0"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                     data-transform_out="o:0;s:600;"
                                     data-width="5000"
                                     data-height="5000">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption large_white"
                                     data-x="center"
                                     data-y="50"
                                     data-start="1000"
                                     data-width="650"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                <span class="logo-font"><h3
                                        style="padding-top: 50px; color: #ffffff;">{{$slider->title}}</h3>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption large_white tp-resizeme hidden-xs"
                                     data-x="center"
                                     data-y="150"
                                     data-start="1300"
                                     data-width="500"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                                    <div class="separator light"></div>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption medium_white hidden-xs"
                                     data-x="center"
                                     data-y="190"
                                     data-start="1300"
                                     data-width="750"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;s:800;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                    <p>{{$slider->description}}</p>
                                </div>
                            </li>
                    @endforeach
                    <!-- slide 1 end -->
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!-- slider revolution end -->
        </div>
        <!-- slideshow end -->
    </div>
    <!-- slider revolution end -->
    <!-- slideshow end -->
    <!-- banner end -->
@endsection

@section('about')
    <section class="pv-20 clearfix" id="about" style="margin-top: -10%; z-index: 500; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action light-gray-bg p-20 shadow bordered">
                        <h1 class="text-center">{{$settings->ctitle1}}</h1>
                        <div class="separator"></div>
                        <p class="lead text-center">{{$settings->calttitle1}}</p>
                        <br>
                        <br>

                        @foreach($introcards as $introcard)
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="feature-box-2 object-non-visible"
                                         data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                        <span class="icon without-bg"><i class="{{$introcard->icon}}"></i></span>
                                        <div class="body">
                                            <h4 class="title">{{$introcard->title}}</h4>
                                            <p>{!!$introcard->description!!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
@endsection


@section('whyus')
    <section class="pv-30 padding-bottom-clear light-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="text-center large">Зашто да го <strong>изберете</strong> <span class="text-default">КЛИП+</span>
                    </h1>
                    <div class="separator"></div>
                    <p class="large text-center">{{ $settings->description }}
                    </p>
                </div>
            </div>
        </div>
        <!-- slider revolution start -->
        <!-- ================ -->
        <div class="slider-revolution-5-container">
            <div id="slider-banner-carousel" class="slider-banner-carousel rev_slider" data-version="5.0">
                <ul class="slides">
                @foreach($slidercontent as $slidercontent)
                    <!-- slide 1 start -->
                        <!-- ================ -->
                        <li data-transition="fade" data-slotamount="default" data-easein="default"
                            data-easeout="default" data-masterspeed="300" data-saveperformance="off" data-title="">

                            <!-- main image -->
                            <img src="/assets/img/slidercontent/medium/{{$slidercontent->image}}" alt="slidebg1"
                                 data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat"
                                 class="rev-slidebg" data-no-retina>

                        </li>
                @endforeach
                <!-- slide 1 end -->
                </ul>
            </div>
        </div>
        <!-- slider revolution end -->
    </section>

@endsection


@section('services')

    <section class="pv-40" id="services">
        <div class="container">
            <div class="row">
                <h2 class="text-center">{{$settings->ctitle2}}</h2>
                <div class="separator"></div>
                <p class="large text-center">{{$settings->calttitle2}}</p>
            </div>
            <!-- pricing tables start -->
            <!-- ================ -->
            <div img class="pricing-tables circle-head object-non-visible" data-animation-effect="fadeInUpSmall"
                 data-effect-delay="0">

                <div class="row grid-space-10">
                    @foreach($services as $service)
                        <div class="col-sm-4">
                            <!-- pricing table start -->
                            <!-- ================ -->
                            <div class="plan shadow light-gray-bg bordered">

                                <div class="header dark-bg">
                                    <h3>{{$service->name}}</h3>
                                </div>
                                <ul>
                                    <li style="height: 200px; max-width:300px;text-align: center; margin-left: auto; margin-right: auto;">{!! $service->description !!}</li>
                                    <div class="btn btn-dark radius-50 btn-lg">{{ $service->price }}</div>
                                </ul>
                            </div>
                            <!-- pricing table end -->
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- pricing tables end -->
        </div>
    </section>
@endsection

@section('introproducts')
    <div id="products" class="dark-translucent-bg footer-top animated-text default-hovered"
         style="background-color:rgba(0,0,0,0.6);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="col-md-12" style="min-height:80px;">
                            <h2>{{$settings->calttitle3}}</h2>
                            <h2>{{$settings->ctitle3}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('products')
    <div class="owl-carousel carousel-autoplay">

        @foreach($products as $product)
            <div class="overlay-container">
                <img style="max-height: 200px;object-fit: cover; filter: grayscale(40%);"
                     src="/assets/img/products/thumbnails/{{$product->image}}" alt="">
                <div class="overlay-top">
                    <div class="text">
                        <p>{{$product->name}}</p>
                    </div>
                </div>
                <div class="overlay-bottom">
                    <div class="links">
                        <small>{{$product->description}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('intromap')
    <div class="dark-translucent-bg footer-top animated-text default-hovered" style="background-color:rgba(0,0,0,0.6);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="col-md-12" style="min-height:80px;">
                            <h2>{{$settings->ctitle4}}</h2>
                            <h2>{{$settings->calttitle4}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('map')
    <div class="g-pos-rel g-height-400">
        <div id="map-canvas" class="js-g-map g-pos-abs w-100 h-100"></div>
    </div>
    <!-- End Google (Map) [custom] -->
@endsection

@section('contact')
    @if(Session::has('flash_message'))
        <div class="alert alert-success text-center">
            {{ Session::get('flash_message') }}
        </div>
    @endif


    <div id="contact" class="g-py-80">
        <div class="container">
            <div class="container text-center g-max-width-750 g-mb-70">
                <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary">
                    <h2 class="text-center">{{$settings->ctitle5}}</h2>
                    <div class="separator"></div>
                    <p class="large text-center">{{$settings->calttitle5}}</p>
                </div>
            </div>

            <div class="col-md-12 g-mb-25 g-mb-0--md">
                <form action="/send-message" method="post">
                    {{ csrf_field() }}
                    <div class="col-sm-6 form-group g-mb-30">
                        <input id="inputGroup1_1"
                               class="form-control h-100 g-font-size-14 g-theme-bg-gray-light-v2 g-brd-none g-rounded-1 g-py-14 g-px-10"
                               type="text" placeholder="Вашето име" name="name">
                    </div>

                    <div class="col-sm-6 form-group g-mb-30">
                        <input id="inputGroup1_2"
                               class="form-control h-100 g-font-size-14 g-theme-bg-gray-light-v2 g-brd-none g-rounded-1 g-py-14 g-px-10"
                               type="tel" placeholder="Мобилен телефон" name="phone">
                    </div>


                    <div class="col-sm-6 form-group g-mb-30">
                        <input id="inputGroup1_4"
                               class="form-control h-100 g-font-size-14 g-theme-bg-gray-light-v2 g-brd-none g-rounded-1 g-py-14 g-px-10"
                               placeholder="Датум и време (01.04.2021 16.30h)" name="subject">
                    </div>


                    <div class="col-sm-6 form-group g-mb-30">
                        <select class="form-group" name="message" style="width: 100%; height: 38px;"
                                value="">
                            <option value="">Избери тип на услуга</option>
                            @foreach($services as $service)
                                <option value="{{ $service->name }}">{{ $service->name }} - {{ $service->price }}</option>
                            @endforeach
                        </select>
                        <p style="font-size: 12px;">*Цената на некои услуги зависи од големината на возилото</p>
                    </div>
                    <div class="col-sm-12">
                        <div class="text-center">
                            <button
                                class="btn u-btn-primary btn-md text-uppercase g-line-height-1 g-font-weight-700 g-font-size-11 rounded-0 g-py-12 g-px-25 mb-0"
                                type="submit" role="button">Закажи!
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
