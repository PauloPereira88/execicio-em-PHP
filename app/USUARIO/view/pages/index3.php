<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <title>Cadastro de Usuarios</title>
</head>
<body>

    <h1>Cadastro de Usuarios</h1>
    <div class="veiculos">
        <div class="carro">
            <a href="../CARRO/index.php"><span>CARRO</span></a>
        </div>
        <div class="moto">
            <a href="../MOTO/index1.php"><span>MOTO</span></a>
        </div>
        <div class="tipo">
            <a href="../ONIBUS/index2.php"><span>Tipo</span></a>
        </div>
        <div class="usuario">
            <a href="index3.php"><span>Usuario</span></a>
        </div>
        <div class="animal">
            <a href="../ANIMAL/index4.php"><span>Animal</span></a>
        </div>
    </div>

    <div class="formulario">
        <form id="FormCadastro">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Nome Usuario">

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" placeholder="Cidade do Usuario">

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="Telefone do Usuario">

            <div class="butons">
                <button type="submit">ENVIAR</button>
                <button type="reset">LIMPAR</button>
                <a href="./tela-listar.php">LISTAR</a>
            </div>

        </form>
    </div>
    
    <script src="../../JS/cadastro.js"></script>
</body>
</html>