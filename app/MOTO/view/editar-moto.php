<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/global.css">
    <title>Editar Moto</title>
</head>
<body>

    <h1>Editar Moto</h1>

    <div class="formulario">
        <form id="formEdicaoMoto" action="#" method="POST">
            <input type="hidden" name="id_moto" id="id_moto">
            
            <label for="marca">Marca:</label>
            <input type="text" name="marca" placeholder="Marca da Moto">

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" placeholder="Modelo da Moto">

            <label for="placa">Placa:</label>
            <input type="text" name="placa" placeholder="placa da Moto">

            <div class="butons">
                <button type="submit" id="salvar" name="salvar">SALVAR</button>
                <button class="listar">
                    <a href="../tela-listar.php">LISTAR</a>
                </button>
            </div>
        </form>
    </div>
    
    <script defer src="../JS/editar-moto.js"></script>
</body>
</html>