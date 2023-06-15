<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Actualizar</h1>
            <form action="<?= base_url('factualizar'); ?>" method="POST">
                <div class="form-group">
                    <input type="number" hidden name="id" value="<?= $conductor['id'] ?>">
                    <label for="exampleInputEmail1">documento</label>
                    <input type="number" class="form-control" id="documento" name="documento" value="<?= $conductor['documento'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $conductor['nombre'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $conductor['apellido'] ?>" required aria-describedby="emailHelp">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="<?= $conductor['telefono'] ?>" required aria-describedby="emailHelp">

                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tipo de documento</label>
                    <br>
                    <select name="TipoDocumento" id="TipoDocumento">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="<?= $usuario['TipoDocumento'] ?>">CC</option>
                    <option value="<?= $usuario['TipoDocumento'] ?>">TI</option>
                    <option value="<?= $usuario['TipoDocumento'] ?>">CE</option>
                 </select>

                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

</body>

</html>