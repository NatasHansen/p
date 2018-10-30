<?php
session_start();
$id_autor = $_POST['id_autor'];
$nome_autor = $_POST['nome_autor'];

//$id_livro = $_POST[''];
$nome_livro = $_POST['nome_livro'];
$imagem = $_POST['imagem'];
$arquivo = $_POST['arquivo'];
$sinopse = $_POST['sinopse'];
$data = $_POST['data'];
$genero = $_POST['genero'];

$erros = array();

if(empty($nome_livro)) {
    $erros['nome_livro'] = true;
}
if(empty($imagem)) {
    $erros['imagem'] = true;
}
if(empty($arquivo)){
    $erros['arquivo'] = true;
}
if(empty($sinopse)){
    $erros['sinopse'] = true;
}
if(empty($data)){
    $erros['data'] = true;
}
if(empty($genero)){
    $erros['genero'] = true;
}

require 'conexao.php';

try {
        $stmt = $conn->prepare(
       "SELECT * FROM livros WHERE nome_livro = :nome_livro"
        );

        $stmt->bindParam(':nome_livro', $nome_livro);
        $stmt->execute();

        if($stmt->rowCount() >= 1){
            
            $retorno['deucerto'] = 4;
            $retorno['mensagem'] = "Nome do livro já existente!";
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
	    $stmt = $conn->prepare("INSERT INTO livros (nome_autor, nome_livro, imagem, arquivo, data, genero)
	    VALUES (:nome_autor, :nome_livro, :imagem, :arquivo, :data, :genero)");
	    
	    $stmt->bindParam(':nome_autor' , $nome_autor);
	    $stmt->bindParam(':nome_livrp' , $nome_livro);
	    $stmt->bindParam(':imagem' , $imagem);
	    $stmt->bindParam(':arquivo' , $arquivo);
	    $stmt->bindParam(':data' , $data);
	    $stmt->bindParam(':genero' , $genero);
	    $stmt->execute();
        
	    $retorno['deucerto'] = 1;
	    $retorno['mensagem'] =  "Livro cadastrado com sucesso!";
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