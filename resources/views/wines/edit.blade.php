@extends('layouts.app')

@section('content')

<div class="container">
    @include('errors')
<form action="{{ route('wines.update', $wine) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $wine->name }}">
    <div>
        <input type="text" name="type" value="{{ $wine->type }}">
    </div>
    <div>
    <input type="text" name="taste" value="{{ $wine->taste }}">
    </div>
    <div>
    <input type="number" name="alcohol_content" value="{{ $wine->alcohol_content }}">
    </div>
    <input type="number" name="year" value="{{ $wine->year }}">
    <div>
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <button type="submit">Invia</button>

</form>
</div>
@endsection