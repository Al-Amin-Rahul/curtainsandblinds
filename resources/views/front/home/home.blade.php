@extends('front.master')

@section('title')DubaiSaifCurtain - Home @endsection

@section('meta')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Blue-Slider CSS -->
<link rel="stylesheet" href="{{ asset('front/blue-slider/css/blue.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/blue-slider/css/fontello.css') }}">
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
{{-- Image and Video Slider  --}}
<section class="pt-5 pb-5">
    <div class="container">
        <div class="alert bg-white shadow font-weight-bold">Gallery</div>
        <div class="slider-container first-sample">
            <div class="slider">
              <div class="item"><img src="{{ asset('/front/images/curtain.jpeg') }}" alt=""></div>
              <div class="item"><img src="{{ asset('/front/images/curtain2.jpg') }}" alt=""></div>
              <div class="item"><img src="{{ asset('/front/images/curtain.jpeg') }}" alt=""></div>
              <div class="item"><img src="{{ asset('/front/images/curtain2.jpg') }}" alt=""></div>
              <div class="item"><img src="{{ asset('/front/images/curtain.jpeg') }}" alt=""></div>
              <div class="item"><img src="{{ asset('/front/images/curtain2.jpg') }}" alt=""></div>
              <div class="item"><img src="{{ asset('/front/images/curtain.jpeg') }}" alt=""></div>
            </div>
            <i class="left-open-big-icon prev-slide"></i>
            <i class="right-open-big-icon next-slide"></i>
          </div>
    </div>
</section>
{{-- product slider  --}}
<section class="pb-5">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script>
    $(document).ready(function(){
        $("img").lazyload();
    });
</script>
<!-- Blue-Slider JS -->
<script src="{{ asset('front/blue-slider/js/blue-slider.js') }}"></script>
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
            },
        }

    });
</script>
<script>
    $(document).ready(function(){
	$(document).ready(function() {
  $('.first-sample .slider').blue_slider({
    // slide_template: '1fr 2fr 1fr',
    // slide_template: '1fr 1fr',
    // slide_template: '1fr',
    slide_template: '1fr 4fr (2,1fr) .5fr',
    current_fr_index: 2,
    current_fr_index_flow: false,
    // speed: 500,
    // ease_function: 'cubic-bezier(.32,.38,.16,.98)',
    // slide_step: 1,
    current_fr_class: 'my-fr-current',
    active_fr_class: 'my-fr-active',
    custom_fr_class: '       fr-1         fr-2        fr-3    ',
    // left_padding: 100,
    // right_padding: 100,
    slide_gap: 10,
    // speed: 1000,
    ease_function: 'ease-in-out',
    sencitive_drag: 100,
    loop: false,
    auto_play: true,
    auto_play_period: 5000,
    start_slide_index: 0,
    arrows: true,
    prev_arrow: '.first-sample .prev-slide',
    next_arrow: '.first-sample .next-slide',
  });
});
});
</script>
@endsection
