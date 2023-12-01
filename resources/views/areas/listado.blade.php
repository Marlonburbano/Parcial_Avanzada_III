<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Areas</title>
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

            </ul>
          </div>
        </div>
      </nav>
</head>
<body>
    <h1>Listado de areas</h1>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id Area</th>
            <th scope="col">Nombre de Area</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp

        @foreach($are as $a)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$a->idArea}}</td>
            <td>{{$a->descripcionarea}}</td>

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
