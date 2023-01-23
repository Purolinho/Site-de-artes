<?php 

    $host = 'localhost';
    $nome = 'root';
    $password = '';
    $nomeSQL = 'formulario';

    $ConexaoSQL = new mysqli($host, $nome, $password, $nomeSQL) or die("deu ruim");


    $nome = $_POST['nomeArte'];
    $tags = $_POST['tags'];
    $link = $_POST['link'];
    
    if(empty($nome) || empty($tags) || empty($link)) {
        header('Location: divulgarArte.php');
    } else {
    $EnviandoDados = mysqli_query($ConexaoSQL,"INSERT INTO artes(nome,tag,link) VALUES ('$nome','$tags', '$link')");
    }
    header('Location: divulgarArte.php');
?>