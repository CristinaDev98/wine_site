@extends('layouts.app')

@section('content')

<div class="container">

<table class="table wine">
    <thead>
        <th>ID</th><th>Name</th><th>Type</th><th>Taste</th><th>Alcohol content</th><th>Year</th><th>Image</th><th>Edit</th><th>Delete</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ $wine->id }}</td>
            <td>{{ $wine->name }}</td>
            <td>{{ $wine->type }}</td>
            <td>{{ $wine->taste }}</td>
            <td>{{ $wine->alcohol_content }}</td>
            <td>{{ $wine->year }}</td>
            <td><img src="{{ asset('image/wines/' . $wine->image) }}" class="img-thumbnail w-25"></td>
            <td><a href="/wines/ {{ $wine->id }} /edit" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('wines.destroy', $wine) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
</div>

@endsection