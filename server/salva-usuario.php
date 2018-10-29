<?php
$usuario = trim($_POST['usuario']);
$senha = $_POST['senha'];
$email1 = trim($_POST['email1']);

$erros = array();

if(empty($usuario)) {
    $erros['usuario'] = true;
}

if(empty($senha)) {
    $erros['senha'] = true;
}

if(empty($email1)) {
    $erros['email'] = true;
}

$senha = sha1($senha);
require 'conexao.php';

try {
        $stmt = $conn->prepare(
       "SELECT * FROM usuarios WHERE usuario = :usuario OR email = :email"
        );

        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':email', $email1);
        $stmt->execute();

        if($stmt->rowCount() >= 1){
            
            $retorno['deucerto'] = 4;
            $retorno['mensagem'] = "Usuário ou E-mail já existentes!";
            echo json_encode($retorno);
            die;
        }
    
    }catch(PDOException $e){
    
       $retorno['deucerto'] = 2; //erro genérico
	    $retorno['mensagem'] = "Tente novamente mais tarde!";
	    $retorno['error'] = $e->getMessage();
	    echo json_encode($retorno);
}

if(count($erros) < 1){
    
    require_once 'conexao.php';

	try{   
	    $stmt = $conn->prepare("INSERT INTO usuarios (usuario, email, senha)
	    VALUES (:usuario, :email1, :senha)");
	    
	    $stmt->bindParam(':usuario' , $usuario);
	    $stmt->bindParam(':email1' , $email1);
	    $stmt->bindParam(':senha' , $senha);
	    $stmt->execute();
        
	    $retorno['deucerto'] = 1;
	    $retorno['mensagem'] =  "Cadastrado com sucesso! Faça seu Login.";
	    echo json_encode($retorno);        
	}

	catch(PDOExeption $e){
	    $retorno['deucerto'] = 2; // erro ao gravar no banco
	    $retorno['mensagem'] = "Ops. Algo deu Errado!";
	    $retorno['error'] = $e->getMessage();
	    echo json_encode($retorno);
	}
}else{
    
    $retorno['deucerto'] = 3; // erro de formulário incompleto
    $retorno['mensagem'] = "Preencha todos os campos!";
    echo json_encode($retorno);
    

}
?>