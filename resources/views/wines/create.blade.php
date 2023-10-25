@extends('layouts.app')

@section('content')

<style>

    html {
        height: -webkit-fill-available;
    }

    form {
        text-align: center;
    }

    .form-control {
        width: 10cm;
        margin: auto;
        margin-bottom: 1.5em;
        margin-top: .5em;
        text-align: center;
        
    }

    input, input::placeholder {
        width: 10cm;
        margin: 1.5em;
        text-align: center;
    }

    input {
        border-right: none;
        border-top: none;
        border-left: none;
        background-color: transparent;
        outline: none;
        color: rgb(15, 15, 15);
        caret-color: white;
        font-weight: 600;
    }
</style>

<div class="container">
    @include('errors')
<form action="{{ route('wines.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="text" name="name" placeholder="name">
    </div>
    <div>
        <input type="text" name="type" placeholder="type">
    </div>
        <input type="text" name="taste" placeholder="taste">
    <div>
        <input type="number" name="alcohol_content" placeholder="alcohol_content">
    </div>
        <input type="number" name="year" placeholder="year">
    <div>
        <label for="image" class="mt-3">Image</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>
    <div>
        <x-button-create/>    
    </div>
</form>
</div>
@endsection