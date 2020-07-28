@extends('layouts.app')

@section('content')
<div class="container">
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/bg_1.png);">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-md-12 ftco-animate text-center">
                <h1 class="mb-2">We serve exotic spices &amp; Herbs</h1>
                <h2 class="subheading mb-4">We deliver organic Herbs &amp; spices to your house</h2>
                <p><a href="{{URL::to('/shop')}}" id="singular" class="btn btn-primary">View the products</a></p>
              </div>

            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">100% Organic &amp; Quality Spices</h1>
                <h2 class="subheading mb-4">We deliver organic Herbs &amp; spices to your house</h2>
                <p><a href="{{URL::to('/shop')}}" id="singular" class="btn btn-primary">View the products</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
  </section>

  <br>

  <section class="ftco-section">
          <div class="container">
              <div class="row no-gutters ftco-services">
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-shipped"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Free Shipping</h3>
              <span>On order over $100</span>
            </div>
          </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-diet"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Always Fresh</h3>
              <span>Product well package</span>
            </div>
          </div>    
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-award"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Superior Quality</h3>
              <span>Quality Products</span>
            </div>
          </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Support</h3>
              <span>24/7 Support</span>
            </div>
          </div>      
        </div>
      </div>
          </div>
      </section>
      <br>
      <section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
                <div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
              <span class="subheading">Best Price For You</span>
            <h2 class="mb-4">Deal of the day</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, iste.</p>
            <h3><a href="{{URL::to('/shop')}}">Basil</a></h3>
            <span class="price">$11 <a href="{{URL::to('/shop')}}">now $9 only</a></span>
            
          </div>
        </div>   		
        </div>
    </section>
<br>
<br>
      <section class="ftco-section ftco-category ftco-no-pt">
          <div class="container" id="spice">
              <div class="row">
                  <div class="col-md-8">
                      <div class="row">
                          <div class="col-md-6 order-md-last align-items-stretch d-flex">
                              <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
                                  <div class="text text-center">
                                      <h2>Spices & Herbs</h2>
                                      <p>Protect the health of every home</p>
                                      <p><a href="{{URL::to('/shop')}}" class="btn btn-primary">Shop now</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);">
                                  <div class="text px-3 py-1">
                                      <h2 class="mb-0"><a href="{{URL::to('/shop')}}">Herbs</a></h2>
                                  </div>
                              </div>
                              <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-2.jpg);">
                                  <div class="text px-3 py-1">
                                      <h2 class="mb-0"><a href="{{URL::to('/shop')}}">Spices</a></h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);">
                          <div class="text px-3 py-1">
                              <h2 class="mb-0"><a href="{{URL::to('/shop')}}">Mushrooms</a></h2>
                          </div>		
                      </div>
                      <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
                          <div class="text px-3 py-1">
                              <h2 class="mb-0"><a href="{{URL::to('/shop')}}">Dried</a></h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

        
</div>
@endsection
