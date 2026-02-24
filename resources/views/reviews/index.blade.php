@extends('layouts.app')

@section('title', 'Listar Reviews')

@section('content')

<h2>Lista de Reviews</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Comentario</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reviews as $review)
        <tr>
            <td>
                <!-- An object's ID is connected to display its information. -->
                <a href="{{ route('review.show', $review->id) }}">
                    {{ $review->id }}
                </a>
            </td>
            <td>{{ $review->comment }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('home.index') }}" class="btn btn-secondary mt-3">
    Volver al inicio
</a>

@endsection