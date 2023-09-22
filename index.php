<?php
session_start();
include_once("conexao.php");
?>

       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Css/style.css" rel="stylesheet">
    <link href="Css/media.css" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body> 
    <!--barra superior-->
    <header>
        <div class="titulo">
            <img src="img/INFINITE (2).png" alt=""  style="height: 200px; width: 200px;">

        </div>

        <ul>
            <a href="Inicio.html" class="botao-inicio"><li>Início</li></a>
            <a href="sobre.html"><li>Sobre</li></a>
            <a href="Fora.html"><li>Serviços</li></a>
        </ul>
    </header>
    <!--formulario e conteudo central-->
    <main>
        <aside>
            <h2><span>Cadastre-se</span></h2>
            <h2>para os melhores preços</h2>
            <p>
                Bem-vindo à Infinity Events - sua janela para eventos inesquecíveis!<br>
A Infinity Events é especializada na venda de ingressos para os eventos mais emocionantes do mundo. Com pacotes personalizados e acesso exclusivo, garantimos que sua experiência seja memorável. Explore nosso site e embarque na Infinity Events, onde os melhores eventos ganham vida!
            </p>
        
            <form  method="POST" action="processa.php">
                <input type="text" name="Nome" placeholder="Digite seu nome completo">
                <input type="E-mail"name="Email" placeholder="Digite seu email">
                <input type="tel"name="Telefone" placeholder="Digite seu telefone">
                <input type="submit" value="Enviar">
            </form>
        
        </aside>

        <article>
            <img src="img/disc-jockey-animate.svg" alt="dj">
        </article>
    </main>
    
</body>
</html>