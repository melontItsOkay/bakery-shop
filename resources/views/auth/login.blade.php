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
            <li class="active"><a href="{{ url('login') }}"><i class="icon-chevron-right"></i> Login</a></li>
            <li><a href="{{ url('register') }}"><i class="icon-chevron-right"></i> Register</a></li>
        </ul>
    </div>
    <div class="span9">
        <!-- Dropdowns
  ================================================== -->
        <section class="doc">
            <div class="page-header first">
                <h3>Login</h3>
              </div>
            @if(session()->has('registerSuccess'))
            <div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> <strong>Congratulation!</strong> {{ session('registerSuccess') }}
            </div>
            @endif
              
            @if(session()->has('loginError'))
            <div class="alert alert-error"> <button type="button" class="close" data-dismiss="alert">×</button> <strong>Warning!</strong> {{ session('loginError') }}
            </div>
            @endif

            <form method="POST" action="{{ route('auth') }}" class="navbar-form pull-left"> 
                <label>{{ __('Email') }}</label> <input type="email" class="search-query" placeholder="example@example.com" name="email" autofocus autocomplete="off" required value="{{ old('email') }}"> 
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
                <input type="checkbox" name="remember_me" {{ old('remember_me') ? 'checked' : '' }}> {{ __('Remember Me') }}
                @csrf
                <button type="submit" class="btn pull-right">{{ __('Log in') }}</button>
            </form>
           
        </section>
        
    </div>
</div>
</div>

@endsection