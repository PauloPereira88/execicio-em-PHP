<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Veiculo</title>
</head>
<body>

    <h1>Cadastro de Veiculos PESADOS</h1>
    <div class="veiculos">
        <div class="carro">
            <a href="../CARRO/index.php"><span>CARRO</span></a>
        </div>
        <div class="moto">
            <a href="../index1.php"><span>MOTO</span></a>
        </div>
        <div class="tipo">
            <a href="index2.php"><span>Tipo</span></a>
        </div>
    </div>

    <div class="formulario">
        <form id="FormCadastro">
            <label for="tipo">Tipo:</label>
            <select name="tipo" id="tipo">
                <option value="van">Vans</option>
                <option value="micro_onibus">Micro-Onibus</option>
                <option value="onibus">Onibus</option>
            </select>

            <label for="marca">Marca:</label>
            <input type="text" name="marca" placeholder="Marca da Moto">

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" placeholder="Modelo da Moto">

            <label for="lugares">Lugares:</label>
            <input type="number" name="lugares" placeholder="Quantidade de Lugares">

            <button name="REQUEST_METHOD" type="submit">ENVIAR</button>
        </form>
    </div>
    
    <script src="cadastro.js"></script>
</body>
</html>