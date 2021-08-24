@extends('layouts.template')

@section('content')

<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Enjoy Shopping</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="filter">
            <li class="all active"><a href="#" class="btn btn-color">All categories</a></li>
            @foreach ($category as $item)    
            <li class="{{ Str::slug($item['id'], '-') }}"><a href="#" class="btn btn-color">{{ $item['category_name'] }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="row">
        <ul class="portfolio-area da-thumbs" id="post-data">

               @include('data')
          
        </ul>
      </div>
      <div class="row">
        <div class="span12">
          <div class="ajax-load pagination" style="display: none">
            <p class="text-center">Load more data....</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection