<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Author</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a class="navbar-brand pl-5">Car Store</a>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
    <div class="container mt-5">
        <div class="navbar navbar-expand-lg" style="background-color: #f5f5f5; ">
            <h2> Information Car</h2>
        </div>
        <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/carstores/create'" style="float: right;">Create New</button>
        <table class="table mt-4">
            <thead class="thead-light">
                <th>ID</th>
                <th>Name</th>
                <th>Model</th>
                <th>Company</th>
                <th>Made</th>
                <th>Price</th>
                <!-- <th>Description</th> -->
                <th>Color</th>
                <th>Actions</th>
            </thead>
            @foreach ($data as $store)
            <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>{{$store->model}}</td>
                <td>{{$store->company}}</td>
                <td>{{$store->made}}</td>
                <td>${{$store->price}}</td>
                <!-- <td>{{$store->description}}</td> -->
                <td>{{$store->color}}</td>
                <td>
                    <a href="/carstores/{{ $store->id}}" class="btn btn-primary btn-sm">View</a>
                    <a href="/carstores/{{ $store->id}}/edit" class="btn btn-warning btn-sm">Update</a>
                    <a href="{{url('/studentapp/delete', $store->id)}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</body>
<footer class="page-footer font-small blue pt-4">
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="https://mdbootstrap.com/"> SRUOTserey.com</a>
  </div>
</footer>
</html>