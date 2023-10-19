<?php
    $dir = 'http://localhost/PeristanceDAO';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competiciones</title>
    <link rel="stylesheet" href="<?php echo $dir; ?>/assets/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $dir; ?>/index.php">Competiciones</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $dir; ?>/app/equipos.php">Equipos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $dir; ?>//app/partidos.php">Partidos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="<?php echo $dir; ?>/assets/js/bootstrap.js"></script>

