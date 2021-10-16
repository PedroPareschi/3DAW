<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $matricula = $_POST["matricula"];
        $conteudo = file_get_contents("alunoNovo.txt");
        $array = [];
        foreach (preg_split("/((\r?\n)|(\r\n?))/", $conteudo) as $linha) {
            $testarray = explode(";", $linha);
            if (strpos($testarray[1], $matricula) !== false) {
               $array = $testarray;
            }
        }
        if(sizeof($array) == 0){
            die("Aluno não encontrado");
        }
    }
?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Inserir Aluno</h1>
<br>
<a href="exerc13_InserirAluno.php">Inserir Aluno</a><br>
<a href="exerc13_AlterarAluno.php">Alterar Aluno</a><br>
<a href="exerc13_ListarAlunos.php">Listar Alunos</a><br>
<a href="exerc13_ExcluirAluno.php">Excluir Aluno</a><br>
<a href="exerc13_DetalheAluno.php">Detalhe de aluno</a>
<form action="exerc13_AlterarAluno.php" method="post">
    Nome: <input type="text" name="nome" value="<?php echo $array[0]; ?>"><br>
    Matricula: <input type="text" name="matricula" value="<?php echo $array[1]; ?>"><br>
    Data de nascimento: <input type="date" name="dtNasc" value="<?php echo $array[2]; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $array[3]; ?>"><br>
    CPF: <input type="text" name="cpf" value="<?php echo $array[4]; ?>"><br>
    Telefone: <input type="tel" name="telefone" value="<?php echo $array[5]; ?>"><br>
    Endereço: <input type="text" name="endereco" value="<?php echo $array[6]; ?>"><br>
    Cidade: <input type="text" name="cidade" value="<?php echo $array[7]; ?>"><br>
    Estado: <input type="text" name="estado" value="<?php echo $array[8]; ?>"><br>
    CEP: <input type="text" name="cep" value="<?php echo $array[9]; ?>"><br>
    <input type="submit" name="inserir" >
</form>
</body>
</html>
