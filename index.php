<?php
require_once 'classes/cliente.php';

$ord = $_GET['id'];

$cliente = new Cliente();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de Clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/dist/js/bootstrap.js">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container corpo">
            <h1 class="page-header">Lista de Clientes</h1>
            <div class="list-group">
                <?php if ($ord==0): ?>
                    <?php $i = 0; while ($i <= 9): ?>
                    <?php $link="pagina.php?id=".$i;?>
                        <a class="list-group-item" href="<?php echo $link;?>"><?php echo $cliente->getDados($i, 0)?></a>
                    <?php $link="pagina.php?id=".$i;$i++ ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <?php $i = 9; while ($i >= 0): ?>
                    <?php $link="pagina.php?id=".$i;?>
                        <a class="list-group-item" href="<?php echo $link;?>"><?php echo $cliente->getDados($i, 0)?></a>
                    <?php $link="pagina.php?id=".$i;$i-- ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
                <?php if ($ord==0): ?>
                    <center><a class="btn btn-primary btn-lg" href="index.php?id=1">Ordernar descendente</a></center>
                <?php else: ?>
                    <center><a class="btn btn-primary btn-lg" href="index.php?id=0">Ordernar ascendente</a></center>
                <?php endif; ?>
        </div>
    </body>
</html>