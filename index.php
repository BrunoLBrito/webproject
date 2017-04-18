<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bruno Lucas</title>

    <!-- META TAGS  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Acompanhe meus trabalhos de webmaster com as linguagens HTML5, JAVASCRIPT, CSS, MYSQL, PHP, NODE.JS, GIT, GITHUB entre outros!"> <!-- CERCA DE UNS 140 CARACTERES MAX -->
    <meta name="author" content="Bruno Lucas">
    <meta name="keywords" content="PHP, PHP OO, javascript, Bruno Lucas, incognitoweb">
    <meta name="robots" content="index, follow">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="reply-top" content="bruno-lucas@msn.com">

    <!-- LINKS REFERENCIA -->
    <link rel="stylesheet" href="js/shadowbox/shadowbox.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--[if lt IE 9]>
      <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <![endif]-->

</head>
<body>
    <nav class="flexbox">
        <a href="#">Bruno Brito</a>
        <ul class="flexbox">
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#portfolio">Portfólio</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </nav>

    <header class="flexbox">
        <h1>LOREM IPSUM</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
        <a href="#sobre" class="btn">Ver mais</a>
    </header>

    <section id="sobre" class="flexbox">
        <h2>Sobre</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
        <a href="#contato" class="btn">Entre em contato</a>
    </section>

    <section id="servicos" class="flexbox">
       <h2>Serviços</h2>
       <div class="flexbox">
           <img src="img/configs.png" alt="Configurações" title="Configurações">
           <h3>Fácil Integração</h3>
           <p>Integra facilmente seu site a qualquer gerenciador de conteúdo.</p>
       </div>

       <div>
           <img src="img/hospedagem.png" alt="Hospedagem" title="Hospedagem">
           <h3>Hospedagens moderna</h3>
           <p>Não deixe seus clientes na mão. Tenha seu site 24h no ar.</p>
       </div>

       <div>
           <img src="img/site.png" alt="Site" title="Site">
           <h3>Melhores Práticas</h3>
           <p>Código legível, desenvolvido com as melhores práticas.</p>
       </div>

       <div>
           <img src="img/coracao.png" alt="Coração" title="Coração">
           <h3>Feito com amor</h3>
           <p>É melhor fazer seus sites com amor hoje em dia.</p>
       </div>
    </section>

    <section id="portfolio" class="flexbox">
        <h2>Portfólio</h2>
        <?php
          for ($i = 1; $i <= 6; $i++):
             $image = str_pad($i, 11, "portfolio-", STR_PAD_LEFT);
              echo "<a href='img/{$image}.jpg' rel='shadowbox[gb]'><img src='img/{$image}.jpg' alt='Galeria' title='Galeria'/></a>";
          endfor;
        ?>
    </section>

    <section id="contato" class="flexbox">
        <h2>Contato</h2>
        <p>Entre em contato conosco</p>
        <div>
            <img src="img/fone.png" alt="Telefone" title="Telefone">
            <p><a href="tel:62993410133">(62) 99341-0133</a></p>
        </div>

        <div>
            <img src="img/contato.png" alt="Email" title="Email">
            <p><a href="mailto:bruno-lucas@msn.com">bruno-lucas@msn.com</a></p>
        </div>
    </section>

    <footer>
        <p>&copy; Copyright. Desenvolvido por Bruno Lucas. 2017</p>
    </footer>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
<script src="js/shadowbox/shadowbox.js"></script>
</body>
</html>