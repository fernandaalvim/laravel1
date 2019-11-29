<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a book</title>
</head>

<body>
    <h1>Add a book</h1>

    <form action="" method="post">
        @csrf

        <!-- delete method and action from form and use the following-->

        <input type="text" name="title" placeholder="Book title" id="">
        <input type="text" name="author" placeholder="Book author" id="">
        <input type="text" name="genre" placeholder="Book genre" id="">
        <input type="submit" name="submit" value="send">

    </form>

</body>

</html>