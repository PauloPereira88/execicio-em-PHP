<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/global.css">
    <title>Editar Carro</title>
</head>
<body>

    <h1>Editar Carro</h1>

    <div class="formulario">
        <form id="formEdicaoCarro" action="#" method="POST">
            <input type="hidden" name="id_carro" id="id_carro">
            
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" placeholder="Marca da Moto">

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" placeholder="Modelo da Moto">

            <label for="placa">Placa:</label>
            <input type="text" id="placa" name="placa" placeholder="placa da Moto">

            <div class="butons">
                <button type="submit" id="salvar" name="salvar">SALVAR</button>
                <button class="listar">
                    <a href="../tela-listar.php">LISTAR</a>
                </button>
            </div>
        </form>
    </div>
    
    <script defer src="../JS/editar-carro.js"></script>
</body>
</html>