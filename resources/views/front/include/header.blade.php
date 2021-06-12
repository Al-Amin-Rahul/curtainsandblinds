<section class="top-header bg-white border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="top-header-list flex mb-1 mt-0">
                    <li><span class="pr-3 heading-5"><i class="fas fa-phone"></i> Hotline : +880 00000-00000, +880 00000-00000</span></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="top-header-list flex mb-1 mt-0 justify-content-end">
                    @if(Session::get('customer_id'))
                        <li><a href="{{ route("customer-logout") }}" class="text-decoration-none pr-3 heading-5 "><i class="fas fa-arrow-right"></i>  LogOut</a></li>
                    @endif
                    <li><a href="" class="text-decoration-none heading-5 "><i class=""></i> Login/Register</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="logo">
                    <a class="text-decoration-none" href="/" aria-label="Logo">
                        {{-- <img src="{{ asset("/") }}front/images/weblogo.png"  class="img-fluid shadow-sm" alt=""/> --}}
                        <span class="display-4 font-weight-bolder"><span class="text-dark">BDCurtain</span></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <livewire:search-product />
            </div>
        </div>
    </div>
</section>
<section class="sticky-top nav-bottom shadow-sm bg-pink-g">
    <div class="container">
        <div class="row py-1">
            <div class="col-lg-12">
                <div class="menu">
                    <ul class="nav font-weight-bold justify-content-around bg-white">
                        <li class="nav-link pl-0"><a href="/" class=""><i class="fas fa-home "></i> Home</a></li>
                        @foreach ( App\Category::with('childs')->where('parent_id',0)->get() as $item )
                            @if ($item->childs->count()>0)
                            <li class="nav-link p-menu"><a href="/" class="">{{ $item->category_name }} <i class="fas fa-angle-down"></i></a>
                                <div class="c-menu position-absolute d-none">
                                    <ul class="nav bg-white shadow border-top border-warning">
                                        @foreach ( $item->childs as $child )
                                            <li class="nav-link">{{ $child->category_name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            @else
                            <li class="nav-link p-menu"><a href="/" class="">{{ $item->category_name }}</a>
                            @endif
                        @endforeach
                        <li class="nav-link"><a href="/" class="">Free Consultation</a></li>
                        <li class="nav-link"><a href="/" class="">Ask For Quotation</a></li>
                        <li class="nav-link"><a href="/" class="">Accessories</a></li>
                        <li class="nav-link"><a href="/" class="">Services</a></li>
                        <li class="nav-link pr-0"><a href="/" class="">Book an appointment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>