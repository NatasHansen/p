<?php
require 'server/verifica-sessao.php';
?>
<html lang="">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylepaginainicial.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/vicons-font-button.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    
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
    <img class="logo" src="img/logoofc.png"  width="55px" height="50px" alt="html/css">
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
                            <a class="dropdown-item" href="#">Leia</a>
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
        
        <!--CARROSEL-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active filtro-carousel">
                    <img class="d-block w-100" src="img/prop1.jpg" alt="First slide">
                </div>
                
                <div class="carousel-item filtro-carousel">
                    <img class="d-block w-100" src="img/prop2.jpg" alt="Third slide">
                </div>
                
                <div class="carousel-item filtro-carousel">
                    <img class="d-block w-100 " src="img/prop3.jpg" alt="Third slide">
                </div>
            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
    <!--FIMDOCARROSEL-->
       
<div id="geral_lancamentos">
    <div><h2 class="lancamentos">Lançamentos</h2></div>
    <!--Carrosel-->
    <div class="container">
        <div class="row">
		  <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row">
                	  <div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l1.jpg" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l2.jpg" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/ene3.jpg" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l3.jpg" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l4.jpg" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l5.jpg" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l6.jpg" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l7.jpg" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l8.jpg" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l9.jpg" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l10.jpg" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="visualizacao_livro.php" class="thumbnail"><img src="img/l11.jpg" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div><!--.Carousel-->
                 
		  </div>
	   </div>
    </div>
</div>
    <!--Fim-->
    
   
    <!--ESTANTE INÍCIO-->
        <div id="estante_geral">
            <div id="div_left"><!--Lado Esquerdo-->
                <div class="estantes">               
                    <div class="estante">
                        <a href="visualizacao_livro.php" class="fill-div">
                        <img class="img-fluid" src="img/c1.jpg">
                        <div class="dadoslivro">
                            <p class="titulo">O Nome Do Vento</p>
                            <button type="button" class="btn btn-secondary btn-sm">Ação</button><br>
                            <label class="etiqueta">Por:</label><p class="autor">Autor desconhecido</p><br>
                            <label class="etiqueta">Publicado em:</label><p class="data">08/10/2018</p><br>
                        </div>
                        </a>
                    </div>
                       
                    <div class="estante">
                        <a href="visualizacao_livro.php" class="fill-div">
                        <img class="img-fluid" src="img/c2.jpg">
                        <div class="dadoslivro">
                            <p class="titulo">Harry Potter</p>
                            <button type="button" class="btn btn-secondary btn-sm">Aventura</button><br>
                            <span class="etiqueta">Por:</span><p class="autor">Fulano</p><br>
                            <span class="etiqueta">Publicado em:</span><p class="data">01/12/2014</p><br>
                        </div>
                        </a>
                    </div>
                       
                    <div class="estante">
                        <a href="visualizacao_livro.php" class="fill-div">
                        <img class="img-fluid" src="img/c3.jpg">
                        <div class="dadoslivro">
                            <p class="titulo">Ankilor</p>
                            <button type="button" class="btn btn-secondary btn-sm">Medieval</button><br>
                            <span class="etiqueta">Por:</span><p class="autor">Erasmo</p><br>
                            <span class="etiqueta">Publicado em:</span><p class="data">20/04/2008</p><br>
                        </div>
                        </a>
                    </div>
                       
                    <div class="estante">
                        <a href="visualizacao_livro.php" class="fill-div">
                        <img class="img-fluid" src="img/c4.jpg">
                        <div class="dadoslivro">
                            <p class="titulo">A estrela</p>
                            <button type="button" class="btn btn-secondary btn-sm">Fantasia</button><br>
                            <span class="etiqueta">Por:</span><p class="autor">Juliscledia</p><br>
                            <span class="etiqueta">Publicado em:</span><p class="data">09/06/2010</p><br>
                        </div>
                        </a>
                    </div>
                       
                    <div class="estante">
                        <a href="visualizacao_livro.php" class="fill-div">
                        <img class="img-fluid" src="img/c5.jpg">
                        <div class="dadoslivro">
                            <p class="titulo">O exorcista</p>
                            <button type="button" class="btn btn-secondary btn-sm">Terror</button><br>
                            <span class="etiqueta">Por:</span><p class="autor">Lucas</p><br>
                            <span class="etiqueta">Publicado em:</span><p class="data">02/12/2012</p><br>
                        </div>
                        </a>
                    </div>
                       
                    <div class="estante">
                        <a href="visualizacao_livro.php" class="fill-div">
                        <img class="img-fluid" src="img/c6.jpg">
                        <div class="dadoslivro">
                            <p class="titulo">Não conte a ninguem</p>
                            <button type="button" class="btn btn-secondary btn-sm">Suspence</button><br>
                            <span class="etiqueta">Por:</span><p class="autor">Gabriela</p><br>
                            <span class="etiqueta">Publicado em:</span><p class="data">30/11/1996</p><br>
                        </div>
                        </a>
                    </div>

                    
                    </div>
            </div>

            <div id="div_right"><!--Lado Direito-->
               <div id="banner">
                    <img src="img/Banner.png" class="img_banner" alt="Responsive image">
               </div><br>
				<div class="box bg-1">
					<button class="button button--itzel button--text-thick"><i class="button__icon icon icon-editar"></i><span>Crie Agora!</span></button>
				</div>
            </div>
        </div>
        <!--FOOTER-->
        <div class="card text-center">
            <div class="card-header">VulpiStory</div>
            <div class="card-footer text-muted">© 2018 - Todos os Direitos Reservados.</div>
    </div>
    <!--FIMDOFOOTER-->
        
        <script type="text/javascript">
        $(document).ready(function() {
            $('#Carousel').carousel({
                interval: 3200 //Tempo de transição
            })
        });
            
        function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

        function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </body>
</html>
