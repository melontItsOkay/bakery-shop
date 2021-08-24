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

            <section class="doc">
                <div class="page-header first">
                    <p>You don't have records transaction.</p>
                </div>
            </section>

        </div>
    </div>
</div>


@endsection