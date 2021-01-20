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
  <div class="br-centerbig">
    <h1 class="tt-login"><strong>Resgristrate!</strong></h1>
    <h3><strong>Datos personales</strong></h3>
    <form action="{{url('/store)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
      <div>
        <div class="row">
          <div class="col-3 mb-1">
            <label>Nombre:</label>
            <input type="text" class="form-control"  id="name" name="name" placeholder="Nombre Completo">
          </div>
          <div class="col-3 mb-1">
            <label>Apellido:</label>
            <input type="text" class="form-control"id="lastname" name="lastname" placeholder="Apellidos Completos">
          </div>
          <div class="col-3 mb-1">
            <label>tipo de documento:</label>
            <select id="type_id" name="type_id" class="form-control">
              <option selected>Seleccione tipo de documento</option>
              <option values="C.c">Cédula de ciudadanía</option>
              <option values="C.e">Cédula de extranjería</option>
              <option values="T.i">Tarjeta de identidad</option>
            </select>
          </div>
          <div class="col-3 mb-1">
            <label>Numero de documentos:</label>
            <input type="number" id="number_id" name="number_id" class="form-control" placeholder="12345689">
          </div>
          <div class="col-3 mb-1">
            <label>Fecha de nacimiento:</label>
            <input type="date" id="birthdate" name="birthdate" class="form-control">
          </div>
          <div class="form-row">
            <div class="col-4 mb-1">
              <label>Correo Electronico:</label>
              <input type="email" id="email" name="email" placeholder="example@example.com" class="form-control">
            </div>
            <div class="col-md-3 mb-1">
              <label>Contraseña:</label>
              <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="col-md-3 mb-1">
              <label>Confirmar Contraseña:</label>
              <input type="password" id="passwordConfirm" name="passwordConfirm" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-2 mb-1">
              <label>ciudad:</label>
              <select id="city" name="city" class="form-control">
                <option selected>ciudad</option>
              </select>
            </div>
            <div class="col-2 mb-1">
              <label id="location" name="location">Localidad:</label>
              <select class="form-control">
                <option selected>localidad donde se ubica</option>
              </select>
            </div>
            <div class="col-2 mb-1">
              <label>Tipo de vivienda:</label>
              <select id="type_housing" name="type_housing" class="form-control">
                <option selected>vivienda</option>
                <option values="casa de barrio">casa de barrio</option>
                <option values="casa de conjunto">casa de conjunto</option>
                <option values="apartamento">apartamento</option>
              </select>
            </div>
            <div class="col-3 mb-1">
            <label>Direccion:</label>
            <input type="text" id="direction" name="direction" class="form-control" placeholder="direccion del hogar">
          </div>
          <div class="col-3 mb-1">
            <label>Nombre del conjunto o edificio:</label>
            <input type="text" id="aditional" name="aditional" class="form-control" placeholder="nombre,casa,edificio o torre">
          </div>
          </div>
        </div>
      </div>
      <br>
      <hr>
      <hr>
      <div>
        <input type="submit" class="btn btn-outline-primary" value="registrarse">
    </form>
      <a href=""><input type="button" class="btn btn-outline-danger" value="cancelar"></a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>