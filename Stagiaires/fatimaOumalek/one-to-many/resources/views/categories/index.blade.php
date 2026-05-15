<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>

<h1>List of Categories</h1>
<table>
<tr>
    <th>id</th>
    <th>name</th>
    <th>description</th>
    <th>details</th>
</tr>
@foreach($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->description}}</td>
        
    <td>
        <a href="/categories/{{ $category->id }}/products">
            detail
        </a>
    </td>
@endforeach

</body>
</html>