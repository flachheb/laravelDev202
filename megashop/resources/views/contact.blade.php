@extends('layouts.app')

@section('content')
<h2>Contactez-nous 💌</h2>

<form action="#" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nom" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <textarea name="message" placeholder="Votre message..." required></textarea><br><br>
    <button type="submit">Envoyer 💗</button>
</form>
@endsection