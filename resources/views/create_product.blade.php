<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store_product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <br>
        <input type="text" name="description" placeholder="description">
        <br>
        <input type="number" name="price" placeholder="price">
        <br>
        <input type="number" name="stock" placeholder="stock">
        <br>
        <input type="file" name="image" >
        <br>
        <button type="submit">Submit Data</button>
    </form>
</body>
</html>