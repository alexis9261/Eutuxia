@extends('home.main_plantilla')

@section('title')
<title>Blog</title>
@endsection


@section('content')
<!-- cover -->
<section class="p-0">
  <div class="swiper-container text-white"
    data-top-top="transform: translateY(0px);" 
    data-top-bottom="transform: translateY(250px);">
    <div class="swiper-wrapper">
      <div class="swiper-slide vh-100">
        <div class="image image-overlay image-zoom" style="background-image:url({{asset('imagen/image-6.jpg')}})"></div>
        <div class="caption">
          <div class="container">
            <div class="row align-items-center vh-100">
              <div class="col-md-8" data-swiper-parallax-y="-250%">
                <span class="eyebrow mb-2">Travel</span>
                <h1 class="display-2">The best places for coffee in Stockholm</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-footer mb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col text-center">
              <div class="mouse"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / cover -->



<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium fugiat harum ex dolor ea ut commodi iste, cupiditate libero magnam alias numquam natus ipsum sint accusamus eligendi laboriosam consequuntur tenetur.</p>
        <hr class="w-25">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ducimus, quaerat esse numquam delectus minus odit expedita atque maiores illo. Quasi dolore pariatur magni accusamus totam error sunt nesciunt explicabo.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi officiis earum recusandae iure, animi repudiandae blanditiis consectetur nihil id voluptas est ullam doloremque impedit officia nesciunt, minima dolores aspernatur a.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8 text-white">
        <blockquote class="blockquote blockquote-2 bg-primary">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed cupiditate exercitationem quisquam. Saepe, dolor illum amet voluptatem modi voluptatibus, nemo earum eligendi deleniti sit facere quae cum assumenda voluptate, iure.</p>
          <footer class="blockquote-footer">Michael Doe</footer>
        </blockquote>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ducimus, quaerat esse numquam delectus minus odit expedita atque maiores illo. Quasi dolore pariatur magni accusamus totam error sunt nesciunt explicabo.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi officiis earum recusandae iure, animi repudiandae blanditiis consectetur nihil id voluptas est ullam doloremque impedit officia nesciunt, minima dolores aspernatur a.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="owl-carousel owl-carousel-single" data-dots="true" data-nav="true" data-autoplay="true">
          <figure class="photo">
            <img src="{{asset('imagen/coworking-1.jpg')}}" alt="Image">
          </figure>
          <figure class="photo">
            <img src="{{asset('imagen/coworking-2.jpg')}}" alt="Image">
          </figure>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vero molestias odit voluptatem eum sit, laboriosam tempora officiis, ullam eaque modi beatae voluptate incidunt consequatur assumenda perferendis unde natus hic!</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="tag-cloud">
          <a href="">Design</a>
          <a href="">Development</a>
          <a href="">Travel</a>
          <a href="">Web Design</a>
          <a href="">Marketing</a>
          <a href="">Research</a>
          <a href="">Managment</a>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- news -->
<section class="bg-light separator-top">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Latest News</h2>
      </div>
    </div>
    <div class="row gutter-2">
      <div class="col-md-6 col-lg-4">
        <article class="tile">
          <div class="tile-image" style="background-image: url({{asset('imagen/image-square-1.jpg')}})"></div>
          <a href="" class="tile-content">
            <div class="tile-header">
              <span class="eyebrow mb-1">Design</span>
              <h3>Quick guide on traveling with friends.</h3>
            </div>
            <div class="tile-footer">
              <button class="btn btn-ico btn-outline-white btn-rounded">
                <i class="icon-arrow-right2 fs-20"></i>
              </button>
            </div>
          </a>
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="tile">
          <div class="tile-image" style="background-image: url({{asset('imagen/image-square-2.jpg')}})"></div>
          <a href="" class="tile-content">
            <div class="tile-header">
              <span class="eyebrow mb-1">Design</span>
              <h3>Quick guide on traveling with friends.</h3>
            </div>
            <div class="tile-footer">
              <button class="btn btn-ico btn-outline-white btn-rounded">
                <i class="icon-arrow-right2 fs-20"></i>
              </button>
            </div>
          </a>
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="tile">
          <div class="tile-image" style="background-image: url({{asset('imagen/image-square-3.jpg')}})"></div>
          <a href="" class="tile-content">
            <div class="tile-header">
              <span class="eyebrow mb-1">Design</span>
              <h3>Quick guide on traveling with friends.</h3>
            </div>
            <div class="tile-footer">
              <button class="btn btn-ico btn-outline-white btn-rounded">
                <i class="icon-arrow-right2 fs-20"></i>
              </button>
            </div>
          </a>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- / news -->

@endsection