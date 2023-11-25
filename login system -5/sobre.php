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
    <link rel="stylesheet" href="lista.css">
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
            <h1>Lista de <br><span>Comandos</span> </h1>
            <p class="par"><br><b>Você é um(a) ****</b> - Pede para a IA agir como uma pessoa, personagem ou até mesmo algo vago como um estereótipo.<br>
            <br><b>Crie um código ****</b> - Pede para a IA criar um código para a função desejada na linguagem de programação escolhida, neste prompt é melhor dar mais detalhes e ser o mais específico possível para que o programa te dê um resultado aceitável. <br> 
            <br><b>Escreva um texto ****</b> - Pede para a IA escrever um texto pedido, neste prompt é melhor dar mais detalhes e ser o mais específico possível para que o programa te dê um resultado aceitável.   <br>
            <br><b>Mudar Parâmetro de Temperatura para ****</b> - O parâmetro de temperatura é um sistema do ChatGPT que controla o nível de aleatoriedade ou criatividade das respostas. Neste comando você pode mudar o nível de 0 até 1.<br>
            <br><b>Traduza o seguinte texto para ****: “”</b> – Pede para traduzir o texto entre aspas para a língua selecionada.<br>
            <br><b>Resuma o seguinte texto/Faça Bulletpoints do seguinte texto: “”</b> – Pede para a IA resumir o texto entre aspas de forma simples ou em pontos específicos de importância, neste prompt é melhor dar mais detalhes e ser o mais específico possível para que o programa te dê um resultado aceitável.<br>
            <br><b>Escreva um texto a partir deste resumo/Bulletpoints: “”</b> – Faz o oposto do comando anterior: expande em ideias resumidas ou parciais para um texto completo, neste prompt é melhor dar mais detalhes e ser o mais específico possível para que o programa te dê um resultado aceitável.<br>
            <br><b>Me informe a fonte da informação anterior</b> – Pede para a IA listar as fontes de onde foram coletadas as informações da última resposta informada.<br>
            <br><b>Me dê exemplos da informação anterior</b> - Pede para a IA listar exemplos sobre as informações da última resposta informada.<br>
            <br><b>Faça a imagem de **** em ASCII</b> – Pede para a IA criar uma simples imagem utilizando de caracteres e símbolos de texto.<br>
            <br><b>Me informe ambos os lados desta discussão: “”</b> – Pede para a IA listar, de forma imparcial, os pontos apresentados por cada lado da discussão inserida<br>
            <br><b>Verifique a validade desta informação: “”</b> – Pede para a IA analisar a informação inserida entre aspas sobre sua veracidade.<br>
            <br><b>**** informação está incorreta</b> – Corrige a informação incorreta passada pela IA.<br>
            </p>

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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GPT Prompts</title>
    <link rel="stylesheet" href="lista.css">
</head>
<body>

    <div class="main">

            </div>

