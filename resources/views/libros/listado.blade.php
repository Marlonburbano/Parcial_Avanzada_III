<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>libros</title>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">libreria</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/davidalvear/libros">Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/davidalvear/areas">Areas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/marlonburbano/presentacion">Descripcion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</head>
<body>
    <h1>Listado de libros</h1>


<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">ISBN</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Genero Literario</th>
        <th scope="col">Precion Unitario</th>
        <th scope="col">Observacion</th>
        <th scope="col">Foto</th>
        <th scope="col">Area</th>

        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp

        @foreach($lib as $l)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$l->ISBN}}</td>
            <td>{{$l->nombre}}</td>
            <td>{{$l->descripcion}}</td>
            <td>{{$l->generoLiterario}}</td>
            <td>{{$l->precioUnitario}}</td>
            <td>{{$l->observacion}}</td>
            <td><img src="/imagen/{{$l->foto}}" class="card-img-top" width="100px" height="100px" alt="..."></td>
            <td>{{$l->descripcionarea}}</td>
            <td>
            <a type="button" class="btn btn-primary">editar</a>
                <a href="" class="btn btn-danger">eliminar</a>
            </td>
            @php
            $i= $i+ 1;
            @endphp
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>




