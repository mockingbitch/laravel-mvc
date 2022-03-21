<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        @csrf 
        <input type="text" name="name" placeholder="name">
        <input type="text" name="description" placeholder="description">
        <input type="numbder" name="price" placeholder="price">
        <input type="submit"/>
    </form>
    <a href="{{route('listProduct')}}">List</a>
</body>
</html>