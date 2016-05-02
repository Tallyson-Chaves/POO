<?php

$id = $_GET['id'];

require_once 'classes/cliente.php';

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
            <table class="table table-condensed">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Celular</th>
                </thead>
                <tbody>
                    <th scope="row"><?php echo $id ?></th>
                    <td><?php echo $cliente->getDados($id, 0) ?></td>
                    <td><?php echo $cliente->getDados($id, 1) ?></td>
                    <td><?php echo $cliente->getDados($id, 2) ?></td>
                    <td><?php echo $cliente->getDados($id, 3) ?></td>
                </tbody>
            </table>
            <center><a class="btn btn-primary btn-lg" href="index.php">Voltar</a></center>
        </div>
    </body>
</html>