<?php  

	include 'conexao.php'; //conexao

	$id = $_POST['id'];	//recebe o id
	//$nroproduto = $_POST['nroproduto'];
	$nomeproduto = $_POST['nomeproduto'];
	$categoria = $_POST['categoria'];
	$quantidade = $_POST['quantidade'];
	$fornecedor = $_POST['fornecedor'];	

	$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`='$quantidade',`fornecedor`='$fornecedor' WHERE id_estoque = $id";

	$atualizar = mysqli_query($conexao,$sql);

?>
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <div class="container" style="width: 500px;margin-top: 20px">
	<center>
 		<h3>Atualizado com sucesso!</h3>
 		<div style="padding-top: 20px">
 			<center>
 				<a href="listar_produtos.php" role='button' class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
 			</center>
		</div>
	</center>
 </div>