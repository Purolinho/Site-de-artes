<?php
session_start();
if(empty($_SESSION['nome'])) {
    header('Location: main.html');
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divulgar</title>
    <link rel="stylesheet" href="divulgarArte.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="HEX_Logo.png" type="image/x-icon">
</head>
<body>

<nav>
    <img src="HEX_Logo.png" alt="" width="70px">
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="arts.php">Arts</a></li>
            <li><a href="#">Gallery</a></li>
        </ul>

        <div class="user">
            <img src="user.png" alt=""id="img" width="50px"> 
            <?php
            echo $_SESSION['nome'];
            ?>
        </div>
    </nav>

<div id="divulgação">
            <h2>Qual arte desejaria <br> divulgar?</h2> <br>
            <form action="enviarArte.php" method="post">
                Nome<br><input type="text" name="nomeArte"> <br>
                Tags<br><input type="text" name="tags"> <br>
                Link<br><input type="text" name="link"> <br>
                    <br><input type="submit" value="Divulgar">
            </form>
        </div>

<script>
var home = document.getElementById("img")
home.addEventListener("click", () => {
    location.href = "painel.php"
})
</script>
    
</body>
</html>