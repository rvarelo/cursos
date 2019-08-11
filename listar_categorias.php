<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Categorias</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/a1451ad0fa.js"></script>
</head>
<body>

<div class="container" style="width: 500px;margin-top: 40px">


	<div style="text-align: right;">
		<a href="index1.php" role='button' class="btn btn-sm btn-primary">Voltar</a>
	</div>


	<h3>Lista de Categorias</h3>	
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Categoria</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>          
    	<?php 
			include 'conexao.php';
			$sql = "SELECT * FROM `categoria`";
			$busca = mysqli_query($conexao,$sql);

			while ($array = mysqli_fetch_array($busca)) {
				$id_categoria = $array['id_categoria'];
				$nome_categoria = $array['nome_categoria'];				
 		?>
 	<tr>    	
    	<td><?php echo $nome_categoria  ?></td>    	
    	<td><a class="btn btn-sm btn-warning" style="color:#fff" href="editar_categoria.php?id=<?php echo $id_categoria ?>"  role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
		<a class="btn btn-sm btn-danger" style="color:#fff" href="deletar_categoria.php?id=<?php echo $id_categoria ?>"  role="button"><i 	class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>

		<?php } ?>

    </tr>  
</table>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>