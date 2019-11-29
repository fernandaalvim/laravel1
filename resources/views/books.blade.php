<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All books</title>
</head>

<body>

    <h1>Available books</h1>

    <ul>
        @foreach($books as $book)
        <li><a href="/books/detail/{{$book->book_id}}">{{$book->title}}</a></li>
        @endforeach
    </ul>


    <a href="./add">
        <h2>Add a book</h2>
    </a>
</body>

</html>