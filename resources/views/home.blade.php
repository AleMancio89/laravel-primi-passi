@extends('layouts.freelancer')

@section('main')

<main>
 <!-- Contact section -->
    <section id="contact">
        <div class="container">
            <h2>CONTACT ME</h2>
                <div id="star_dec_align" class"star_decoration contact">
                    <div class="line l-black"></div>
                    <div class="star">&#9733;</div>
                    <div class="line l-black"></div>
                </div>
                <form>
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email Address">
                    <input type="text" placeholder="Phone Number">
                    <textarea rows="5" placeholder="Message"></textarea>
                    <button class="my-send-button btn btn-default" type="submit">Send</button>
                </form>
        </div>
    </section>
</main>

@endsection