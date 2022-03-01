<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Author</title>
</head>
<body>
    <h2>Do You want to delete author?</h2>
    <form action="/carstores/{{$store->id}}" method="post">
        @csrf
        @method("DELETE")
        <input type="submit" value="Delete" />
    </form>
</body>
</html>