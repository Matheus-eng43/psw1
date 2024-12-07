<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Atibidade_03-12</title>
</head>

<body>
    <header>
        <img src="img/logo_1.png" alt="logo do site" id="img1">
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="cadaluno.php" id="pose">Inscrição</a></li>
                <li><a href="listaaluno.php">Lista de alunos</a></li>
            </ul>
        </nav>
        <div class="login">
            <img src="img/logo_2.png" alt="logo do usuario">
            <h4>Login</h4>
        </div>
    </header>
 
        <div class="container">
            <h2>Formulário de Inscrição de Aluno</h2>
            <form action="#" method="POST">
                
                <div class="forms">
                    <label for="nome">Nome Completo do Aluno:</label>
                    <input type="text" id="nome" name="nome" required placeholder="Digite o nome completo do aluno">
                </div>
    
                <div class="forms">
                    <label for="cpf">CPF do Aluno:</label>
                    <input type="text" id="cpf" name="cpf" required placeholder="Digite o CPF do aluno" maxlength="14" oninput="mascaraCPF(this)">
                </div>
    
                <div class="forms">
                    <label for="matricula">Número de Matrícula:</label>
                    <input type="text" id="matricula" name="matricula" required placeholder="Digite o número de matrícula">
                </div>
    
                <div class="forms">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>
    
                <div class="forms">
                    <label for="nome_pai">Nome do Pai:</label>
                    <input type="text" id="nome_pai" name="nome_pai" required placeholder="Digite o nome completo do pai">
                </div>
    
                <div class="forms">
                    <label for="nome_mae">Nome da Mãe:</label>
                    <input type="text" id="nome_mae" name="nome_mae" required placeholder="Digite o nome completo da mãe">
                </div>
    
                <div class="forms">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" required placeholder="Digite o endereço completo">
                </div>
    
                <div class="forms">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" required placeholder="Digite a cidade">
                </div>
                    <div>
                        <label for="cep">CEP:</label>
                        <input type="text" id="cep" name="cep" required placeholder="Digite o CEP" maxlength="9" oninput="mascaraCEP(this)">
                    </div>
    
                <div class="forms">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required placeholder="Digite o e-mail">
                </div>
    
                <div class="forms">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" required placeholder="Digite o telefone" maxlength="15" oninput="mascaraTelefone(this)">
                </div>
    
                <div class="forms">
                    <label for="responsavel">Responsável (se não for o pai ou mãe):</label>
                    <input type="text" id="responsavel" name="responsavel" placeholder="Nome do responsável">
                </div>
    
                <div class="forms">
                    <label for="observacoes">Observações:</label>
                    <textarea id="observacoes" name="observacoes" rows="4" placeholder="Observações sobre o aluno ou a inscrição (opcional)"></textarea>
                </div>
    
                <button type="submit" class="button">Enviar Inscrição</button>
            </form>
        </div>
    
    
    <footer>
        <p>&copy Copyrigth - Matheus Sobrinho 2024</p>
        <div class="contatos">
            <a href="https://www.instagram.com/"><img src="img/instagram.png" alt="Instagram"></a>
            <a href="https://workspace.google.com/products/gmail/"><img src="img/e-mail.png" alt="Email"></a>
            <a href="https://web.whatsapp.com/"><img src="img/whatsapp.png" alt="WhatsApp"></a>
        </div>
    </footer>
</body>

</html>