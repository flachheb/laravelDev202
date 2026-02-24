@extends('layouts.app')

@section('content')
<h2>Contactez-nous</h2>

<p>Formulaire de contact :</p>
<form>
    <label>Nom :</label>
    <input type="text" name="nom"><br><br>

    <label>Email :</label>
    <input type="email" name="email"><br><br>

    <label>Message :</label>
    <textarea name="message"></textarea><br><br>

    <button type="submit">Envoyer</button>
</form>

<p>Adresse : 123 Rue Exemple, Casablanca</p>
<p>Horaires : Lun-Ven 9h-18h</p>
<p>Réseaux sociaux : Facebook | Instagram | Twitter</p>
@endsection