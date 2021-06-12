<div class="side-cart" id="showCart">
    <!-- cart button  -->
<a id="cartOpenBtn">
    <section class="cart-view bg-white shadow rounded-pill d-flex" id="main">
        <div class="icon text-center p-3">
            <span><i class="fas fa-shopping-cart fa-2x text-dark"></i></span>
        </div>
        <div class="bg-pink-g text-center text-dark font-weight-bold rounded-pill px-3">{{ Cart::count() }} <br>Items</div>
    </section>
</a>
<!-- cart area hidden -->
<div id="cartArea" class="cartbar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="container-fluid">
        @if(Cart::count() != 0)
        <div class="row">
            <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table bg-white shadow rounded" width="100%">
                            @php($sum=0)
                            @foreach(Cart::content() as $cartItem)
                            <tbody class="shadow">
                                <td class="pr-0">{{ $cartItem->name }}</td>
                                <td class="pl-0"><img src="{{asset( $cartItem->options->image )}}" width="50" alt=""></td>
                                <td class="px-0">
                                    <form action="{{ route("cart-update") }}" method="POST" id="updateCart">
                                        @csrf
                                        <input type="number" name="cart_qty" value="{{ $cartItem->qty }}" class="mr-1" style="width:30px;">
                                        <input type="hidden" name="row_id" value="{{ $cartItem->rowId }}">
                                        <input type="submit" value="Update" name="cart_update" class="btn btn-dark small p-1">
                                    </form>
                                </td>
                                <td class="px-0">{{ $cartItem->price }} <i class="fas fa-times"></i> {{ $cartItem->qty }} = {{ $total   =   $cartItem->qty * $cartItem->price }}</td>
                                @if(Route::currentRouteName() === 'checkout.index' || Route::currentRouteName() === 'buy-now')
                                @else
                                    <td>
                                        <form action="{{url("remove-cart")}}" method="post" id="removeForm">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $cartItem->rowId }}">
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are your sure')"><span class="fas fa-times"></span></button>
                                        </form>
                                    </td>
                                @endif
                            </tbody>
                            @php($sum = $sum+$total)
                            @endforeach
                            {{ Session::put('totalPrice', $sum) }}
                        </table>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="shadow rounded table-responsive">
                        <table class="table bg-white">
                            <thead>
                                <th class="">Total</th>
                                <th class="">{{ Cart::priceTotal() }}</th>
                            </thead>
                            <tbody>
                                <tr><td colspan="2" class="text-center">
                                        <a href="{{route('checkout.index')}}" class="btn btn-deepblue text-white border-radius-99">Checkout <i class="fas fa-arrow-right"></i></a>
                                </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="alert alert-warning">
            Cart is Empty ! Add Some Products First
        </div>
        @endif
    </div>
</div>
<div id="cartShow" data-url="{{ url('show-cart') }}"></div>