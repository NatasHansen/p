<!DOCTYPE html>
<html>
	<head>
		<title>Salvar</title>
	</head>
	<body>		
		<?php
		// prepara os dados para salvar no banco de dados
		function filtra_entrada($campo) {
			$campo = trim($campo); // remove espaços no início e no final
			$campo = strip_tags($campo); // remove tags html
			$campo = addslashes($campo); // adiciona caractere de escape nas aspas e apostófros
			return $campo;
		}

		// inicializa as variáveis que serão utilizadas abaixo
		$usuario = $senha = $email = '';
	
		// cria um vetor de erros
		$erros = array();

		// recupera os valores passados pelo formulário caso tenha ocorrido uma requisição POST
		if ($_SERVER["REQUEST_METHOD"] == 'POST') {
			$usuario = filtra_entrada($_POST['usuario']);
			$senha = sha1($_POST['senha']);
			$email = filtra_entrada($_POST['email']);
            
			//$salario = filtra_entrada($_POST['salario']);
			//$departamento = filtra_entrada($_POST['departamento']);
			//$admissao = filtra_entrada($_POST['admissao']);
		}
		
		// Verifica se as variáveis permanecem vazias, o que indica dados inválidos
		if (empty($usuario)) {
			$erros[] = 'Usuário é obrigatório.';
		}
		if (empty($senha)) {
			$erros[] = 'Senha é obrigatório.';
		}
		if (empty($email)) {
			$erros[] = 'E-Mail é obrigatório.';
		}
                
		if (count($erros) == 0) {
			// a referencia para a conexao está em $pdo que é incluída pelo arquivo conexao.php
			require_once 'conexao.php';
			
			// Validação básica para verificar se o id informado é um número inteiro, o que indica que o funcionário já existiria no banco
			$id = isset($_POST['id']) && is_numeric($_POST['id']) ? $_POST['id'] : 0;
			
			// Funcionário novo quando o id não for informado
			if ($id == 0) {
				// Elabora a consulta SQL com parâmetros => :nome_parametro
				$sql = 'INSERT INTO dados(usuario, email, senha) VALUES(:usuario, :email, :senha)';
				
				// Registra a consulta no PDO
				$query = $pdo->prepare($sql);
				
				// Passa os dados para a consulta SQL de acordo com os parâmetros
				$query->bindParam(':usuario', $usuario);
				$query->bindParam(':email', $email);
				$query->bindParam(':senha', $senha);
                
				// Executa a SQL no BD
				$result = $query->execute();
	 
				// Retornará falso em caso de erro
				if (!$result) {
					header('location: /p/index.php?cadastro=0');
				}

				header('location: /p/index.php?cadastro=1');
				// echo '<a href="../index.php">Retornar</a>';
			} else { // Atualiza um funcionário existente

				// Elabora a consulta SQL
				$sql = 'UPDATE dados SET usuario = :usuario,';
				$sql .= 'email = :email, senha = :senha,';
				$sql .= 'WHERE id = :id';

				// Registra a consulta no PDO
				$query = $pdo->prepare($sql);
				
				// Passa os dados para a consulta SQL de acordo com os parâmetros
				$query->bindParam(':usuario', $usuario, PDO::PARAM_STR);
				$query->bindParam(':email', $email, PDO::PARAM_STR);
				$query->bindParam(':senha', $senha, PDO::PARAM_STR);
	 
				// Executa a SQL no BD
				$result = $query->execute();
	 
				// Retornará falso em caso de erro
				if (!$result) {
					echo 'Erro ao gravar no banco de dados <br />';
					var_dump($query->errorInfo());				
					die('<a href="javascript:window.history.go(-1);">Retornar e tentar novamente</a>');;
				}
				 
				echo $query->rowCount() . ' linha(s) atualizadas(s)';
			}
		}
		else {
			echo '<h3>Não é possível salvar os dados:</h3>';
			foreach($erros as $erro) {
				echo $erro . '<br />';
			}
			echo '<a href="javascript:window.history.go(-1);">Retornar e corrigir</a>';
		}

		?>
		<br />
	</body>
</html>