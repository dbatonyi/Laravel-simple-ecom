@extends('layouts.app')

@section('title')
    Shop
@endsection
<?php
    $all_products = DB::table('products')
                ->get();
?>

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.png');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('/')}}">Home</a></span> <span>Shop</span></p>
          <h1 class="mb-0 bread">Shop</h1>
        </div>
      </div>
    </div>
  </div>
<section class="ftco-section">
    <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Featured Products</span>
        <h2 class="mb-4">Our Products</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
      </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
                @foreach ($all_products as $product)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ URL::to('/product/'.$product->id)}}" class="img-prod"><img class="img-fluid" src="../images/{{$product->imagePath}}" alt="Colorlib Template">

                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="{{ URL::to('/product/'.$product->id)}}">{{$product->title}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">$ {{$product->price}}/kg</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="{{ URL::to('/product/'.$product->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="{{ URL::to('/product/'.$product->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection