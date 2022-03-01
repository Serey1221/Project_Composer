<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Store</title>
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
<div class="container">
    <nav class="navbar navbar-expand-lg mt-4" style="background-color: #f5f5f5; ">
    <h2> Edit Author</h2>
    </nav>
    <form action="{{ route('carstores.update',$store->id)}}" method="POST" class="row justify-content-center">
        @csrf
        @method("PUT")
        <div class="col-lg-6">
            <div class="m-2">
                    <div class="form-group ">
                        <label class="" for="name">Name</label>
                        <input class="form-control" type="text" placeholder="Enter name" 
                            name="name" id="name" value="{{$store->model}}"/>
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label class="" for="model">Model</label>
                        <input class="form-control" type="text" placeholder="Enter Model" 
                            name="model" id="model" value="{{ old('model') }}" />
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label class="" for="company">Company</label>
                        <input class="form-control" type="company" placeholder="Enter company" 
                            name="company" id="company" value="{{$store->company}}" />
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label  for="made">Made</label>
                        <input class="form-control" type="text" placeholder="made by" 
                            name="made" id="made" value="{{$store->made}}"/>
                    </div>
                </div>
        </div>
        <div class="col-lg-6">
                <div class="m-2">
                    <div class="form-group">
                        <label  for="price">Price</label>
                        <input class="form-control" type="text" placeholder="Enter price" 
                            name="price" id="price" value="{{$store->price}}" />
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label  for="description">Description</label>
                        <textarea class="form-control" type="text" placeholder="Enter description" 
                            name="description" id="description" value="{{$store->description}}" ></textarea>
                    </div>
                </div>
                <div class="m-2">
                    <div class="form-group">
                        <label  for="color">Color</label>
                        <input class="form-control" type="text" placeholder="Enter color" 
                            name="color" id="color" value="{{$store->color}}" />
                    </div>
                </div>
                    <div class="m-2 ">
                        <input class="btn btn-warning" type="submit" value="Update">
                        <a class="btn btn-info" href="/carstores">Back</a>
                    </div>
            </div>
    </form> 
</div>
</body>
<footer class="page-footer font-small blue pt-4">
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="https://mdbootstrap.com/"> SRUOTserey.com</a>
  </div>
</footer>
</html>