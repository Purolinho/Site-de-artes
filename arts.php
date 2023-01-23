<?php

session_start();

$host = 'localhost';
$nome = 'root';
$password = '';
$nomeSQL = 'formulario';

$ConexaoSQL = new mysqli($host, $nome, $password, $nomeSQL) or die("deu nao");

$numRows = mysqli_query($ConexaoSQL, "SELECT * FROM artes");
$numRows = mysqli_num_rows($numRows);

$numRows1 = $numRows - 5;
$numRows2 = $numRows - 4;
$numRows3 = $numRows - 3;
$numRows4 = $numRows - 2;
$numRows5 = $numRows - 1;
$numRows6 = $numRows - 0;

$imagem1 = mysqli_query($ConexaoSQL, "SELECT link FROM artes where id=$numRows1");
$imagem1 = mysqli_fetch_array($imagem1);
$imagem1 = $imagem1['link'];

$imagem2 = mysqli_query($ConexaoSQL, "SELECT link FROM artes where id=$numRows2");
$imagem2 = mysqli_fetch_array($imagem2);
$imagem2 = $imagem2['link'];

$imagem3 = mysqli_query($ConexaoSQL, "SELECT link FROM artes where id=$numRows3");
$imagem3 = mysqli_fetch_array($imagem3);
$imagem3 = $imagem3['link'];

$imagem4 = mysqli_query($ConexaoSQL, "SELECT link FROM artes where id=$numRows4");
$imagem4 = mysqli_fetch_array($imagem4);
$imagem4 = $imagem4['link'];

$imagem5 = mysqli_query($ConexaoSQL, "SELECT link FROM artes where id=$numRows5");
$imagem5 = mysqli_fetch_array($imagem5);
$imagem5 = $imagem5['link'];

$imagem6 = mysqli_query($ConexaoSQL, "SELECT link FROM artes where id=$numRows6");
$imagem6 = mysqli_fetch_array($imagem6);
$imagem6 = $imagem6['link'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arts</title>
    <link rel="stylesheet" href="arts.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="HEX_Logo.png" type="image/x-icon">
</head>
<body>

    <nav>
        <img src="HEX_Logo.png" alt="" width="70px">

        <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="arts.php">Arts</a></li>
            <li><a href="#">Gallery</a></li>
        </ul>
        
        <?php
            if(!empty($_SESSION['nome'])) {
                echo 
                '<div class="user">
                <img src="user.png" alt="" width="50px" id="img">'.$_SESSION['nome'];
            } else {
                echo
                '<ul>
                <li><a href="login.html" class="botao">Login</a></li>
                <li><a href="registrar.html" class="botao">Register</a></li>
                </ul>';
            }
            ?>
        </div>
    </nav>

    <main>
        <h2>Artes divulgadas recentemente</h2>

        <div class="image-grid">
        <?php 
        echo "<img src='".$imagem1."' alt='img' class='c2'>";
        echo "<img src='".$imagem2."' alt='img' class=''>";
        echo "<img src='".$imagem3."' alt='img' class=''>";
        echo "<img src='".$imagem4."' alt='img' class=''>";
        echo "<img src='".$imagem5."' alt='img' class=''>";
        echo "<img src='".$imagem6."' alt='img' class='c2'>";
        
        ?>

        </div>

    </main>

    <script>
        var home = document.getElementById("img")
        home.addEventListener("click", () => {
            location.href = "painel.php"
        })
    </script>

</body>
</html>