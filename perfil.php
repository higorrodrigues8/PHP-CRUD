<?php
	include_once("conexao.php");

	$ID = $_GET['id'];
	$sql = "SELECT * FROM clientes WHERE idCliente = $ID";
	$consulta = $con->query($sql);
	$dados = $consulta->fetch_array();
	
	$nome = $dados['nomeCliente'];
	$telefone = $dados['telefoneCliente'];
	$email = $dados['emailCliente'];
	$senha = $dados['senhaCliente'];		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<span style="padding: 10px;"></span>
				<h1 class="text-center text-dark">Formulário para Cadastro</h1>
				<span style="padding: 10px;"></span>
				<form action="atualiza.php" method="post">
					<div class="form-group"><input type="hidden" name="id" value="<?= $ID ?>"></div>
					<div class="form-group"><input class="form-control" type="text" name="nome" placeholder="Nome" value="<?= $nome ?>"></div>
					<div class="form-group"><input class="form-control" type="number" name="telefone" placeholder="Telefone" value="<?= $telefone ?>"></div>
					<div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" value="<?= $email ?>"></div>
					<div class="form-group"><input class="form-control" type="password" name="senha" placeholder="Senha" value="<?= $senha ?>"></div>
					<div class="text-center"><input class="btn btn-dark" type="submit" value="Cadastrar"></div>
				</form>			
				<span style="padding: 10px;"></span>
				<div class="text-center"><button class="btn btn-dark"><a href="deletar.php?id=<?php echo $ID; ?>" style="color: white;">Deletar esta entrada</a></button></div>				
			</div>			
		</div>
	</div>		
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>











