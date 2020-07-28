@extends('layouts.app')

@section('title')
    Product
@endsection

@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('../images/bg_1.png');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('/')}}">Home</a></span> <span class="mr-2"><a href="{{URL::to('/shop')}}">Products</a></span> <span>Product</span></p>
          <h1 class="mb-0 bread">{{$product->title}}</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 mb-5 ftco-animate">
                <img src= "../images/{{$product->imagePath}}" alt="..." class="img-fluid" alt="Colorlib Template">
              </div>
              <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                  <h3>{{$product->title}}</h3>

                  <p class="price"><span>$ {{$product->price}}/kg</span></p>
                  <p>{{$product->description}}</p><br><h6>Please copy the ID code, before you order</h6>
                      <div class="row mt-4">
                          <div class="col-md-6">
                              <div class="form-group d-flex">
                    <div class="select-wrap">
                      
                      <br>
                      
                      <h4>Product ID: {{$product->idnumber}}</h4>


                  </div>
                  </div>
                          
            <br>
            <p><a href="{{URL::to('/order')}}" class="btn btn-black py-3 px-5">Order</a></p>
              </div>
          </div>
      </div>
  </section>



@endsection
