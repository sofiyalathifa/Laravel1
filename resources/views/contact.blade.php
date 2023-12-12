@extends('layouts.main')
@section('content')
<div id="heading"  style="background: lightgray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content">
                    <h2>Contact Us</h2>
                    <span>Home / <a href="contact-us.html">Contact Us</a></span>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="product-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>Feel free to send a message</h2>
                    <img src="images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <div id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="product-item col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="message-form">
                                    <form action="{{ route('contact.send')}}" method="POST" class="send-message">
                                        @csrf
                                        <div class="row">
                                        <div class="name col-md-4">
                                            <input type="text" name="name" id="name" placeholder="Name" />
                                        </div>
                                        <div class="email col-md-4">
                                            <input type="text" name="email" id="email" placeholder="Email" />
                                        </div>
                                        <div class="subject col-md-4">
                                            <input type="text" name="subject" id="subject" placeholder="Subject" />
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="text col-md-12">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="send">
                                            <button type="submit">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <p>Duis at pharetra neque, ut condimentum, purus nisl pretium quam, in pulvinar velit massa id elit. </p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>+62 82145786512</li>
                                        <li><i class="fa fa-globe"></i>Trenggalek, 6604, INDONESIA</li>
                                        <li><i class="fa fa-envelope"></i>anytrip@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>Find Us On Map</h2>
                    <img src="images/under-heading.png" alt="" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.4446869103876!2d111.71097837500778!3d-8.056040091971452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791b2b0606b7a5%3A0x4a928b26bb669a9b!2sSMKN%202%20Trenggalek!5e0!3m2!1sid!2sid!4v1701363598228!5m2!1sid!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="googleMap" style="height:340px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection
