@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: url("../image/img6-full.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .table {
            background-color: rgb(217, 210, 210);

        }

        .row {
            margin-top: 2em;
        }

        .subtitle {
            color: rgb(0, 0, 0);
            text-align: center;
            font-size: xx-large
        }

        .carousel-inner img {
            height: auto;
            /* L'altezza delle immagini si adatterà automaticamente mantenendo l'aspetto originale */
            max-height: 700px;
            /* Imposta un'altezza massima per le immagini */
            width: 100%;
            /* Occupa tutta la larghezza del contenitore */
            margin: auto;
            /* Centra l'immagine all'interno del contenitore */
        }
        .mb-5{
          box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        } 
    </style>

    <header>

        <div class="container">
            @include('alerts')

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('image/1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image//2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



            <div class="row">
                <p class="subtitle">I NOSTRI VINI</p>
                @foreach ($wines as $wine)
                    <div class="col-md-4">
                        <div class="mb-5">


                            <div class="card text-center border border-white grey-border position-relative">
                                <div class="position-absolute top-0 end-0 .bg-danger">
                                    <form action="{{ route('wines.destroy', $wine) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">X</button>
                                    </form>
                                </div>
                                <img class=" mx-auto d-block" width="45%"
                                    src="{{ asset('images/wines/' . $wine->image) }}">
                                <div class="card-body">
                                    <h3 class="card-title fw-bolder">{{ $wine->name }}</h3>
                                    <h4 class="card-text py-2">Tipo di vino: {{ $wine->type }}</h4>
                                    <p class="card-text fs-5">Gusto: {{ $wine->taste }}</p>
                                    <h6 class="card-text">Gradazione: {{ $wine->alcohol_content }}%</h5>
                                        <h6 class="card-text">Annata: {{ $wine->year }}</h6>
                                        <a href="/wines/ {{ $wine->id }}" class="btn btn-outline-secondary my-3">Show
                                            more
                                            info</a></td>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
