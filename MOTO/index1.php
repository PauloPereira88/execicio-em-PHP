<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Veiculo</title>
</head>
<body>

    <h1>Cadastro de MOTO</h1>
    <div class="veiculos">
        <div class="carro">
            <a href="../CARRO/index.php"><span>CARRO</span></a>
        </div>
        <div class="moto">
            <a href="index1.php"><span>MOTO</span></a>
        </div>
    </div>

    <div class="formulario">
        <form id="FormCadastro">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" placeholder="Marca da Moto">

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" placeholder="Modelo da Moto">

            <label for="placa">Placa:</label>
            <input type="text" name="placa" placeholder="placa da Moto">

            <button name="REQUEST_METHOD" type="submit">ENVIAR</button>
        </form>
    </div>
    
    <script src="cadastro.js"></script>
</body>
</html>