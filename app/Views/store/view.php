<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.css">
    <title>Productos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?=base_url()?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('/new')?>">Agregar</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <div class="container">
        <div class="card mx-auto border-dark mb-3 mt-5" style="max-width: 40rem;">
            <div class="card-header"><?=$model->nombre?></div>
            <div class="card-body">
                <h4 class="card-title">Marca: <?=$model->marca?></h4>
                <p class="card-text"><?=$model->descripcion?></p>
            </div>
            <div class="card-footer text-muted">
                Precio: <?=$model->precio?>
            </div>
        </div>
    </div>
</body>
</html>