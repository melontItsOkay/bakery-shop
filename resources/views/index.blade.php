@extends('layouts.template')

@section('content')

<section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <!-- slider navigation -->
        <div class="sequence-nav">
          <div class="prev">
            <span></span>
          </div>
          <div class="next">
            <span></span>
          </div>
        </div>
        <!-- end slider navigation -->
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <!-- Layer 1 -->
                  <li>
                    <div class="info animate-in">
                      <h2>Free Delivery</h2>
                      <br>
                      <h3>Minimum Order Above</h3>
                      <p>
                        Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                      </p>
                      <a class="btn btn-success" href="#">Learn more &raquo;</a>
                    </div>
                    <img class="slider_img animate-in" src="{{ url('assets/img/cookie2.png') }}" alt="">
                  </li>
                  <!-- Layer 2 -->
                  <li>
                    <div class="info">
                      <h2>Buy 2 Discount 30%</h2>
                      <br>
                      <h3>Code Promo: KDOSSD</h3>
                      <p>
                        Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                      </p>
                      <a class="btn btn-success" href="#">Get Now &raquo;</a>
                    </div>
                    <img class="slider_img" src="{{ url('assets/img/cookie1.jpg') }}" alt="">
                  </li>
                </ul>
              </div>
            </div>
            <!-- Sequence Slider::END-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">

      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="btn-toolbar cta">
                  @Auth
                  <h1>Hi, {{ auth()->user()->name }}</h1>
                  <a class="btn btn-large btn-color" href="{{ url('my-account') }}">
                    <i class="icon-user icon-white"></i> Go to Profile
                  </a>
                  <a class="btn btn-large btn-color" href="{{ url('logout') }}">
                    <i class="icon-signout icon-white"></i> Logout
                  </a>
                  @else
                  <a class="btn btn-large btn-color" href="{{ url('register') }}">
                    <i class="icon-gift icon-white"></i> Sign up now and earn rewards.
                              </a>
                        <a class="btn btn-large btn-inverse" href="{{ url('login') }}">
                    <i class="icon-shopping-cart icon-white"></i> Sign in now and start shopping.
                        </a>
                  @endAuth
                  
                </div>
              </div>
            </div>
          </div>
          <!-- end tagline -->
        </div>
      </div>
      <div class="row">
        <div class="home-posts">
          <div class="span12">
            <h3>Favorite Products</h3>
          </div>
          @foreach ($favorite as $item)
              
          <div class="span3">
            <div class="post-image">
              <a href="product/{{ $item['slug'] }}">
					<img src="assets/product_img/{{ $item['img'] }}" alt="{{ $item['name_product'] }}" style="width: 300px; height: 140px;">
					</a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-shopping-cart left"></i></a>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="product/{{ $item['slug'] }}">
                <h5 class="title">{{ $item['name_product'] }}</h5>
              </a>
              <p>
                {{ $item['description'] }}
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>

          @endforeach
          
          
      </div>
    </div>
  </section>

@endsection