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
    
    <!--loading (hansen)-->
    <link rel="stylesheet" href="css/loadingc/demo.css">
    <link rel="stylesheet" href="css/loadingc/fakeLoader.css">
    
    <!--Modal-->
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <!--Fim Modal-->
    
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
    
    <!--Politicas de uso-->
    <script src="js/politicasite/modernizr.js"></script> <!-- 2 Modernizr -->
    <!--Fim politicas de uso-->
    
    <title>VulpiStory</title>

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
    
    <!--plugin loaging (hansen)-->
    <div class="fakeloader"></div>
    
    <!-- NAVBAR-->
        <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navproprio" style=" z-index: 100; width: 100%;">
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
        <section class="section1">
		  <div class="modalp-action">
			<a href="#0" class="link" data-type="modalp-trigger">Politica e Termos de Uso</a>
			<span class="modalp-bg"></span>
		</div> <!-- cd-modal-action -->

		<div class="modalp">
			<div class="modalp-content">
				<p class="titulop">Termos de serviço</p>
             
                <p class="datap">Última revisão: 29 de Outubro de 2018</p>
                
				<p class="textop">Bem-vindo à plataforma VulpiStory, que pertence e é operada pela própria VulpiStory. Estes termos de serviço (que incluem nosso0Código de Conduta e nossa Política de Privacidade) (“Termos de Serviço”) são um contrato entre você e a VulpiStory. Usando VulpiStory.com.br (o "Site"), criando sua conta VulpiStory e usando o Site ou nossos aplicativos móveis para postar vários conteúdos para a comunidade VulpiStory, incluindo histórias que você cria, comentários e mensagens, ou para acessar e visualizar o conteúdo do VulpiStory ou outro conteúdo do usuário (junto com o Site, os “Serviços”), você concorda com estes Termos de Serviço. Se você não concordar com nenhum desses termos, não poderá usar os Serviços do VulpiStory.</p>

                <p class="datap">Você precisa de uma conta</p>
                    
				<p class="textop">Você não pode navegar muito no Site ou usar os Serviços sem se registrar para uma conta. Para aproveitar ao máximo a plataforma VulpiStory, você precisa se registrar, escolher um nome de conta e definir uma senha.
                Você é responsável por todas as atividades da sua conta e por manter sua senha confidencial. Se você compartilhar as informações da sua conta com alguém, essa outra pessoa poderá assumir o controle da conta, e talvez não consigamos determinar quem é o titular correto da conta. Não teremos qualquer responsabilidade em relação a você (ou a qualquer pessoa com quem você compartilhar as informações da sua conta) como resultado de suas ações ou de suas ações nessas circunstâncias.</p>

                <p class="datap">Seu conteúdo é seu</p>
                
				<p class="textop">Antes de postar qualquer conteúdo para o VulpiStory, é importante que você leia nossas Diretrizes de Conteúdo. Se seu conteúdo não estiver em conformidade com essas diretrizes, ele poderá ser removido a qualquer momento.
                Você possui todos os direitos sobre o conteúdo que você cria e publica nos Serviços do VulpiStory. É claro que, se o conteúdo não era seu, colocá-lo no VulpiStory não será permitido. Não envie conteúdo para o qual você não detém os direitos autorais (a menos que tenha permissão, inclusive para conceder ao VulpiStory todos os direitos descritos nesses termos).
                Quando você publica conteúdo no VulpiStory, precisamos da permissão legal sob as leis de direitos autorais aplicáveis para exibir esse conteúdo aos usuários dos Serviços do VulpiStory. Legalmente isso significa que você nos deu uma licença não exclusiva para publicar o seu conteúdo nos Serviços VulpiStory, incluindo qualquer coisa razoavelmente relacionado a publicá-lo (como armazenar, exibir, reformatar, e distribuí-lo). Você precisará decidir como deseja licenciar o conteúdo da sua história para a comunidade do VulpiStory. Por favor, leia o nosso guia sobre direitos autorais para obter assistência na tomada desta decisão.
                Você é responsável pelo conteúdo que você publica. Isto significa que você assume todos os riscos relacionados com a sua publicação e visualização, incluindo a dependência de outra pessoa em sua precisão e quaisquer reclamações relativas à propriedade intelectual ou outros direitos legais.
                O VulpiStory é um serviço gratuito e, para continuar a libertá-lo, você entende que ativamos a publicidade nos Serviços, inclusive em conexão com a exibição de seu conteúdo ou outras informações. Também podemos usar seu conteúdo para promover os serviços. Nunca venderemos seu conteúdo para terceiros sem sua permissão explícita.</p>
				
                <p class="datap">Nossos direitos nos serviços</p>
                
				<p class="textop">Reservamos todos os direitos sobre a aparência e os serviços do Google Sites e em nosso conteúdo. Você não pode copiar ou adaptar qualquer parte de nosso código ou elementos de design visual (incluindo logotipos) sem permissão expressa por escrito da VulpiStory ou conforme estabelecido nesta cláusula. Por favor, não use nosso logotipo ou marcas registradas de qualquer forma que possa sugerir que o VulpiStory endosse um determinado produto ou serviço, ou você tenha um relacionamento comercial com o VulpiStory.
                Por favor, não altere, estique, condense, embeleze, adicione brilhos ou altere o nosso logotipo de qualquer forma. Temos muito orgulho do nosso logotipo e gostaríamos de mantê-lo como está. Ainda não sabe o que fazer com o nosso logotipo? Confira nossas diretrizes completas de marca.
                O VulpiStory pode alterar, encerrar ou restringir o acesso a qualquer aspecto dos Serviços, a qualquer momento, sem aviso prévio. Podemos remover qualquer conteúdo que você publicar ou enviar por qualquer motivo. O VulpiStory pode acessar, ler, preservar e divulgar qualquer informação conforme acreditamos que seja necessário para (i) satisfazer qualquer lei, regulamento, processo legal ou solicitação governamental aplicável, (ii) cumprir os Termos de Serviço, incluindo a investigação de possíveis violações, (iii) detectar, prevenir ou solucionar problemas de fraude, segurança ou técnicos, (iv) responder a solicitações de suporte ao usuário ou (v) proteger os direitos, propriedade ou segurança dos Serviços, seus usuários e o público.</p>

                <p class="datap">Como lidamos com problemas de direitos autorais</p>
                
				<p class="textop">O VulpiStory adotou uma política de violação de direitos autorais nos Serviços, de acordo com a Lei de Direitos Autorais do Milênio Digital dos Estados Unidos (a “DMCA”). Embora nossa política seja baseada na legislação dos EUA, aplicamos essa mesma política globalmente a todas as jurisdições em que nossos Serviços estão disponíveis. Se você quiser enviar uma reivindicação de violação de direitos autorais, acesse nossa página sobre denúncia de violação de direitos autorais. O VulpiStory se reserva o direito de remover o conteúdo supostamente infrator sem aviso prévio, a nosso exclusivo critério, e sem responsabilidade a você ou a qualquer outra pessoa. Em circunstâncias apropriadas, também encerraremos a conta de um usuário se o usuário for considerado um infrator reincidente.
                Às vezes, encontramos sites que extraíram conteúdo ilegalmente do VulpiStory. Quando encontramos esses sites, fazemos o melhor para desligá-los. Para agir em nome de nossos usuários, precisamos ter sua permissão legal para fazer isso, por isso, solicitamos isso aqui quando você se inscrever. Você nos autoriza a agir como seu agente para emitir avisos de retirada sob a DMCA e / ou qualquer outra legislação semelhante que permita a apresentação de solicitações a provedores de serviços da Internet e qualquer outra pessoa envolvida na publicação ilegal para a remoção de infrações ou supostamente infringir materiais de direitos autorais contidos ou exibidos em tais plataformas e / ou serviços de provedores de serviços.</p>

                <p class="datap">Coisas que você deve e não deve fazer</p>
                
				<p class="textop">Milhões de pessoas usam a plataforma VulpiStory. Esperamos que todos eles se comportem de maneira responsável e ajudem a manter esse local agradável. Por favor, reveja o Código de Conduta da VulpiStory (que é parte destes Termos de Serviço), que é projetado para garantir que todos entendam o que é a comunidade VulpiStory e os valores que valorizamos, para criar um ambiente seguro, divertido e atencioso para a história. Sem restringir o que está no Código de Conduta, não faça nada disso nos Serviços:
                •	Não quebre a lei. Não tome nenhuma medida que infrinja ou viole os direitos de outras pessoas, viole a lei ou viole qualquer contrato ou dever legal que você tenha para com alguém.
                •	Não prejudique o computador de ninguém. Não distribua vírus de software ou qualquer outra coisa (código, filmes, programas) projetados para interferir no funcionamento adequado de qualquer software, hardware ou equipamento no Site (seja ele pertencente ao VulpiStory ou a qualquer outra pessoa).
                •	Não tente danificar ou interromper o VulpiStory. Não tente interferir com o funcionamento adequado dos Serviços. Não ignore quaisquer medidas que tenhamos implementado para proteger os Serviços. Não tente danificar ou obter acesso não autorizado a qualquer sistema, dados, senha ou outras informações. Não tome nenhuma ação que imponha uma carga excessiva em nossa infraestrutura ou em nossos fornecedores terceirizados. (Nós determinamos o que é razoável.)
                •	Não raspe o VulpiStory. Não use nenhum tipo de software, dispositivo ou método (seja manual ou automatizado) para “rastrear”, “spider” ou remover qualquer conteúdo de qualquer parte do Site ou dos Serviços. Não faça uso do Site, conteúdo ou Serviços que possam ter o efeito de competir ou deslocar o mercado para o VulpiStory, o Site ou os Serviços.
                •	Não roube conteúdo do VulpiStory sem permissão. Não altere, traduza, reproduza, distribua ou crie trabalhos derivados de qualquer conteúdo, a menos que obtenha o consentimento explícito do autor desse conteúdo.
                •	Não roube a valiosa propriedade intelectual do VulpiStory. Não desmonte ou faça engenharia reversa de qualquer aspecto do Site ou dos Serviços em um esforço para acessar coisas como código-fonte, ideias subjacentes ou algoritmos.
                •	Não faça qualquer uso comercial do VulpiStory. O VulpiStory é apenas para uso pessoal e não comercial. Não venda o acesso ao Site ou aos Serviços de qualquer forma. Não use o Site ou os Serviços para fins de publicidade de quaisquer bens ou serviços. A única exceção é que você pode anunciar a venda de seu conteúdo em um livro eletrônico ou em um livro publicado em plataformas de terceiros ou livrarias.</p>
				
                <p class="datap">Excluindo sua conta</p>
                
				<p class="textop">Você pode excluir permanentemente sua conta do VulpiStory. Se você fechar sua conta, ela será primeiro desativada e excluída. Quando sua conta é desativada, embora não seja visível no VulpiStory, todos os seus comentários e postagens do fórum na comunidade do VulpiStory permanecerão, exceto que eles serão anonimizados. Durante seis meses após a desativação, ainda é possível restaurar sua conta se ela foi acidentalmente ou erroneamente desativada, incluindo a ressocialização de seus comentários e postagens no mural de mensagens em seu perfil. Após seis meses, excluímos permanentemente sua conta de nossos sistemas, exceto que seus comentários anônimos e mensagens no mural permanecerão nos Serviços.
                Podemos suspender ou encerrar sua conta ou deixar de lhe fornecer todo ou parte dos Serviços a qualquer momento e por qualquer motivo que julgarmos apropriado. Faremos esforços razoáveis para notificá-lo pelo endereço de e-mail associado à sua conta ou na próxima vez que você tentar acessar sua conta.</p>

                <p class="datap">Exoneração de responsabilidade, limitações de responsabilidade e indenização</p>
                
                <p class="textop">Cada uma das subseções abaixo aplica-se apenas até a extensão máxima permitida pela lei aplicável. Algumas jurisdições não permitem a isenção de garantias implícitas ou a limitação de responsabilidade em contratos e, como resultado, o conteúdo desta seção pode não se aplicar a você. Nada nesta seção tem a intenção de limitar quaisquer direitos que você possa ter e que não possam ser legalmente limitados.
                Sem garantia. O uso dos nossos Serviços e qualquer conteúdo é exclusivamente por sua conta e risco. Eles são fornecidos a você "como estão" e "conforme disponíveis". Isso significa que eles não vêm com nenhuma garantia de qualquer tipo, expressa ou implícita. A VulpiStory especificamente se isenta de qualquer garantia implícita de comerciabilidade, qualidade comercializável, adequação a uma finalidade específica, disponibilidade, segurança, título ou não violação, e quaisquer garantias implícitas em qualquer curso de negociação ou desempenho.
                Responsabilidade pelo conteúdo. Todo o conteúdo, seja ele veiculado publicamente ou transmitido de forma privada, é da exclusiva responsabilidade da pessoa que originou tal conteúdo. Nós não podemos monitorar ou controlar o conteúdo postado através dos Serviços e não podemos nos responsabilizar por tal conteúdo. Não apoiamos, apoiamos, representamos nem garantimos a integridade, veracidade, precisão ou fiabilidade de qualquer conteúdo ou comunicações publicadas através dos Serviços nem endossamos quaisquer opiniões expressas através dos Serviços. Você entende que, ao usar os Serviços, pode estar exposto a conteúdos que possam ser ofensivos, prejudiciais, imprecisos ou de outra forma inadequados ou, em alguns casos, publicações que tenham sido erroneamente rotuladas ou que sejam enganosas.
                Lançamento. Quando você usa os Serviços, você libera o VulpiStory de reclamações, danos e demandas de todos os tipos - conhecidos ou desconhecidos, suspeitos ou insuspeitos, divulgados ou não divulgados - decorrentes ou de alguma forma relacionados a (a) disputas entre usuários ou entre usuários e qualquer terceiro relacionado ao uso dos Serviços e (b) os Serviços.
                Responsabilidade do VulpiStory para você. O VulpiStory não será responsável por quaisquer danos que surjam do seu uso ou em conexão com os Serviços e qualquer conteúdo. Essa exclusão inclui: (a) onde os Serviços são hackeados ou indisponíveis, (b) todos os tipos de danos (diretos, indiretos, punitivos, incidentais, consequentes, especiais ou exemplares), qualquer que seja o tipo de reivindicação ou perda (quebra de contrato, delito (incluindo negligência), violação da garantia ou qualquer outra reivindicação ou perda), (c) quaisquer lucros, dados ou receitas perdidas, ou (d) qualquer conduta ou conteúdo de outros usuários ou terceiros no Site ou nos Serviços. Em nenhuma hipótese a responsabilidade da VulpiStory por danos será superior a (no total) cem reais (BRL $ 100,00).
                Sua responsabilidade para o VulpiStory. Se você fizer algo que nos induza, ou quebrar qualquer uma das promessas que fizer nestes Termos de Serviço, você deverá compensar-nos por quaisquer responsabilidades, perdas, reclamações e despesas (incluindo honorários e custas judiciais razoáveis) que surjam ou se relacionem ao seu uso ou uso indevido dos Serviços. Reservamo-nos o direito de assumir a defesa e o controle exclusivos de qualquer assunto que esteja de outra forma sujeito a esta cláusula. Nesse caso, você concorda em cooperar e nos ajudar a afirmar quaisquer defesas.
                Sites de terceiros . O Site e os Serviços podem conter links para outros sites; por exemplo, histórias, perfis de usuários e outras postagens podem vincular a outros sites. Quando você acessa sites de terceiros, você o faz por sua conta e risco. Nós não controlamos ou endossamos esses sites.</p>

                <p class="datap">Anúncios veiculados</p>
                
                <p class="textop">Disponibilizamos os Serviços gratuitamente. Para poder continuar a fazê-lo, exibimos anúncios e promoções de terceiros em ou em conexão com o Serviço. Como a publicidade que fornecemos é baseada em informações fornecidas por terceiros, não seremos responsáveis por qualquer perda ou dano de qualquer tipo incorrido por você como resultado de qualquer publicidade. Suas interações com anunciantes encontrados no ou através do Serviço, incluindo, sem limitação, toda a confiança na publicidade, todas as transações comerciais e obrigações legais associadas a tais anúncios, são exclusivas entre você e os anunciantes.
                Se você deseja obter mais informações sobre as práticas desses anunciantes terceirizados e suas escolhas sobre como suas informações pessoais podem ser usadas por eles, visite www.networkadvertising.org .
                </p>

                <p class="datap">Termos gerais</p>
                
                <p class="textop">Mudanças . Nossos Termos de Serviço podem mudar de tempos em tempos. Em caso afirmativo, informaremos sobre quaisquer alterações materiais, notificando-o no site ou enviando um e-mail para você. Observe que seu uso continuado dos Serviços após qualquer alteração significa que você concorda e concorda com os novos Termos de Serviço. Se você não concordar com quaisquer alterações nos Termos de Serviço e não quiser se sujeitar aos termos revisados, você precisará encerrar sua conta e / ou parar de usar os Serviços.
                Acordo completo. Estes Termos de Serviço (incluindo qualquer documento incorporado por referência a eles) são o acordo integral entre a VulpiStory e você em relação aos Serviços, e estes Termos de Serviço prevalecem e substituem quaisquer acordos prévios entre a VulpiStory e você em relação aos Serviços.
                Nenhuma renúncia e separação. Se o VulpiStory não exercer ou cumprir um direito ou disposição particular sob estes Termos de Serviço, isso não significa que renunciamos a esse direito ou disposição. Se qualquer disposição destes Termos de Serviço for considerada inválida ou inexequível, tal disposição será limitada ou eliminada na medida mínima necessária, e as disposições restantes destes Termos de Serviço permanecerão em pleno vigor e efeito.
                Escolha de lei e jurisdição. Nós da VulpiStory encorajamos você a nos contatar se você estiver tendo um problema, antes de recorrer aos tribunais. Na infeliz situação em que surgem ações legais, estes Termos de Serviço serão regidos e interpretados de acordo com as leis da Província de São Paulo e as leis do Brasil aplicáveis em São Paulo, independentemente dos princípios de conflitos de leis. Você concorda que qualquer disputa ou reclamação decorrente ou relacionada a estes Termos de Serviço ocorrerá nos tribunais da Província de São Paulo.
                Atribuição. Estes Termos de Serviço são pessoais para você. Você não pode atribuí-los, transferi-los ou sublicenciar, a menos que obtenha o consentimento prévio por escrito da VulpiStory. A VulpiStory tem o direito de atribuir, transferir ou delegar quaisquer de seus direitos e obrigações sob estes Termos de Serviço sem aviso prévio e sem o seu consentimento.</p>
                <img class="img_direitos" src=""><!--Insiri logo e ajustar css ^-^)/ -->
			</div> <!-- modal-content -->
		</div> <!-- modal -->

		<a href="#0" class="modalp-close">Fechar</a>
	   </section> <!-- .section -->
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
    
    <!--Politicas de uso-->
    <script src="js/politicasite/jquery-2.1.1.js"></script>
    <script src="js/politicasite/velocity.min.js"></script> <!-- 4 Resource jQuery / velocity.min.js -->
    <script src="js/politicasite/main.js"></script> <!-- 5 Resource jQuery / Main.js -->
    <!--Fim politicas de uso-->
    
    <!--loaging-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/loaging/fakeLoader.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".fakeloader").fakeLoader({
                    timeToHide:2000,
                    bgColor:"#37414a",
                    /*spinner:"spinner1"*/
                    imagePath:"img/g1.gif"
                });
            });
        </script>
    
     <script>

        MicroModal.init({
            openTrigger: 'data-custom-open', // [3]
        });  

    </script>
    
</body>
</html>
