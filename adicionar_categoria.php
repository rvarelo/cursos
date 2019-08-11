<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Categoria</title>
<!-- bootstrap -->
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

<div class="container"id="tamanhoContainer" style="margin-top: 40px">
	
	<div style="text-align: right;">
			<a href="index1.php" role='button' class="btn btn-sm btn-primary">Voltar</a>
	</div>

	<h4>Cadastro de Categoria</h4>
    <form action="_inserir_categoria.php" method="post" style="margin-top: 20px">		
			
		<div class="form-group">
			<label>Nome da Categoria</label>
			<input type="text" class="form-control" name="nome_categoria" placeholder="Insira o nome da Categoria"  autocomplete="off" required>
		</div>

		<div style="text-align: right;">                
        	<button type="submit" id="Botao" class="btn btn-success btn-sm">Cadastrar</button>
        </div>		
	</form>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>