@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<h2>Contactez-nous</h2>
<p>Envoyez-nous un message via le formulaire ci-dessous :</p>
<form>
    <input type="text" placeholder="Nom"><br>
    <input type="email" placeholder="Email"><br>
    <textarea placeholder="Message"></textarea><br>
    <button>Envoyer</button>
</form>
@endsection