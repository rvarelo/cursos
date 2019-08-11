<?php  

	include 'conexao.php'; //conexao

	$id = $_GET['id'];	//recebe o id	

	$sql = "DELETE FROM `categoria` WHERE id_categoria = $id";

	$deletar = mysqli_query($conexao,$sql);

?>
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <div class="container" style="width: 500px;margin-top: 20px">
	<center>
 		<h3>Deletado com sucesso!</h3>
 		<div style="padding-top: 20px">
 			<center>
 				<a href="listar_categorias.php" role='button' class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
 			</center>
		</div>
	</center>
 </div>