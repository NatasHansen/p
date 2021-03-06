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
                    <li class="nav-item active">
                        <a class="nav-link" href="visualizacao_livro.php">teste<span class="sr-only">(current)</span></a>
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
                            <a class="dropdown-item" href="#">Ler</a>
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
        
        <div style="margin: 3% 0% 3% 24%;">
            <iframe src="/ViewerJS/Exerc%C3%ADcio%20Dirigido%20Revis%C3%A3o%20La%C3%A7os.pdf" width="700" height="550" allowfullscreen="" webkitallowfullscreen=""></iframe>
        </div>
            
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
