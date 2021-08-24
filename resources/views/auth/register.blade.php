@extends('layouts.template')

@section('content')

<!-- Subhead
  ================================================== -->
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="centered">
                        <h3>My account</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <!-- Docs nav
  ================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="{{ url('login') }}"><i class="icon-chevron-right"></i> Login</a></li>
                <li class="active"><a href="{{ url('register') }}"><i class="icon-chevron-right"></i> Register</a></li>
            </ul>
        </div>
        <div class="span9">
            <!-- Dropdowns
  ================================================== -->

  <section class="doc">
    <div class="page-header first">
        <h3>Register</h3>
      </div>
    @if(session()->has('loginError'))
    <div class="alert alert-error"> <button type="button" class="close" data-dismiss="alert">×</button> <strong>Warning!</strong> {{ session('loginError') }}
    </div>
    @endif

    <form method="POST" action="{{ route('reg') }}" class="navbar-form pull-left"> 
        <label>{{ __('Name') }}</label> <input type="text" class="search-query" placeholder="type your name.." name="name" autofocus autocomplete="off" required value="{{ old('name') }}"> 
        @error('name')
        <br />
            <small> {{ $message }} </small>
        
        @enderror
        <br /><br />
        <label>{{ __('Email') }}</label> <input type="email" class="search-query" placeholder="example@example.com" name="email" autocomplete="off" required value="{{ old('email') }}"> 
        @error('email')
        <br />
            <small> {{ $message }} </small>
        
        @enderror
        <br /><br />
        <label>{{ __('Password') }}</label> <input type="password" class="search-query" name="password" required> 
        @error('password')
        <br />
            <small> {{ $message }} </small>
        
        @enderror
        <br /><br />
        <div class="flex items-center justify-end mt-4">
        @csrf
        <button type="submit" class="btn">{{ __('Register') }}</button>
    </form>
   
</section>

        </div>
    </div>
</div>

@endsection
