<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleproprio.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/vicons-font.css">
    <script src="js/jquery.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
        
    <!--Modal-->
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <!--Fim Modal-->
    
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
    
    <title></title>

    <script>
      
      function cadastrar(){
        var usuario = $('#usuario').val();
        var email1 = $('#email1').val();
        var senha = $('#senha').val();

        $('#usuario').val('');
        $('#email1').val('');
        $('#senha').val('');

        $.ajax({
          url: "server/salva-usuario.php",
          method: "POST",
          dataType: "json",
          data: {"usuario": usuario, "email1": email1, "senha": senha},
          success: function(retorno){
              if(retorno.deucerto == 1){
                  alert(retorno.mensagem);
                  window.location.reload();
                  
              }else if(retorno.deucerto == 2){
                  $('#alerta').html('<div class="alert alert-danger" role="alert">Ops. Algo deu Errado! Usuário inválido.</div>');
                  
              }else if(retorno.deucerto == 3){
                  $('#alerta').html('<div class="alert alert-danger" role="alert">Preencha todos os campos!</div>');
                  
              }else if(retorno.deucerto == 4){
                  $('#alerta').html('<div class="alert alert-danger" role="alert">Usuário ou E-mail já existentes!</div>');
              }
          }
        });
      }
        
    function login(){
      var usuario_login = $('#usuario-login').val();
      var pass = $('#pass').val();
        
      $.ajax({
          url: "server/login.php",
          method: "POST",
          dataType: "json",
          data: {'usuario_login':usuario_login, 'pass':pass},
          success: function(retorno){
              if(retorno.deucerto == 1){
                  location.href = "paginainicial.php";
                  
              }else if(retorno.deucerto == 2){
                  console.log(retorno.error);
                  console.log(retorno.mensagem); 
                  
              }else if(retorno.deucerto == 3){
                  $('#alerta1').html('<div class="alert alert-danger" role="alert">Preencha todos os campos!</div>');
                  
              }else if(retorno.deucerto == 4){
                  $('#alerta1').html('<div class="alert alert-danger" role="alert">Usuário não existente</div>');       
              }
          }
      });
      }
      
    </script>
</head>

<body style="background-image:linear-gradient(141deg, #d2d2d294 -9%, #e0e0e054 72%, #f5f5f57d 310%) !important;">
    <!-- NAVBAR-->
        <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navproprio" style="position: fixed; z-index: 100; width: 100%;">
    <img class="logo" src="img/logoofc.png" alt="html/css">
      <a class="navbar-brand" href="index.php">VulpiStory</a>
      
      <button id="btn-login" data-custom-open="modal-2" class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>

        </nav>
    </div>
    <!--FIMNAVBAR-->
    
    <!--CARROSEL-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active filtro-carousel">
                    <img class="d-block w-100" src="img/img1.png" alt="First slide">
                </div>
                
                <div class="carousel-item filtro-carousel">
                    <img class="d-block w-100" src="img/img2.png" alt="Third slide">
                </div>
                
                <div class="carousel-item filtro-carousel">
                    <img class="d-block w-100 " src="img/img3.png" alt="Third slide">
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
    
    
    <!--CARD-->
    <div class="cardp" >
    <h2>Qual é o Seu Estilo?</h2>
        <div class="row" style="justify-content: center;">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-4 card border-success mb-3" style="max-width: 23rem; margin: 30px; border-color=#dde1e4;     background-color: #fafafa;">
                <div class="card-headerr bg-transparent border-success"><img class="imgcard" src="img/leitor.svg" style="margin-top: 10%;"></div>
                <div class="card-body text-success" >
                    <h5 class="card-title" style="text-align: center";>Torne-se um Leitor!</h5>
                    <ul class="card-text">
                        <li>Encontre novas histórias;</li>
                        <li>Procure por suas categorias favoritas;</li>
                        <li>Favorite histórias;</li>
                        <li>Ajude os escritores com feedbacks;</li>
                        <li>Doe para ajudar seus leitores favoritos.</li>
                    </ul>
                </div>
            </div>
        
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-4 card border-success mb-3" style="max-width: 23rem; margin: 30px;); background-color: #fafafa;">
                <div class="card-headerr bg-transparent border-success"><img class="imgcard" src="img/escritor.svg" style="margin-top: 10%;"></div>
                <div class="card-body text-success">
                    <h5 class="card-title" style="text-align: center;">Torne-se um Escritor!</h5>
                    <ul class="card-text">
                        <li>Envie sua história;</li>
                        <li>Seja reconhecido pelos leitores;</li>
                        <li>Torne-se o destaque mensal;</li>
                        <li>Receba doações dos leitores;</li>
                        <li>Receba feedbacks de suas histórias.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--FIMDOCARD-->
    
    <!--botão do cadastro-->
    <div class="btn-cadastro">
        <center><button id=botao data-custom-open="modal-1" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="height: 3.5rem; width: 15rem; font-size: 20px;">Cadastre-se</button></center>
    </div>
    <!--botão do cadastro fim-->
          
          <!--FOOTER-->
          <div class="card text-center">
               <div class="card-header">VulpiStory</div>
               <div class="card-footer text-muted">© 2018 - Todos os Direitos Reservados.</div>
          </div>
          <!--FIMDOFOOTER-->
          
          <!-- [1] -->
          <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
          <div class="modal__overlay" tabindex="-1" data-micromodal-close>
          <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
           <header class="modal__header">
             <h2 class="modal__title" id="modal-1-title">
             Cadastro
            </h2>
            <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
          </header>
               <div id="alerta"></div>
                        
                    <main class="modal__content" id="modal-1-content">
                         <div>
                          <label for="usuario">Usuário:</label><br>
                          <input type="text" id="usuario" name="usuario" placeholder="Informe o Usuário"/>
                      </div>
                      
                      <br>
                      
                      <div>
                          <label for="email">E-Mail:</label><br>
                          <input type="text" id="email1" name="email" placeholder="Informe o E-Mail"/>
            </div>
                      <br>
                      <div>
                          <label for="senha">Senha:</label><br>
                          <input type="password" id="senha" name="senha" placeholder="Informe a Senha"/>
                      </div>
                  
            </main>
                  
                  <footer class="modal__footer">
                    <center><button class="modal__btn" onclick="cadastrar()">Cadastre-se</button></center>
                  </footer>
          </div>
        </div>
    </div>

    <!-- [2] -->
    <div class="modal micromodal-slide" id="modal-2" aria-hidden="true">
      <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
          <header class="modal__header">
            <h2 class="modal__title" id="modal-2-title">
              Login
            </h2>
            <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
          </header>
        <div id="alerta1"></div>

        
        <main class="modal__content" id="modal-2-content">

          <fieldset>
               <!-- MUDAR AQUI -->
                      
                      <div>
                          <label for="usuario-login">Usuário:</label><br>
                          <input type="text" id="usuario-login" name="email" placeholder="Informe o Usuário"/>
                      </div>
                      
                      <br>
                      
                      <div>
                          <label for="senha">Senha:</label><br>
                          <input type="password" id="pass" name="senha" placeholder="Informe a Senha"/>
                      </div>
                  </fieldset>
            </main>
                  
                  <footer class="modal__footer">
                    <center><button onclick="login()" class="modal__btn">Login</button></center>
                  </footer>
              
          </div>
        </div>
    </div>
    
    
     <script>

        MicroModal.init({
            openTrigger: 'data-custom-open', // [3]
        });  

    </script>
</body>
</html>
