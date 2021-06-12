@extends('front.master')

@section('title')DubaiSaifCurtain - Home @endsection

@section('meta')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
@endsection

@section('body')
<section class="home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 px-0">
                <div id="carouselChange" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselChange" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselChange" data-slide-to="1"></li>
                        <li data-target="#carouselChange" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" id="carousel-inner">
                        @foreach($sliders as $slider)
                        <div class="rounded carousel-item {{$slider->active}}">
                            <img data-original="{{asset($slider->slider_image)}}" class="border-radius-99 d-block w-100" alt="" height="">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="curtains bg-white pt-5 pb-5">
    <div class="container">
        <div class="owl-carousel curtains shadow rounded bg-white p-3 mt-3">
            
            <div class="item border-right">
                <a href=""><i class="fas fa-tools"></i> Blackout Curtains</a>
            </div>
            <div class="item border-right">
                <a href=""><i class="fas fa-tools"></i> Wave Curtains</a>
            </div>
            <div class="item border-right">
                <a href=""><i class="fas fa-tools"></i> Window Curtains</a>
            </div>
            <div class="item border-right">
                <a href=""><i class="fas fa-tools"></i> Outdoor Curtains</a>
            </div>
            
        </div>
    </div>
</section>
<section class="blinds bg-white pb-5">
    <div class="container">
        <div class="owl-carousel blinds shadow rounded bg-white p-3">
            
            <div class="item border-right">
                <a href=""><i class="fas fa-tools"></i> Roller Blinds</a>
            </div>
            <div class="item border-right">
                <a href=""><i class="fas fa-tools"></i> Bamboo Blinds</a>
            </div>
            <div class="item border-right">
                <a href=""><i class="fas fa-tools"></i> Vertical Blinds</a>
            </div>
            <div class="item border-right">
                <a href=""><i class="fas fa-tools"></i> Roman Blinds</a>
            </div>
            
        </div>
    </div>
</section>

<section class="bg-pink-g pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shadow bg-white border-radius-99 p-3 text-center">
                    <div class="icon">
                        <i class="fas fa-headphones-alt fa-2x c-pink"></i>
                    </div>
                    <div class="title">24/7 Customer Support</div>
                    <hr>
                    <div class="des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dolorum.</div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="shadow bg-white border-radius-99 p-3 text-center">
                    <div class="icon">
                        <i class="fas fa-coins fa-2x c-pink"></i>
                    </div>
                    <div class="title">30 Days MoneyBack</div>
                    <hr>
                    <div class="des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dolorum.</div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="shadow bg-white border-radius-99 p-3 text-center">
                    <div class="icon">
                        <i class="fas fa-truck fa-2x c-pink"></i>
                    </div>
                    <div class="title">Fastest Delivery</div>
                    <hr>
                    <div class="des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dolorum.</div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="shadow bg-white border-radius-99 p-3 text-center">
                    <div class="icon">
                        <i class="fas fa-border-none fa-2x c-pink"></i>
                    </div>
                    <div class="title">High Quality Fabric</div>
                    <hr>
                    <div class="des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, dolorum.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="alert bg-white shadow font-weight-bold">Curtains</div>
        <div class="owl-carousel cp shadow rounded bg-white p-3">
            
            <div class="item">
                <a href="">
                    <div class="image"><img src="{{ asset('/front/images/curtain.jpeg') }}" alt=""></div>
                    <div class="title text-overflow">Cotton Made Curtains For Home Export Quality</div>
                </a>
            </div>
            <div class="item">
                <a href="">
                    <div class="image"><img src="{{ asset('/front/images/curtain.jpeg') }}" alt=""></div>
                    <div class="title text-overflow">Cotton Made Curtains For Home Export Quality</div>
                </a>
            </div>
            <div class="item">
                <a href="">
                    <div class="image"><img src="{{ asset('/front/images/curtain.jpeg') }}" alt=""></div>
                    <div class="title text-overflow">Cotton Made Curtains For Home Export Quality</div>
                </a>
            </div>
            <div class="item">
                <a href="">
                    <div class="image"><img src="{{ asset('/front/images/curtain.jpeg') }}" alt=""></div>
                    <div class="title text-overflow">Cotton Made Curtains For Home Export Quality</div>
                </a>
            </div>
            <div class="item">
                <a href="">
                    <div class="image"><img src="{{ asset('/front/images/curtain.jpeg') }}" alt=""></div>
                    <div class="title text-overflow">Cotton Made Curtains For Home Export Quality</div>
                </a>
            </div>
            
        </div>
    </div>
</section>
<section class="testimonial pb-5 pt-5 bg-shy">
    <div class="container">
        <h2 class="text-center font-weight-bold">Happy Client's</h2>
        <div class="slider">
            <div class="owl-carousel">
                @foreach($feedbacks as $feedback)
                <div class="item shadow border-radius-99 bg-white">
                    <div class="p-3">
                        <div class="image text-center"><img src="{{asset($feedback->image)}}" alt="Client"></div>
                        <div class="name text-center font-weight-bold c-pink h4">{{ $feedback->name }}</div>
                        <div class="title text-center font-weight-bold">{{ $feedback->work }}</div>
                        <div class="comment text-justify">''{{ $feedback->feedback }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script>
    $(document).ready(function(){
        $("img").lazyload();
    });
</script>
<script>
    var owl = $('.owl-carousel.curtains');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoHeight: false,
        autoHeightClass: 'owl-height',
        nav: false,
        dots: false,
        responsiveClass: true,

        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1000: {
                items: 4,
                loop: true
            },
        }

    });
</script>
<script>
    var owl = $('.owl-carousel.blinds');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoHeight: false,
        autoHeightClass: 'owl-height',
        nav: false,
        dots: false,
        responsiveClass: true,
        rtl:true,

        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1000: {
                items: 4,
                loop: true
            },
        }

    });
</script>
<script>
    var owl = $('.owl-carousel.cp');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoHeight: false,
        autoHeightClass: 'owl-height',
        responsiveClass: true,
        dots: false,
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1000: {
                items: 4,
                loop: true
            },
        }

    });
</script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoHeight: false,
        autoHeightClass: 'owl-height',
        nav: false,
        dots: false,
        responsiveClass: true,

        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1000: {
                items: 3,
                loop: true
            },
        }

    });
</script>
@endsection
