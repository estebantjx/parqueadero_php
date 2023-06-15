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
                    <input type="number" hidden name="id" value="<?= $vehiculo['id'] ?>">
                    <label for="exampleInputEmail1">marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="<?= $vehiculo['marca'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" value="<?= $vehiculo['placa'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?= $vehiculo['modelo'] ?>" required aria-describedby="emailHelp">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">espacios</label>
                    <input type="text" class="form-control" id="espacios" name="espacios" value="<?= $vehiculo['espacios'] ?>" required aria-describedby="emailHelp">

                </div>
                <br>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

</body>

</html>