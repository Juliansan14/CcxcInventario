<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../resources/css/App.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <title>Ccxc</title>
</head>

<body class="bd-login">

<div>
    <div class="br-centersmall">
      <h1 class="tt-login"><strong>Bienvenidos ccxc</strong></h1>
      <div>
        <form action="{{url('start')}}">
          <div class="form-group first">
            <label>Correo electronico:</label>
            <input type="text" placeholder="name@example.com" class="form-control">
          </div>
          <div class="form-group last mb-4">
            <label>Contraseña:</label>
            <input type="password" placeholder="**********" class="form-control">
          </div>
      </div>
      <hr>
      @if($confirm != null)
      <label>{{$confirm}}</label>
      @endif
      <hr>      
     <input type="submit" class="btn btn-outline-primary" value="Iniciar sesion">     
      </form>
      <a href="{{url('/create')}}"><button class="btn btn-outline-success">Registrarse</button></a>
      <div>
        <span class="ml-auto"><a href="{{url('resetPassword')}}" class="forgot-pass">Olvide la contraseña</a></span>
      </div>
    </div>
  </div>
  
</html>