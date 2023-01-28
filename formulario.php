<?php
$host = 'localhost';
$nome = 'root';
$password = '';
$nomeSQL = 'formulario';

$ConexaoSQL = new mysqli($host, $nome, $password, $nomeSQL) or die("deu ruim");


$nome = $_POST["nome"];
$idade = $_POST["idade"];
$aniversario = $_POST["data"];
$arte = $_POST["arte"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];

if($nome == "" || $idade == "" || $aniversario == "" || $arte == "" || $senha == "" || $telefone == "") {
    echo "voce nao preencheu todos os questionarios com suas informações";
    
} else {
    

    $EnviandoDados = mysqli_query($ConexaoSQL, "INSERT INTO pessoas(nome,idade,aniversario,arte,senha,telefone) VALUES ('$nome','$idade','$aniversario','$arte','$senha','$telefone')") or die("deu certo nao");


echo $nome."<br>";
echo $idade."<br>";
echo $aniversario."<br>";
echo $arte."<br>";
echo $senha."<br>";
echo $telefone."<br>"; 
}

?>