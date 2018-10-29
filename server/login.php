<?php  
$usuario = $_POST['usuario_login'];
$pass = $_POST['pass'];

$erros = array();

if(empty($usuario)) {
    $erros['usuario'] = true;
}

if(empty($pass)) {
    $erros['pass'] = true;
}

$pass = sha1($pass);
require 'conexao.php';

try {
        $stmt = $conn->prepare(
       "SELECT * FROM usuarios WHERE usuario = :usuario"
        );

        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();

        if($stmt->rowCount() < 1){
            
            $retorno['deucerto'] = 4; // usuário não existe
            $retorno['mensagem'] = "Usuário não existente!";
            echo json_encode($retorno);
            die;
        }
    
    }catch(PDOException $e){
    
       $retorno['deucerto'] = 2; // usuário existe
	    $retorno['mensagem'] = "Usuário existente!";
	    $retorno['error'] = $e->getMessage();
	    echo json_encode($retorno);
}

if(count($erros) < 1){

    try {
        $stmt = $conn->prepare(
        "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha;"
        );

        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $pass);
        $stmt->execute();

        if($stmt->rowCount() == 1){ // deu certo
            session_start();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id'] = $result['id'];
            $_SESSION['usuario'] = $result['usuario'];
            $_SESSION['foto'] = $result['foto'];

            $retorno['deucerto'] = true;
            $retorno['mensagem'] = "Parabéns! Logou!";
            echo json_encode($retorno);
        }else{
            $retorno['deucerto'] = false;
            $retorno['mensagem'] = "E-mail ou Senha Inválidos";
            echo json_encode($retorno);
        };
    } catch(PDOException $e){
        $retorno['deucerto'] = false;
        $retorno['mensagem'] = "Opss! Deu ruim!";
        $retorno['error'] = $e->getMessage();
        echo json_encode($retorno);

    }
    
}else{
    $retorno['deucerto'] = 3; // erro de formulário incompleto
    $retorno['mensagem'] = "Preencha todos os campos!";
    echo json_encode($retorno);
}

?>
