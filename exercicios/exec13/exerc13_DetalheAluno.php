<?php
if ($_SERVER["REQUEST_METHOD"] == "get") {
    $matricula = $_POST["matricula"];
    $conteudo = file_get_contents("alunoNovo.txt");
    $flag = false;
    foreach (preg_split("/((\r?\n)|(\r\n?))/", $conteudo) as $linha) {
        if (strpos($linha, $matricula) !== false) {
            $flag = true;
            break;
        }
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
<h1>Detalhe dos Aluno</h1>
<br>
<a href="exerc13_InserirAluno.php">Inserir Aluno</a><br>
<a href="exerc13_AlterarAluno.php">Alterar Aluno</a><br>
<a href="exerc13_ListarAlunos.php">Listar Alunos</a><br>
<a href="exerc13_ExcluirAluno.php">Excluir Aluno</a><br>
<a href="exerc13_DetalheAluno.php">Detalhe de aluno</a>

<form action="exerc13_DetalheAluno.php" method="get">
    Nome: <input type="text" name="matricula">
    <input type="submit" name="inserir">
</form>
<?php
    if(!empty($flag) && !empty($linha) && $flag !== false){
        echo $linha;
    }
?>
</body>
</html>