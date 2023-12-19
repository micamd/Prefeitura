<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" type="text/css" href="css/style.css">
	<head>
		<meta charset="utf-8">
		<title>Cadastrar</title>
		<a href="index.php">Cadastrar</a><br>
		<a href="listar.php">Listar</a><br>	
		<a href="edit_usuario.php">Editar</a><br>		
	</head>
	<body>

	<nav class="menu">
				<ul>
				  <li><a href="#conteudo1">Cadastrar pessoa</a></li>
				  <li><a href="#conteudo2">Cadastrar protocolo</a></li>
				</ul>
			</nav>
			<div class="container_form">
		<h1>Cadastrar Pessoa</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<section class="conteudo1" id="conteudo1">
		<form method="POST" action="processa.php">

		
            <h1>Formulário de Cadastro</h1>
            <form class="form" action="#" method="post">
                
                <div class="form_grupo">
                    <label for="nome" class="form_label">Nome</label>
                    <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
                </div>
                
                <div class="form_grupo">
                    <label for="data" class="form_label">Data de nascimento</label>
                    <input type="date" name="data" class="form_input" id="data" placeholder="Data de nascimento" required>
                </div>

				<div class="form_grupo">
                    <label for="datanascimento" class="form_label">CPF</label>
                    <input type="varchar" name="cpf" class="form_input" id="cpf" placeholder="CPF" required>
                </div>   

				<div class="form_grupo">
                    <label for="sexo" class="form_label">Sexo</label>
                    <input type="sexo" name="sexo" class="form_input" id="sexo" placeholder="Sexo" required>
                </div>   

				<div class="form_grupo">
                    <label for="cidade" class="form_label">Cidade</label>
                    <input type="cidade" name="cidade" class="form_input" id="cidade" placeholder="Cidade" required>
                </div>   
                
				<div class="form_grupo">
                    <label for="bairro" class="form_label">Bairro</label>
                    <input type="bairro" name="bairro" class="form_input" id="bairro" placeholder="Bairro" required>
                </div>  

				<div class="form_grupo">
                    <label for="rua" class="form_label">Rua</label>
                    <input type="rua" name="rua" class="form_input" id="rua" placeholder="Rua" required>
                </div>  
			
				<div class="form_grupo">
                    <label for="numero" class="form_label">Numero</label>
                    <input type="numero" name="numero" class="form_input" id="numero" placeholder="Numero" required>
                </div>  
			
				<div class="form_grupo">
                    <label for="complemento" class="form_label">Complemento</label>
                    <input type="complemento" name="complemento" class="form_input" id="complemento" placeholder="Complemento" required>
                </div> 
			
			
			<div class="submit">
			
			<input type="hidden" name="acao" value="enviar">
                      <button type="submit" name="Submit" class="submit_btn" >Cadastrar</button>
			</div>
		</div>
	</form>
		</section>
			</div>
			</section>
		</form>
		<h1></h1>
		<nav class="menu">
		<div class="container_form">
		<h1>Cadastrar Protocolo</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<section class="conteudo2" id="conteudo2">
			
		<form method="POST" action="protocolo.php">

		<h1>Formulário de Cadastro</h1>
            <form class="form" action="#" method="post">
                
                <div class="form_grupo">
                    <label for="descricao" class="form_label">Descrição</label>
                    <input type="text" name="descricao" class="form_input" id="descricao" placeholder="Descrição" required>
                </div>
			
				<div class="form_grupo">
                    <label for="data" class="form_label">Data</label>
                    <input type="date" name="data" class="form_input" id="data" placeholder="Data" required>
                </div>
			
				<div class="form_grupo">
                    <label for="prazo" class="form_label">Prazo</label>
                    <input type="date" name="prazo" class="form_input" id="prazo" placeholder="Prazo" required>
                </div>

				<div class="form_grupo">
                    <label for="contribuinte" class="form_label">Contribuinte</label>
                    <input type="text" name="contribuinte" class="form_input" id="contribuinte" >
                </div>
				<div class="submit">
			
			<input type="hidden" name="acao" value="enviar">
                      <button type="submit" name="Submit" class="submit_btn" >Cadastrar</button>
			</div>

	</form>
		</section>
		</div>
			</section>
		</form>
	</body>
</html>