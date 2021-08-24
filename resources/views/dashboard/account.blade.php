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
        @include('dashboard.sidebar')
        <div class="span9">
            <!-- Dropdowns
  ================================================== -->
            <section class="doc">
                <div class="page-header first">
                    <p>Update your Profile Informations.</p>
                </div>
               
                @if(session()->has('SuccessUpdate'))
                <div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> <strong>Congratulation!</strong> {{ session('SuccessUpdate') }}
                </div>
                @endif
           

                <form method="POST" action="{{ route('dashboard.update') }}" class="navbar-form pull-left">
                    <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                            <input class="input-xlarge" type="text" id="name" name="name"
                                value="{{ auth()->user()->name }}">
                                @error('name')
                                <br />
                                    <small> {{ $message }} </small>
                                
                                @enderror
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input class="input-xlarge" type="email" id="email" name="email"
                                value="{{ auth()->user()->email }}" readonly>
                                @error('email')
                                <br />
                                    <small> {{ $message }} </small>
                                
                                @enderror
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="mobile">Mobile Number</label>
                        <div class="controls">
                        <input class="input-xlarge" type="text" id="mobile" name="mobile"
                                value="{{ auth()->user()->phone_number }}">
                                @error('mobile')
                                <br />
                                    <small> {{ $message }} </small>
                                
                                @enderror
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">
                            <textarea id="address" name="address" style="width: 269px" rows="4">{{ auth()->user()->address }}</textarea>
                                @error('address')
                                <br />
                                    <small> {{ $message }} </small>
                                
                                @enderror
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="postcode">Postal Code</label>
                        <div class="controls">
                            <input class="input-xlarge" type="text" id="postcode" name="postcode"
                                value="{{ auth()->user()->postcode }}">
                                @error('postcode')
                                <br />
                                    <small> {{ $message }} </small>
                                
                                @enderror
                        </div>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">Update</button>
                        
                </form>

            </section>

        </div>
    </div>
</div>

@endsection
