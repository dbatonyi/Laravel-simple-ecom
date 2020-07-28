@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.png');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p>
          <h1 class="mb-0 bread">About us</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
          <div class="container">
              <div class="row">
                  <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
                      <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                          <span class="icon-play"></span>
                      </a>
                  </div>
                  <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section-bold mb-4 mt-md-5">
                <div class="ml-md-0">
                  <h2 class="mb-4">Welcome to Flowery website</h2>
              </div>
            </div>
            <div class="pb-md-5">
                <p>Lorem, ipsum dolor sitinctt numquam labore quos modi nemo eos alias. Architecto autem quidem ipsam consequuntur placeat impedit ullam doloremque commodi praesentium. Doloremque saepe ratione in nisi eum sint temporibus sapiente consectetur molestias maiores corrupti corporis, animi expedita dolorem neque itaque accusamus deleniti, perspiciatis numquam quo sunt! Deserunt minus quisquam magni doloribus sequi officiis eius eum sapiente soluta ex ab debitis iure nam facere nisi quia, accusantium amet sit cum dolores libero laboriosam consequuntur? Reprehenderit saepe facilis iste magnam quisquam nam nesciunt vel modi explicabo nihil exercitationem, eum dolor? Adipisci, fugiat natus.</p>
                          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit eum et amet, doloremque earum ducimus est voluptates adipisci. Exercitationem officiis nemo quasi cupiditate accusantium beatae laboriosam asperiores perspiciatis mollitia quae ea aspernatur assumenda quaerat fugit placeat soluta animi inventore, illo, officia aperiam. Necessitatibus tempore, assumenda quod asperiores optio magnam accusantium!</p>
                          <br><p><a href="{{URL::to('/shop')}}" class="btn btn-primary">Shop now</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </section>


@endsection
