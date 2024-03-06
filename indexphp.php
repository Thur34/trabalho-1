<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styletrab1.css">
    <title>Trabalho 1</title>
</head>
<body>
    <div class="formulario">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div id="nome">
                <label for="nome_input">Nome</label>
                <input type="text" id="nome_input" required name="nome_input"><br>
            </div>
            <div id="CPF">
                <label for="cpf_input">CPF</label>
                <input type="text" id="cpf_input" required name="cpf_input"><br>
            </div>
            <div id="telefone">
                <label for="telefone_input">Telefone</label>
                <input type="text" id="telefone_input" required name="telefone_input"><br>
            </div>
            <div id="nascimento">
                <label for="nascimento_input">Data de nascimento</label>
                <input type="date" id="nascimento_input" required name="nascimento_input"><br>
            </div>
            <div id="email">
                <label for="email_input">Email</label>
                <input type="email" id="email_input" required name="email_input"><br>
            </div>
            <div id="estudante">
                <input type="checkbox" id="eh_estudante" name="eh_estudante" value="sim">
                <label for="eh_estudante">Você é estudante</label><br>
            </div>
            <div id="button_form">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
        $nome_input = $_POST['nome_input'] ?? 'Nome não informado';
        $eh_estudante = isset($_POST['eh_estudante']) ? 'sou estudante' : 'não sou estudante';
        $cpf_input = $_POST['cpf_input'] ?? 'CPF não informado';
        $nascimento_input = $_POST['nascimento_input'] ?? 'Data de nascimento não informada';
        $telefone_input = $_POST['telefone_input'] ?? 'Telefone não informado';
        $email_input = $_POST['email_input'] ?? 'E-mail não informado';

        echo "<p>Eu, $nome_input, $eh_estudante. Meu número de CPF é $cpf_input, nasci em $nascimento_input e tenho " . (date("Y") - date("Y", strtotime($nascimento_input))) . " anos de idade. Meu telefone para contato é $telefone_input e o meu email é $email_input.</p>";
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST)) {
        echo "<p>Formulário preenchido de forma incorreta.</p>";
    }
    ?>
</body>
</html>
