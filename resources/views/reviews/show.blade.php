@extends('layouts.app')

@section('title', 'Detalle Review')

@section('content')

<h2>Detalle de la Review</h2>

<ul>
    <li><strong>ID:</strong> {{ $review->id }}</li>
    <li><strong>Comentario:</strong> {{ $review->comment }}</li>
    <li><strong>Puntaje:</strong> {{ $review->score }}</li>
    <li><strong>Creado:</strong> {{ $review->created_at }}</li>
    <li><strong>Actualizado:</strong> {{ $review->updated_at }}</li>
</ul>

<br>

<a href="{{ route('review.index') }}" class="btn btn-secondary">
    Volver a la lista
</a>

<form action="{{ route('review.destroy', $review->id) }}" method="POST" style="margin-top: 15px;">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">
        Eliminar Review
    </button>
</form>

@endsection