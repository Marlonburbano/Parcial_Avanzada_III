<!DOCTYPE html>
<html>
<head>
    <title>Descripción de la Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


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
    <h1>Descripción de la Tienda</h1>
    <p>{{ $descripcion }}</p>



        <div class="carousel-item active">
            <img src="https://thumbs.dreamstime.com/z/un-mont%C3%B3n-de-libros-libro-abierto-y-l%C3%A1piz-suministros-escolares-objetos-dibujos-animados-vectoriales-aislados-en-fondo-blanco-192812588.jpg" class="d-block w-100" alt="...">
        </div>





    <style>
        body{
            background: rgb(255,255,255);
            background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(167,203,167,1) 87%);
            text-align: center;
        }
        h1{
            text-align: center;
            color: rgb(57, 159, 237);
        }
        p{
            text-align: center;
            font-size: 25px;
        }

    </style>
</body>
</html>
