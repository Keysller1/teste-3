<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
   
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GPT Prompts</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">GPT Prompts</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="admin_page.php">HOME</a></li>
                    <li><a href="forum.php">FORÚM</a></li>
                    <li><a href="sobre.php">SOBRE</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="">
                <a href="#"> <button class="btn">Pesquisar</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Comandos <br><span>GPT</span> </h1>
            <p class="par">Chat GPT é uma ferramenta muito utilizada hoje em dia, porém<br>
                muitas pessoas tem dificuldade em utilizar esta Inteligência Artificial <br> de forma eficiente
                 ou objetiva e nós estamos aqui para ajudar com isso.</p>

                <button class="cn"><a href="#">Chat</a></button>

                <div class="form">
                    <button class="btnn"><a href="login_form.php">Login</a></button>
                    <a class="btnn"><a href="logout.php">logout</a></p>
                    <p class="link">Não tem uma conta?<br>
                    <a href="register_form.php">Registre-se </a> aqui</a></p>
                    <p class="liw">Entre com</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <script>
        window.embeddedChatbotConfig = {
        chatbotId: "r3cEbqH_EoKjT6XlkSeIQ",
        domain: "www.chatbase.co"
        }
        </script>
        <script
        src="https://www.chatbase.co/embed.min.js"
        chatbotId="r3cEbqH_EoKjT6XlkSeIQ"
        domain="www.chatbase.co"
        defer>
        </script>
        
</body>
</html>