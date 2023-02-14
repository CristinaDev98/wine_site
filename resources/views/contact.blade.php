@extends('layouts.app')

@section('content')

<style>
    body {
        background-image: url("../image/bc-contact.webp");
    }

    section {
        background-color: rgba(255, 255, 255, 0.576);
    }

    html {
        height: -webkit-fill-available;
    }

    div.row {
        margin: 0 2em 0 2em;
    }

    .text-center li {
        margin-top: 2em;
    }
</style>
    


<div class="container">
    @include('errors')
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Need more info</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>
    
        <div class="row">
    
            <!--Grid column-->
            <div class="mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
    
                    <!--Grid row-->
                    <div class="row">
    
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0 pb-2">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                                
                            </div>
                        </div>
                        <!--Grid column-->
    
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0 pb-2">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Your E-mail">
                                
                            </div>
                        </div>
                        <!--Grid column-->
    
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12 pb-2">
                            <div class="md-form">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                                
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class="row">
    
                        <!--Grid column-->
                        <div>
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message"></textarea>
                                
                            </div>
                    </div>
                </form>
                <!--Grid row-->
                    <div class="text-center text-md-left">
                        <a href="#" style="margin-top: 5em;" class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">
                            <span>Invia</span>
                            <div class="liquid"></div>
                          </a>
                    </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Via Roma 25, RO 10126, IT</p>
                    </li>
    
                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+39 234 567 89</p>
                    </li>
    
                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>wine@prova.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
    
        </div>
    
    </section>

</div>

@endsection