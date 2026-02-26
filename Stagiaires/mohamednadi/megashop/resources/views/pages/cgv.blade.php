@extends('layouts.app')

@section('content')
    <h1>Conditions Générales de Vente</h1>
    
    <div class="cgv-list">
        @foreach($cgv as $item)
            <div class="cgv-section">
                <h2>{{ $item['id'] }}. {{ $item['title'] }}</h2>
                <p>{{ $item['content'] }}</p>
            </div>
        @endforeach
    </div>
@endsection