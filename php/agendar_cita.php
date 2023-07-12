<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="imagenes/icono.svg">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Agendar</title>
</head>
<body>
    <header class="barra-navegacion">
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">MediFam</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="noticias.html">Noticias</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="especialidades.html">Especialidades</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
      <div class="container-fluid col-lg-9">
        <br><br>
        <form action="php/registro.php" class="formulario" id="formulario" method="post">
          <fieldset>
            <div class="estilo-titulo-formulario">
              <legend style="padding-left: 20px; color: black;">Ingrese la información solicitada</legend><p></p>
            </div>
            <div class="container-fluid col-lg-7">
              <p style="padding-left: 10px; color: red;">Asegurese de que su información sea correcta!</p>
              <div class="form-group">
                <label for="correElec" class="form-label mt-4">Ingrese su correo electrónico</label>
                <input type="email" class="form-control" id="correElecIngr" name="correo" aria-describedby="emailHelp" placeholder="ejemplo@ejm.com">
              </div>
              <div class="form-group">
                <label for="nombresIngr" class="form-label mt-4">Ingrese sus nombres</label>
                <input type="text" class="form-control" name="nombre" id="nombresIngr">
              </div>
              <div class="form-group">
                <label for="apellidosIngr" class="form-label mt-4">Ingrese sus apellidos</label>
                <input type="text" class="form-control" name="apellido" id="apellidosIngr">
              </div>
              <div class="form-group">
                <label for="cedulaIngr" class="form-label mt-4">Ingrese su cédula de identidad</label>
                <input type="text" class="form-control" name="ci" id="cedulaIngr">
              </div>
              <div class="form-group">
                <label for="telefonoIngr" class="form-label mt-4">Ingrese su número de teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefonoIngr" placeholder="099999999 o 022222222">
              </div>
              <div class="form-group">
                <label for="especialidadSelect" class="form-label mt-4">Seleccione la especialidad en la que quiere ser atendido</label>
                <select class="form-select" name="especialidad" id="especialidadSelect">
                  <option>Cardiología</option>
                  <option>Neurología</option>
                  <option>Podología</option>
                  <option>Medicina General</option>
                  <option>Odontología</option>
                  <option>Ginecología y Obstetricia</option>
                  <option>Pediatría</option>
                </select>
              </div>
              <div class="form-group">
                <label for="especialidadSelect" class="form-label mt-4">Seleccione la hora de la cita médica</label>
                <select class="form-select" name="horario" id="especialidadSelect">
                  <option>8:00</option>
                  <option>9:00</option>
                  <option>10:00</option>
                  <option>11:00</option>
                  <option>12:00</option>
                  <option>14:00</option>
                  <option>15:00</option>
                  <option>16:00</option>
                  <option>17:00</option>
                </select>
              </div>
              <br>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" id="btn-enviar">Enviar</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </section>

    <script src="js/validacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>