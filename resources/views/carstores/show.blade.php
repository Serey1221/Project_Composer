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
    <style>
        .card{
             background-color:#eef0f0;
              padding: 40px;
              max-width:600px;
              margin:40px auto;
              border-radius:$br;
              box-shadow:0 4px 10px 4px rgba(#f0f2f2,.3);
        }
    </style>
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
        <div class="card m-2">
            <nav class="navbar" style="background-color: #f5f5f5; ">
            <h2>Information Car</h2>
            <button class="btn btn-success mt-2 mb-2" onclick="window.location.href='/carstores/create'" style="float: right;">Create New</button>
            </nav>
            <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-2">ID</dt>
                            <dd class="col-sm-10">: {{ $store->id}}</dd>
                        <dt class="col-sm-2">Name</dt>
                            <dd class="col-sm-10">: {{ $store->name}}</dd>
                        <dt class="col-sm-2">Model</dt>
                            <dd class="col-sm-10">: {{ $store->model}}</dd>
                        <dt class="col-sm-2">Company</dt>
                            <dd class="col-sm-10">: {{ $store->company}}</dd>
                        <dt class="col-sm-2">Made</dt>
                            <dd class="col-sm-10">:{{ $store->made}}</dd>
                        <dt class="col-sm-2">Price</dt>
                            <dd class="col-sm-10">: {{ $store->price}}</dd>
                        <dt class="col-sm-2">Description</dt>
                            <dd class="col-sm-10">: {{ $store->description}}</dd>
                        <dt class="col-sm-2">Color</dt>
                            <dd class="col-sm-10">: {{ $store->color}}</dd>
                    </dl>
            </div>
            <div>
                <a href="{{route('carstores.edit',$store->id) }}" class="btn btn-warning rounded-left">Update</a>

                <a href="{{route('carstores.index') }}" class="btn btn-secondary rounded-right">Back to Home</a>
            </div>
        </div>
    </div>
</body>
<footer class="page-footer font-small blue pt-4">
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="https://mdbootstrap.com/"> SRUOTserey.com</a>
  </div>
</footer>
</html>