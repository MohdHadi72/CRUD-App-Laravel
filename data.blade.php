<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Data</title>
</head>
<body>

  <h1>User  Data</h1>

  @foreach ($data as $id => $users )
  <tr>
    <h3>Name :  {{ $users->name  }}</h3>
    <h3>Email  :   {{ $users->email  }}</h3>
    <h3>Age  :  {{ $users->age  }}</h3>
  </tr>
    
  @endforeach

  
</body>
</html>