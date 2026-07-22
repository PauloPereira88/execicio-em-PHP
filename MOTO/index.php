<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veiculo</title>
</head>
<body>

    <h1>Cadastro de Veiculo</h1>
    <form id="FormCadastro">
        <label for="marca">Marca</label>
        <input type="text" name="marca" placeholder="Marca do Veiculo">

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" placeholder="Modelo do Veiculo">

        <label for="placa">Placa</label>
        <input type="text" name="placa" placeholder="placa do veiculo">

        <button name="REQUEST_METHOD" type="submit">ENVIAR</button>
        <button type="reset">LIMPAR</button>
    </form>
    
    <script src="cadastro.js"></script>
</body>
</html>