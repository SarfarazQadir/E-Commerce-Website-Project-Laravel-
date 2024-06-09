@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('main')
@section('product')
  
      <!-- product section -->
      <section class="product_section layout_padding">
        <div class="container">
           <div class="heading_container heading_center">
              <h2>
                 Our <span>products</span>
              </h2>
           </div>
           <div class="row">
               @foreach ($prod as $p)
               <div class="col-sm-6 col-md-4 col-lg-4">
                   <div class="box">
                       <div class="option_container">
               <form action="{{route("cart", $p->id)}}" method="POST" >
                @csrf
                       <div class="options">
                          <a href="" class="option1">
                            {{ $p->name}}
                          </a>
                          <input type="number" value="{{ $p->qty}}" min="1" name="qty" id="">
                          <button class="btn btn-dark">Add to Cart</button>
                       </div>
                    </div>
                    <div class="img-box">
                        <img src="{{ asset('product/' . $p->image ) }}" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                        {{ $p->des}}
                       </h5>
                       <h6>
                        {{ $p->price}}
                       </h6>
                    </div>
                </div>
              </div>   
            </form>
              @endforeach
              {{-- <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p2.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Men's Shirt
                       </h5>
                       <h6>
                          $80
                       </h6>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p3.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Women's Dress
                       </h5>
                       <h6>
                          $68
                       </h6>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p4.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Women's Dress
                       </h5>
                       <h6>
                          $70
                       </h6>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p5.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Women's Dress
                       </h5>
                       <h6>
                          $75
                       </h6>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p6.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Women's Dress
                       </h5>
                       <h6>
                          $58
                       </h6>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p7.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Women's Dress
                       </h5>
                       <h6>
                          $80
                       </h6>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p8.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Men's Shirt
                       </h5>
                       <h6>
                          $65
                       </h6>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p9.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Men's Shirt
                       </h5>
                       <h6>
                          $65
                       </h6>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p10.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Men's Shirt
                       </h5>
                       <h6>
                          $65
                       </h6>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p11.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Men's Shirt
                       </h5>
                       <h6>
                          $65
                       </h6>
                    </div>
                 </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1">
                          Add To Cart
                          </a>
                          <a href="" class="option2">
                          Buy Now
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                       <img src="images/p12.png" alt="">
                    </div>
                    <div class="detail-box">
                       <h5>
                          Women's Dress
                       </h5>
                       <h6>
                          $65
                       </h6>
                    </div> --}}
                 </div>
              </div>
           </div>
           <div class="btn-box">
              <a href="">
              View All products
              </a>
           </div>
        </div>
     </section>
     <!-- end product section -->

@endsection
