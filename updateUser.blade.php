<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Data List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body style="background: rgb(228, 227, 227); ">
  <nav class="navbar navbar-expand-lg navbar-black  bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: rgb(0, 0, 0); font-size:25px; font-weight:700">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route ('home')}}" style="color: white"><strong>Add Table</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white"><strong>About</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white"><strong>Content</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" style="color: white"><strong>Service</strong></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Type Search" aria-label="Search" required>
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
  <div class="container" style="width:70%;  background: #f0efef; 
  margin-top:3%;  padding: 24px;  border-radius: 9px; box-shadow: 0 0 200px rgba(0, 0, 0, 0.5),
        0 32px 70px -80px rgba(0, 0, 0, 0.5)">

        <h1 class="mb-4" style="font-weight: 800;">Update Data List <span style="font-size: 28px; font-weight: 400;"> &nbsp;( ͡• ͜ʖ ͡• )</span> </h1>
        <form action="{{route ("Update.Data" , $data->id)}}" method="POST">
          @csrf
           <div class="mb-3">
            <label for="form-label" style="font-size: 20px; font-weight:500;">Name</label>
            <input type="text" class="form-control"  value="{{$data->name}}" name="username" style="border: none;
              background-color: #e6e3e3;
            border-radius: 5px;" required>
           </div>
           <div class="mb-3">
            <label for="form-label" style="font-size: 20px; font-weight:500;">Email</label>
            <input type="email" class="form-control" value="{{$data->email}}" name="useremail"  style="border: none; background-color: #e6e3e3; border-radius: 5px;" required>
           </div>
           <div class="mb-3">
            <label for="form-label" style="font-size: 20px; font-weight:500;">Age</label>
            <input type="number" class="form-control"value="{{$data->age}}" name="userage"  style="border: none; background-color: #e6e3e3; border-radius: 5px;" required>
           </div>
        <button  type="submit"   class="btn btn-success mb-3 " style="width: 28%; font-weight:600;">Update</button></a>
        </form> 
    </div>
    <footer class="text-center " style="font-size: 28px; font-weight:600; margin-top:9%;">© MohdHadi72 : ) </footer>
    <hr>
</body>
</html>