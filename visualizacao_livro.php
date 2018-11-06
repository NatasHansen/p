<?php
require 'server/verifica-sessao.php';
?>
<html lang="">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/vicons-font-button.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    
    
    <!--plugin livro (Natasha)-->
    <meta name="description" content="Animated Books with CSS 3D Transforms" />
		<meta name="keywords" content="book, 3d, interactive, animated, 3d transform, css, web design" />
		<meta name="author" content="Marco Barría for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/visualicao_style.css" />
		<script src="js/modernizr.custom.js"></script>
    
    <!--plugin avaliação (leo)-->
    
    
    <!--Modal-->
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <!--Fim Modal-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/bootstrap/js/dist/dropdown.js"></script>
    
    <link rel="shortcut icon" href="img/logoofc.png"> 
        
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <title>VulpiStory</title>
    
</head>

    <body style="background-image:linear-gradient(141deg, #d2d2d294 -9%, #e0e0e054 72%, #f5f5f57d 310%) !important;">
       <!-- Navbar -->
 
<nav class="navbar navbar-expand-lg navbar-light bg-light navproprio" style=" z-index: 100; width: 100%;">
    <img class="logo" src="img/logoofc.png" alt="html/css">
      <a class="navbar-brand" href="index.php">VulpiStory</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="paginainicial.php">Conteudo<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Ação</a>
                            <a class="dropdown-item" href="#">Aventura</a>
                            <a class="dropdown-item" href="#">Medieval</a>
                            <a class="dropdown-item" href="#">Fantasia</a>
                            <a class="dropdown-item" href="#">Terror</a>
                            <a class="dropdown-item" href="#">Suspence</a>
                            <a class="dropdown-item" href="#">Drama</a>
                            <a class="dropdown-item" href="#">Comedia</a>
                        </div>
                    </li>
                    <li class="nav-item active" id="lancamentos_res">
                        <a class="nav-link" href="lancamentos.php">Lançamentos<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                    </div>
                    <div id="mySidenav" class="sidenav">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <img src="img/avatar2.png" class="img4">
                      <p class="nome"><span style=" color: white;">Bem-vindo <?php echo $_SESSION['usuario']; ?>!</span></p>
                            <a id="nav-link-lateral" class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                            <a id="nav-link-lateral" class="nav-link" href="paginainicial.php">Conteudo<span class="sr-only">(current)</span></a>
                            <a id="nav-link-lateral" class="nav-link" href="lancamentos.php">Lançamentos<span class="sr-only">(current)</span></a>
                        
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="#">Enviar</a>
                            <a class="dropdown-item" href="#">leia</a>
                            <a class="dropdown-item" href="#">Favoritos</a>
                            <a class="dropdown-item" href="server/logout.php">Logout</a>

                </div>
                <form id="pesquisa-menu" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="...." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>       
        <span style="font-size:30px;cursor:pointer;float: right;" onclick="openNav()"><img src="img/menu.png" width="50px" height="50px"></span>
            
        </nav>
    <!--fim-->
        
        
        <ul class="align">
					<li>
						<figure class='book'>

							<!-- Front -->

							<ul class='hardcover_front'>
								<li>
									<img src="img/ene3.jpg" alt="" width="100%" height="100%">
								</li>
                                <li></li>
							</ul>

							<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
                                    <a class="btn_l" href="">Ler</a>
									<a class="btn_l" href="">Baixar</a>
                                </li>
                                <li></li>
                                <li></li>
                                <li></li>
							</ul>

							<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<div id="estante_geral">
                                    <div id="div_left"><!--Lado Esquerdo-->
                                        <div class="estantes">
                                            <div class="estante">
                                                <div class="dadoslivro">
                                                    <h2 class="titulo">Shingeki no Kyojin</h2><br>
                                                    <label class="etiqueta">Categorias:</label>
                                                    <button type="button" class="btn btn-secondary btn-sm">Ação</button><br><br>
                                                    <label class="etiqueta">Por:</label><p class="autor">Hajime Isayama</p><br>
                                                    <label class="etiqueta">Publicado em:</label><p class="data">09/07/2009</p><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</figcaption>
						</figure>
                        <br><br>
					</li>
            <div id="estante_geral">
                <div id="estrelas">
                    <script src="js/funcoes.js"></script>

                    <a href="javascript:void(0)" onclick="Avaliar(1)">
                    <img src="img/star.svg" id="s1"></a>

                    <a href="javascript:void(0)" onclick="Avaliar(2)">
                    <img src="img/star.svg" id="s2"></a>

                    <a href="javascript:void(0)" onclick="Avaliar(3)">
                    <img src="img/star.svg" id="s3"></a>

                    <a href="javascript:void(0)" onclick="Avaliar(4)">
                    <img src="img/star.svg" id="s4"></a>

                    <a href="javascript:void(0)" onclick="Avaliar(5)">
                    <img src="img/star.svg" id="s5"></a>
                    <p id="rating">0</p>
                </div>
        </div>
        <div id="div_left">
                <label class="etiqueta">Sinopse:</label><p class="sinopse" style="color: #63707d;">0A história gira em torno do personagem Eren Yeager em um mundo onde a humanidade vive rodeada por enormes muralhas para se proteger de criaturas gigantescas, os Titãs. A história narra a luta da humanidade para recuperar seu território, e esclarecer os mistérios ligados ao aparecimento dos Titãs.</p><br>
            </div>
    </ul>

        <!--FOOTER-->
        <div class="card text-center" style="width: 100%;">
            <div class="card-header">VulpiStory</div>
            <div class="card-footer text-muted">© 2018 - Todos os Direitos Reservados.</div>
    </div>
    <!--FIMDOFOOTER-->
        
        <script type="text/javascript">
       
        function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

        function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
        
        </body>
    
</html>
