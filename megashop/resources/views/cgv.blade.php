@extends('layouts.app')

@section('content')

<h2>Conditions Générales de Vente</h2>

@foreach($sections as $index => $section)
    <h4>{{ $index + 1 }}. {{ $section }}</h4>
    <p>Contenu de la section {{ $section }}...</p>
@endforeach

@endsection