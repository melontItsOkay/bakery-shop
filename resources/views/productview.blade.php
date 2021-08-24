@extends('layouts.template')

@section('content')

<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>
  </section>
  <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="{{ url('/') }}">Home</a><span class="divider">/</span></li>
            <li class="active">{{ $viewproduct['name_product'] }}</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span8">
          <!-- start article full post -->
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">{{ $viewproduct['name_product'] }}</a></h3>
            </div>
            <div class="clearfix">
            </div>
            <img src="{{ url('assets/product_img/'.$viewproduct['img']) }}" alt="" />
           
              
            <div class="clearfix">
            </div>
            
          </article>
          <!-- end article full post -->
          <div class="tabbable"> <!-- Only required for left/right tabs --> 
            <ul class="nav nav-tabs"> 
                <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                <li><a href="#tab2" data-toggle="tab">Reviews</a></li>
            </ul> 
            <div class="tab-content"> 
                <div class="tab-pane active" id="tab1"> 
                    <p>{{ $viewproduct['description'] }}</p> 
                </div>
                <div class="tab-pane" id="tab2">
                  <div class="media-body">

                    

                    @forelse ($review as $item)
                    
                    <h5 class="media-heading">{{ $item->name }}</h5>
                    <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                    </p>
                    @empty
                    
                    <p>No Review :)</p>

                    @endforelse
                    
                  </div>
                </div>
            </div> 
        </div>

        <div class="clearfix">
        </div>

        </div>

        <div class="span4">
          <aside>
            <i class="icon-money"></i><span>{{ $viewproduct['total_sold'] }} Sales</span>
            <div class="widget">
              <h4 class="price">Product Price: ${{ $viewproduct['price'] }}</h4>
            </div>
            <div class="widget">
              <p>Processing Days: {{ $viewproduct['process_delivery'] }} days</p>
              <p>Stock: {{ $viewproduct['stock'] }}</p>
            </div>
            <div class="widget">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                          <td>
                            Quantity:
                          </td>
                          <td>
                            <button type="submit" class="minus btn" data-id="1">-</button> <input type="text" class="txt qty input-small search-query text-center" id="qty1" value="0"> <button type="submit" class="plus btn"  data-id="1">+</button>
                            <input type="hidden" name="price" class="txt price" id="price1" value="{{ $viewproduct['price'] }}" />
                          </td>
                        </tr>
                        <tr>
                            <td>
                            Total:
                            </td>
                            <td>
                                <span id="total1">$0</span>
                            </td>
                          </tr>
                    </tbody>
                </table>
                @Auth
                <p> <button class="btn btn-success btn-large btn-primary" type="button">Checkout Now</button> <button class="btn btn-danger btn-large" type="button"><i class="icon-heart-empty"></i></button> </p>
                @else
                <h5>Please <b><a href="{{ url('login') }}">login</a></b> first before checkout.</h5>
                @endAuth
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>

@endsection