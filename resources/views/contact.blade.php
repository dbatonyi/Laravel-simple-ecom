@extends('layouts.app')

@section('title')
    Order
@endsection

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.png');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Order</span></p>
        <h1 class="mb-0 bread">Order</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">
      <div class="row d-flex mb-5 contact-info">
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
          <div class="info bg-white p-4">
            <p><span>Address:</span> <a href="#"> Dózsa György út 42., Budapest </a></p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
          <div class="info bg-white p-4">
            <p><span>Phone:</span> <a href="#">+36 454 58 88</a></p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
          <div class="info bg-white p-4">
            <p><span>Email:</span> <a href="#">info@flowery.com</a></p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
          <div class="info bg-white p-4">
            <p><span>Website</span> <a href="#">flowery.com</a></p>
          </div>
      </div>
    </div>
    

<form method="post" action="{{ route('contact-form-submit')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
          
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          
        </div>
        <div class="form-group">
            <label for="subject">Shipping address</label>
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
          
        </div>
        <div class="form-group">
            <label for="message">Product ID</label>
            <input type="text" class="form-control" id="message" name="message" placeholder="Enter product ID" required>
        </div>

        <div class="form-group">
          <label for="number">Quantity (kg)</label>
          <select class="form-control" name="number" id="number" required>
            <option>1 kg</option>
            <option>2 kg</option>
            <option>3 kg</option>
            <option>4 kg</option>
            <option>5 kg</option>
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary"> Submit</button>
      </form>
    

     
    
</section>
@endsection