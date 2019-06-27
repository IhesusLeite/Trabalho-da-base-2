<?php 
	include_once('conexao.php');
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
</head>
<body>
	<form method="POST">
		<fieldset><legend>Alterar Cliente</legend>
		Cliente:<input type="text" name="nome" required><br>
		Email:<input type="email" name="email" required><br>
		Senha:<input type="senha" name="senha" required><br>
		<input type="submit" name="alterar" value="Alterar">
		</fieldset>
		<?php 
			if (isset($_POST['alterar'])) {
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				mysqli_query($con ,"UPDATE usuario SET nome='$nome',email='$email',senha='$senha' WHERE id=$id");
				header('location:listar.php');
			}
		?>
	</form>
</body>
</html>