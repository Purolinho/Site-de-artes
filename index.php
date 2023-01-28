<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INK AESTHETIC</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
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
        <div class="começo">
            <div class="introdução">
                <h2>O que é a Ink Aesthetic?</h2> <br>
                <p>A Ink Aesthetic é um site disgnado para artistas que querem divulgar seu trabalho, para que possam ter mais reconhecimento e ter seu trabalho valorizado. Não são apenas artistas que podem usar este site, pessoas que gostam de arte em si também podem usar, colocando o link de uma arte que gostou e que acharia interessante de que recebesse mais atenção e reconhecimento</p>
            </div>
                <div class="sobre"> 
                    <h2>Como ajudamos os artistas?</h2> <br>
                    <p>Através da divulgação e das suas artes e do feedback que os usuarios podem conceder aos artistas. A Ink Aesthetic abriga uma comunidade que apaixonada em artes que tem o obejtivo de compartilhar e promover desde das proprias artes ate a de outros artistas nas quais tenham gostado </p>
                </div>
                <img src="https://img.freepik.com/premium-vector/creative-artist-painting-planets-stars-space-woman-holding-brush-paints-creation-flat-vector-illustration-art-studio-agency-concept-banner-website-design-landing-web-page_179970-6844.jpg?w=740" alt="">
            </div>
        </div>
        
        <section class="meio">
            <img src="paleta.png" alt="">
            <div class="meioIntrodução">
                <h2>Artes</h2> <br>
                <p>Todos os tipos de artes podem ser postadas, menos artes de contéudo taxado como NSFW ou afins. As artes ficam disponiveis para os usuarios darem feedback, com likes ou dislikes e comentarios. Promovendo o artista e sua obra</p>
            </div>
            <div class="meioSobre">
                <h2>Comunidade</h2> <br>
                <p>A comunidade de Ink Aesthetic é acolhedora e sempre querendo melhorar, além de estar sempre atualizando e apoiando os artistas. discussão de artes em geral sempre estarão abertas, matendo o respeito da obra e dos proprios usuarios do site. </p> 
            </div>
        </section>

        <section class="final">
            <div class="participar"> 
                <h2>Quer fazer parte disso tudo?</h2> <br>
                <p>Caso tenha se interessado pela Ink Aesthetic venha se jungar a gente, estamos sempre esperando novos artistas ou apreciadores de artes, para se registrar basta clicar no bloco abaixo, mas caso ja tenha um conta basta logar</p> <br>
                <ul>
                    <li><a href="registrar.html">Registrar</a></li>
                    <li><a href="login.html">Logar</a></li>
                </ul>
            </div>
            <div class="ink">
                <h1>Ink Aesthetic</h1>
                <img src="HEX_Logo.png" alt="">
            </div>
        </section>

    </main>




<script>
    var home = document.getElementById("img")
    home.addEventListener("click", () => {
        location.href = "painel.php"
    })
</script>

</body>
</html>