<?php
session_start();
$host = 'localhost';
$nome = 'root';
$password = '';
$nomeSQL = 'formulario';

$ConexaoSQL = new mysqli($host, $nome, $password, $nomeSQL) or die("deu ruim");

@$nome = $_POST["verificarNome"];
@$senha = $_POST["verificarSenha"];


@$teste = mysqli_query($ConexaoSQL, "SELECT nome,senha FROM pessoas WHERE nome = '".$_SESSION['nome']."' and senha = '".$_SESSION['senha']."' ");

if($teste = mysqli_num_rows($teste) >= 1) {

} else {
$_SESSION['nome'] = $nome;
$_SESSION['senha'] = $senha;

$query = mysqli_query($ConexaoSQL, "SELECT nome,senha FROM pessoas WHERE (nome = '".$nome."') AND (senha='".$senha."')  LIMIT 1");

    if(empty($nome) || empty($senha) || $verificar = mysqli_num_rows($query) <= 0) {
        header('Location: login.html');
        exit("deu nao man");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="painel.css?v=<?php echo time(); ?>">
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

        <div class="user">
            <img src="user.png" alt="" width="50px"> 
            <?php
            echo $_SESSION['nome'];
            ?>
        </div>
    </nav>
    
    <main>
        <?php echo "<h2> Bem vindo ao painel de controle de sua conta, ".$nome."</h2>"?>
        <div class="gradiante">
        <div class="info">
            <div class="wrapper">
                <ul>
                    <li>Em Breve</li> <br>
                    <li>Em Breve</li> <br>
                    <li>Em Breve</li> <br>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <img src="https://img.freepik.com/premium-vector/pencil-cartoon-style-vector-illustration_484148-216.jpg?w=2000" alt="" id="adicionarArte">
        <img src="https://www.rudder.io/wp-content/uploads/2021/08/icon-config-management.svg" alt="">
        <img src="https://media.istockphoto.com/id/1154840667/vector/like-and-dislike-icons-blue-thumbs-up-and-red-thumbs-down-button-simple-linear-outline-style.jpg?s=612x612&w=0&k=20&c=yzyz24soVN-RsxanRv_XMHcn-xEopN20g008CXV_Tts=" alt="">
        
    </div>

    </main>
    


<script>

    var adicionar = document.getElementById("adicionarArte")
    adicionar.addEventListener("click", () => {
        location.href = "divulgarArte.php"
    })

</script>

</body>
</html>