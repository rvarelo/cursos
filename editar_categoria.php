<?php 

	echo $id = $_GET['id'];

	include 'conexao.php';	
	

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Categoria</Title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        #tamanhoContainer{
            width: 500px;
        }
        #Botao{
           background-color: #31B433; /*fundo*/
           border: #9EE010;
           color: #ffffff; /*letra*/
        }
    </style>    

</head>
<body>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px">

		<?php 
	
			$sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
			$busca = mysqli_query($conexao,$sql);

			while ($array = mysqli_fetch_array($busca)) {
				$id_categoria = $array['id_categoria'];
				$nome_categoria = $array['nome_categoria'];				

		 ?>
		<h4>Fomulario de Cadastro</h4>
        <form action="_atualizar_categoria.php" method="post" style="margin-top: 20px">
			<div class="form-group">
			    <label>ID Categoria</label>
			    <input type="number" class="form-control" name="id_categoria" value="<?php echo $id_categoria ?>" style="display: disabled" disabled>
			    <input type="number" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display: none;">
			</div>
			<div class="form-group">
			    <label>Nome Categoria</label>
			    <input type="text" class="form-control" name="nome_categoria"  value="<?php echo $nome_categoria ?>" >
			</div>			
            <div style="text-align: right;">                
                <button type="submit" id="Botao" class="btn btn-success btn-sm">Atualizar</button>
            </div>
        	<?php } ?>
		</form>
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>