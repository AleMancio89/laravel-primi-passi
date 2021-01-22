@extends('layouts.freelancer')

@section('main')

<main>

 <!-- About section -->
    <section id="about">
        <div class="container">
            <h2>ABOUT</h2>
            <div class"star_decoration">
                <div class="line l-white"></div>
                <div class="star">&#9733;</div>
                <div class="line l-white"></div>
            </div>
            <div class="row">
                <div class="col-xs-offset-2 col-xs-8 col-md-offset-2 col-md-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <div class="col-xs-offset-2 col-xs-8 col-md-offset-0 col-md-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
            </div>
            <button type="button" class="my-download-button btn btn-default btn-lg">
                <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Download
            </button>
        </div>
    </section>


</main>

@endsection