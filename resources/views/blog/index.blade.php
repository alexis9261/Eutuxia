@extends('home.main_plantilla')

@section('title')
<title>Blog</title>
@endsection

@section('content')
<!-- hero -->
<section class="hero hero-with-header bg-light separator-bottom">
  <div class="container">
    <div class="row justify-content-center">
    <div class="col text-center">
        <h1>Latest Blog Posts</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/inner-pages.html">Inner Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Tiles</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>    
</section>
<!-- / hero -->


<!-- right sidebar -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <ul class="masonry row gutter-2">
          <li class="col-md-6">
            <article class="tile">
              <div class="tile-image" style="background-image: url({{asset('imagen/image-1.jpg')}})"></div>
              <a href="" class="tile-content">
                <div class="tile-footer">
                  <span class="eyebrow mb-1">Design</span>
                  <h3>Quick guide on traveling with friends.</h3>
                </div>
              </a>
            </article>
          </li>
          <li class="col-md-6">
            <article class="tile tile-long">
              <div class="tile-image" style="background-image: url({{asset('imagen/image-2.jpg')}})"></div>
              <a href="" class="tile-content">
                <div class="tile-footer">
                  <span class="eyebrow mb-1">Design</span>
                  <h3>Quick guide on traveling with friends.</h3>
                </div>
              </a>
            </article>
          </li>
          <li class="col-md-6">
            <article class="tile tile-long">
              <div class="tile-image" style="background-image: url({{asset('imagen/image-3.jpg')}})"></div>
              <a href="" class="tile-content">
                <div class="tile-footer">
                  <span class="eyebrow mb-1">Design</span>
                  <h3>Quick guide on traveling with friends.</h3>
                </div>
              </a>
            </article>
          </li>
          <li class="col-md-6">
            <article class="tile">
              <div class="tile-image" style="background-image: url({{asset('imagen/image-4.jpg')}})"></div>
              <a href="" class="tile-content">
                <div class="tile-footer">
                  <span class="eyebrow mb-1">Design</span>
                  <h3>Quick guide on traveling with friends.</h3>
                </div>
              </a>
            </article>
          </li>
        </ul>
      </div> 
      <aside class="col-md-4 pl-md-4">
        <div class="widget">
          <span class="widget-title">Categories</span>
          <div class="list-group list-group-categories">
            <a href="" class="list-group-item d-flex justify-content-between align-items-center">
              Cras justo odio
              <span class="badge">14</span>
            </a>
            <a href="" class="list-group-item d-flex justify-content-between align-items-center">
              Dapibus ac facilisis in
              <span class="badge">2</span>
            </a>
            <a href="" class="list-group-item d-flex justify-content-between align-items-center">
              Morbi leo risus
              <span class="badge">1</span>
            </a>
          </div>
        </div>
        <div class="widget">
          <span class="widget-title">Latest News</span>
          <ul class="feed">
            <li>
              <a href="" class="feed-item">
                <img src="{{asset('imagen/image-1.jpg')}}" alt="Image">
                <div class="feed-item-content">
                  <h3>Top 10 most beautifull beaches of mediteranian sea</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="feed-item">
                <img src="{{asset('imagen/image-2.jpg')}}" alt="Image">
                <div class="feed-item-content">
                  <h3>Amazing views of Paradise Bay</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="feed-item">
                <img src="{{asset('imagen/image-3.jpg')}}" alt="Image">
                <div class="feed-item-content">
                  <h3>Amazing views of Paradise Bay</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="feed-item">
                <img src="{{asset('imagen/image-4.jpg')}}" alt="Image">
                <div class="feed-item-content">
                  <h3>Amazing views of Paradise Bay</h3>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="widget">
          <span class="widget-title">Tags</span>
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
      </aside>
    </div>
  </div>
</section>
<!-- / right sidebar -->

@endsection