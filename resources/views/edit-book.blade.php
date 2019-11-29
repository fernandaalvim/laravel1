<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    <h1>Edit book</h1>

    <form method="POST">
        @csrf
        @method('PUT')
        <label for="title">Book title</label>
        <input type="text" name="title" value="{{$book->title}}" id="">
        <label for="author">Book author</label>
        <input type="text" name="author" value="{{$book->author}}" id="">
        <label for="genre">Book genre</label>
        <input type="text" name="genre" value="{{$book->genre}}" id="">

        <input type="submit" name="submit" value="edit">

    </form>

</body>

</html>