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
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
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
        <div class="começo">
            <div class="introdução">
                <h2>O que é a Ink Aesthetic?</h2> <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis reprehenderit exercitationem dolorem atque iusto? Dolore, harum beatae. Ad, quasi possimus consectetur unde fugiat voluptatem dignissimos saepe vitae architecto tempore. Ex! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dicta optio voluptates porro fuga obcaecati aliquam, vitae impedit placeat maxime! Natus iure ex unde magni voluptate corporis odit facere eum.</p>
            </div>
                <div class="sobre"> 
                    <h2>Como ajudamos os artistas?</h2> <br>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis porro eligendi non sit perspiciatis laboriosam quasi soluta quia tenetur vitae, velit minima eaque dolore quas vel veritatis praesentium dolorum quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae velit debitis quia consequatur pariatur facere ea, harum aperiam aliquid natus iste, ex earum quam. Explicabo tempora eveniet minima nesciunt aliquam?</p>
                </div>
                <img src="https://img.freepik.com/premium-vector/creative-artist-painting-planets-stars-space-woman-holding-brush-paints-creation-flat-vector-illustration-art-studio-agency-concept-banner-website-design-landing-web-page_179970-6844.jpg?w=740" alt="">
            </div>
        </div>
        
        <section class="meio">
            <img src="paleta.png" alt="">
            <div class="meioIntrodução">
                <h2>Artes</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, odio suscipit dicta quo quis itaque beatae facilis magni voluptas totam iusto assumenda aliquid reiciendis impedit voluptatibus fugiat in, amet at.lore Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ad earum possimus nesciunt veniam vel. Adipisci mollitia blanditiis nesciunt voluptate temporibus hic similique sequi. Dolorem adipisci quas molestiae aperiam quisquam.</p>
            </div>
            <div class="meioSobre">
                <h2>Comunidade</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, odio suscipit dicta quo quis itaque beatae facilis magni voluptas totam iusto assumenda aliquid reiciendis impedit voluptatibus fugiat in, amet at.lore Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ad earum possimus nesciunt veniam vel. Adipisci mollitia blanditiis nesciunt voluptate temporibus hic similique sequi. Dolorem adipisci quas molestiae aperiam quisquam.</p>
            </div>
        </section>

        <section class="final">
            <div class="participar"> 
                <h2>Quer fazer parte disso tudo?</h2> <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis porro eligendi non sit perspiciatis laboriosam quasi soluta quia tenetur vitae, velit minima eaque dolore quas vel veritatis praesentium dolorum quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae velit debitis quia consequatur pariatur facere ea, harum aperiam aliquid natus iste, ex earum quam. Explicabo tempora eveniet minima nesciunt aliquam?</p> <br>
                <ul>
                    <li><a href="registrar.html"></a>Registrar</li>
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