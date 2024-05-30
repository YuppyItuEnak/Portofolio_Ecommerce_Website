<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('update_product', $product) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <input type="text" name="name" value="{{ $product->name }}">
        <input type="text" name="description" value="{{ $product->description }}">
        <input type="number" name="price" value="{{ $product->price }}">
        <input type="number" name="stock" value="{{ $product->stock }}">
        <input type="file" name="image">
        <button type="submit">Update</button>
    </form>
</body>

</html>
