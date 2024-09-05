{{-- new arival --}}
<section id="new-arrivals" class="container mt-2 py-5 ">
    <h2 style="text-align: center;">New Arrivals</h2>
    <p style="text-align: center;">Here's Our New Products</p>
    <hr style="margin-left: 48%;">
      <div class="row">
 
        @foreach ($nextSixCards as $item)
            
        <div class="card mb-4 mx-auto col-lg-3 col-md-4 col-sm-12" style="width: 18rem;">
          <img src="{{asset('storage/'.$item->imagePath)}}" class="card-img-top mt-2" alt="...">
          <div class="detail">
          <div class="card-body">
            <p>{{$item->ptitle}}</p>
            <h5 class="card-title">{{$item->pname}}</h5>
            <div class="star">
            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
              <h5 class="card-title">Rs.{{$item->pprice}}</h5>
          </div>
          <div class="cart">
            <i class="fa fa-cart-plus" aria-hidden="true"></i>
          </div>
        </div>
        </div>

        @endforeach
  
        {{-- <div class="card mb-4 mx-auto col-lg-3 col-md-4 col-sm-12" style="width: 18rem;">
          <img src="images/cristofer-maximilian-AqLIkOzWDAk-unsplash.jpg" class="card-img-top mt-2" alt="...">
          <div class="detail">
          <div class="card-body">
            <p>coach</p>
            <h5 class="card-title">Vest</h5>
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
  
        <div class="card mb-4 mx-auto col-lg-3 col-md-4 col-sm-12" style="width: 18rem;">
          <img src="images/c1.webp" class="card-img-top mt-2" alt="...">
          <div class="detail">
          <div class="card-body">
            <p>coach</p>
            <h5 class="card-title">Long coat</h5>
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
  
        <div class="card mb-4 mx-auto col-lg-3 col-md-4 col-sm-12" style="width: 18rem;">
          <img src="images/f6.jpg" class="card-img-top mt-2" alt="...">
          <div class="detail">
          <div class="card-body">
            <p>coach</p>
            <h5 class="card-title">Dual color shirt</h5>
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
  
        <div class="card mb-4 mx-auto col-lg-3 col-md-4 col-sm-12" style="width: 18rem;">
          <img src="images/f4.jpg" class="card-img-top mt-2" alt="...">
          <div class="detail">
          <div class="card-body">
            <p>coach</p>
            <h5 class="card-title">Jacket</h5>
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
  
        <div class="card mb-4 mx-auto col-lg-3 col-md-4 col-sm-12" style="width: 18rem;">
          <img src="images/watch1.webp" class="card-img-top mt-2" alt="...">
          <div class="detail">
          <div class="card-body">
            <p>coach</p>
            <h5 class="card-title">Watch</h5>
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