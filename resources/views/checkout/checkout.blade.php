@extends('layouts.template')

@section('content')

<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Checkout</h3>
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
          <article>
            <div class="heading">
              <h4>Order Informations</h4>
            </div>
            <div class="clearfix">
            </div>
            <div class="row">
              <div class="span8">
                <!-- start flexslider -->
               
                    <table class="table">
                        <thead>
                          <tr>
                            <th>
                              Product Name
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($datacheckout as $item)
                            <tr>
                                <td>
                                  {{ $item->name_product }}
                              </tr>
                              <form action="{{ route('checkout.delete') }}" method="POST">
                              <input  type="hidden" name="pdct_id" value="{{ $item->id }}"  />
                            @empty
                                <td>Don't have any records..</td>
                              @endforelse
                          
                        </tbody>
                      </table>
                      
                        
                        <input  type="hidden" name="ses_qty" value="{{ session()->get('quantity') }}" />
                        <input  type="hidden" name="ses_tt" value="{{ session()->get('total') }}" />
                        @csrf
                      <button class="btn btn-success" style="border: 0"><i class="icon-trash"></i> Empty</button>
                    </form>
                    <h3>Shipping Details</h3>
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

              </div>
              <div class="span4">
                <div class="project-widget">
                  <ul class="project-detail">
                    <li><label>Quantity :</label> {{ session()->get('quantity') }}</li>
                    <li><label>Grand Total :</label> ${{ session()->get('total') }}</li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
          <!-- end article full post -->
        </div>
      </div>
    </div>
  </section>
    
@endsection