<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>atividade-19-11</title>
</head>
<body>
    <div>
        <ul>
            <li><a href="">Contatos</a></li>
            <li><a href="">Projetos</a></li>
            <li><a href="">Sobre</a></li>
            <li><a href="">Menu</a></li>
        </ul>
    </div>
    <div class="section">
    <img src="img/imagem1.jpg" alt="">
    <form action="#">
        <h2>Formulário</h2>
        <label for="fname">Nome Completo</label><br>
        <input type="text" id="fname" name="fname" value="Renato Cariani"><br>
        <label for="lname">Cidade</label><br>
        <input type="text" id="lname" name="lname" value="Xique-Xique-BA"><br>
        <label for="telefone">Digite seu telefone: </label><br>
        <input type="tel" name="telefone" id="idtelefone" placeholder="(**) ****-****"  required><br>
        <label for="bairro">Digite seu bairro: </label><br>
        <input type="text" name="bairro" id="idbairro" placeholder="Rebinboca da parafuseta"  required><br>
        <label for="rua">Digite sua rua: </label><br>
        <input type="text" name="rua" id="idrua" placeholder="Rua Porto Alegre"  required><br>
        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="idemail" placeholder="exemple123@gmail.com"  required><br><br>
        <input type="radio" id="empregado" name="codincao_finaceira" value="Xique">
        <label for="desemprregado">Desempregado</label><br>
        <input type="radio" id="desempregado" name="condicao_financeira" value="desempregado">
        <label for="trabalha">Empregado</label><br><br>
        <label for="ms">Media Salarial Requerida:</label><br>
        <select name="media_salarial_requerida" id="ms">
            <option value="1500.00">R$ 1500,00</option>
            <option value="2500.00">R$ 2500,00</option>
            <option value="5000.00">R$ 5000,00</option>
            <option value="7500.00">R$ 7500,00</option>
        </select><br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Refazer">
    </form>
    <img src="img/imagem1.jpg" alt="">
</div>

<footer>
    <p>&copyCopyrigth_Matheus_Sobrinho_2024</p>
</footer>
    
</body>
</html>