<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  
</head>
<body>
    <x-master title="Profiles - MegaShop">
        <h1>Ajouter Profile</h1>
        <form action={{route('store')}} method="POST">
            @csrf
            <label style="color: aliceblue">Name :
            <input name="name" class="form-control" type="text">
            </label><br>
            <label style="color: aliceblue">Email :
            <input name="email" type="email">
            </label><br>
            <label style="color: aliceblue">Password :
            <input name="password" type="password">
            </label><br>
            
            <label style="color: aliceblue">Bio :
                <textarea name="bio" id="" cols="30" rows="2"></textarea>
            </label><br>
            <label style="color: aliceblue">Image :
            <input name="image" type="file">
            </label><br>
            <button class="btn" type="submit">Create</button>
        </form>
    </x-master>
</body>