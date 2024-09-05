{{-- featured --}}

<section id="featured" class="container mt-2 py-5 ">
  <h2 style="text-align: center;">Featured Product</h2>
  <p style="text-align: center;">summer collection & new modern design</p>
  <hr style="margin-left: 48%;">
    <div class="row">
    @foreach ( $firstSixCards as $card)
      <div class="card mb-4 mx-auto col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
        <img src="{{ asset('storage/' . $card->imagePath) }}" class="card-img-top mt-2" alt="...">
        <div class="detail">
        <div class="card-body">
          <p>{{$card->ptitle}}</p>
          <h5 class="card-title">{{$card->pname}}</h5>
          <div class="star">
          <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </div>
            <h5 class="card-title">Rs.{{$card->pprice}}</h5>
        </div>
        <div class="cart">
          <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>
      </div>
      </div>

      @endforeach

      {{-- <div class="card mb-4 mx-auto col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
        <img src="images/f1.jpg" class="card-img-top mt-2" alt="...">
        <div class="detail">
        <div class="card-body">
          <p>coach</p>
          <h5 class="card-title">White shirt</h5>
          <div class="star">
          <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </div>
            <h5 class="card-title">Rs.1000</h5>
        </div>
        <div class="cart">
          <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>
      </div>
      </div>

      <div class="card mb-4 mx-auto col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
        <img src="images/f2 (1).jpg" class="card-img-top mt-2" alt="...">
        <div class="detail">
        <div class="card-body">
          <p>coach</p>
          <h5 class="card-title">Designed shirt</h5>
          <div class="star">
          <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </div>
            <h5 class="card-title">Rs.1000</h5>
        </div>
        <div class="cart">
          <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>
      </div>
      </div> --}}
      </div>
    {{-- <div class="row">
      <div class="card mb-4 mx-auto col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
        <img src="images/f3.jpg" class="card-img-top mt-2" alt="...">
        <div class="detail">
        <div class="card-body">
          <p>coach</p>
          <h5 class="card-title">Track pant</h5>
          <div class="star">
          <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </div>
            <h5 class="card-title">Rs.1000</h5>
        </div>
        <div class="cart">
          <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>
      </div>
      </div>

      <div class="card mb-4 mx-auto col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
        <img src="images/n7.jpg" class="card-img-top mt-2" alt="...">
        <div class="detail">
        <div class="card-body">
          <p>coach</p>
          <h5 class="card-title">standard shirt</h5>
          <div class="star">
          <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </div>
            <h5 class="card-title">Rs.1000</h5>
        </div>
        <div class="cart">
          <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>
      </div>
      </div>

      <div class="card mb-4 mx-auto col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
        <img src="images/f8.jpg" class="card-img-top mt-2" alt="...">
        <div class="detail">
        <div class="card-body">
          <p>coach</p>
          <h5 class="card-title">ladies vest</h5>
          <div class="star">
          <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </div>
            <h5 class="card-title">Rs.1000</h5>
        </div>
        <div class="cart">
          <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>
      </div>
      </div> --}}
      
    </div>
 </section >

