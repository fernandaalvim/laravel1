<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Detail Page</title>
</head>

<body>

    <h1> Book Detail </h1>
    <p>
        <strong> Title: </strong> {{$book->title}}
        <br>
        <strong> Author: </strong> {{ $book->author }}
        <br>
        <strong> Genre: </strong> {{ $book->genre }}

        <br>
        <a href="../edit/{{$book->book_id}}">Edit</a>
        <br>
        <a href="../delete/{{$book->book_id}}">Delete</a>
    </p>



</body>

</html>