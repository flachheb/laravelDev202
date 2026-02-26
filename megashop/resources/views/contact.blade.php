@extends('layouts.app')

@section('content')

<h2>Contactez-nous</h2>

<form>
    <label>Nom :</label>
    <input type="text" name="nom"><br><br>

    <label>Email :</label>
    <input type="email" name="email"><br><br>

    <label>Message :</label>
    <textarea name="message"></textarea><br><br>

    <button type="submit">Envoyer</button>
</form>

<hr>

<h3>Nos coordonnées :</h3>

<p><strong>Adresse :</strong> {{ $contact['adresse'] }}</p>
<p><strong>Horaires :</strong> {{ $contact['horaires'] }}</p>
<p><strong>Email :</strong> {{ $contact['email'] }}</p>
<p><strong>Téléphone :</strong> {{ $contact['telephone'] }}</p>

<h4>Réseaux sociaux :</h4>
<ul>
@foreach($contact['reseaux'] as $reseau)
    <li>{{ $reseau }}</li>
@endforeach
</ul>

@endsection