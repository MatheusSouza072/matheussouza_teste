<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title>ContaÁgil</title>

	<style type="text/css">

		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: rgb(255, 255, 255);
			margin: 0px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #8c8989;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #5c8ebf;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#header {
			padding: 1%;
			margin: 0;
			background-color: rgb(0, 128, 255);
		}

		#body {
			padding: 1%;
			margin: 0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 0px solid #D0D0D0;
			box-shadow: 0 0 0px #D0D0D0;
		}
	</style>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>

<div id="container">
	<div id="header">
		<p>
			<br>
		<center><img src="web/logo.png"></center>
		<br>
		</p>
	</div>

	<div id="body">
		<h1>Ambiente de teste</h1>
		<br>

		<h2>Introdução</h2>
		<hr>
		<p>
			<br><strong>MVC:</strong>
			<br>
			<br>O MVC é um modelo de arquitetura que separa o código em 3 camadas:
			<br>
			<br>Controller: camada de controle
			<br>Model: Lógica da aplicação
			<br>View: Apresentação
			<br>
			<br><strong>CodeIgniter:</strong>
			<br>
			<br>É um framework de aplicação MVC que já possui uma série de recursos para facilitar o desenvolvimento do
			programador.
			<br>
		</p>

		<br>
		<h2>Atividades</h2>
		<hr>
		<p>
			<br>1. Implemente as bibliotecas do bootstrap e Jquery.
			<br>
			<br>2. Liste o resultado da tabela cad_tarefa em uma table.
			<br>
			<br>3. Adicione na lista um comando para exportação do resultado em pdf.
			<br>
			<br>4. Adicione um formulário para adicionar registros e atualizar a lista com Jquery (sem reload da
			página).
			<br>
			<br>5. Crie uma API para captura dos dados da mesma tabela.
			<br>
			<br>6. Publique o resultado em um repositório GIT de sua escolha e adicione um link para o mesmo.
			<br>
			<br><strong>Importante, efetuar as implementações em uma cópia dessa estrutura</strong>
			<br>
		</p>

		<br>
		<h2>Informações</h2>
		<hr>
		<p>
			<br><strong>FTP:</strong>
			<br>
			<br>IP: 184.171.252.18
			<br>Usuário: contaagil@gane.com.br
			<br>Senha: contaagil
			<br>
			<br><strong>Banco:</strong>
			<br>
			<br>IP: 184.171.252.18
			<br>Usuário: contaagil
			<br>Senha: contaagil
			<br>Banco: contaagil
			<br>
			<br><strong>Tabela:</strong>
			<br>
			<br>CREATE TABLE `cad_tarefa` (
			<br>`cod_tarefa` int(3) unsigned NOT NULL AUTO_INCREMENT,
			<br>`cod_categoria` int(3) DEFAULT NULL,
			<br>`nome` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
			<br>`previsao` int(1) DEFAULT NULL,
			<br>`texto` text COLLATE utf8mb4_unicode_ci,
			<br>`valor` double DEFAULT NULL,
			<br>`cod_usuario_c` int(3) DEFAULT NULL,
			<br>`data_c` datetime DEFAULT NULL,
			<br>`cod_usuario_a` int(3) DEFAULT NULL,
			<br>`data_a` datetime DEFAULT NULL,
			<br>PRIMARY KEY (`cod_tarefa`)
			<br>) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
			<br>
		</p>

		<br>
		<h2>Resultado</h2>
		<hr>
		<p>
		</p>
		<div id="geral">
			<button id="click">Reload</button>

			<table class="table table-striped table-dark">

				<tr>
					<th scope="col">cod_tarefa</th>
					<th scope="col">cod_categoria</th>
					<th scope="col">nome</th>
					<th scope="col">previsao</th>
					<th scope="col">texto</th>
					<th scope="col">valor</th>
					<th scope="col">cod_usuario_c</th>
					<th scope="col">data_c</th>
					<th scope="col">cod_usuario_a</th>
					<th scope="col">data_a</th>

				</tr>
				<?php
				/** @var TYPE_NAME $tarefas */
				foreach ($tarefas as $tarefa) : ?>
					<script>
						function update() {
							$.get("welcome_messag", function (data) {
								$("#geral").html(data);
								window.setTimeout(update, 10000);
							});
						}

					</script>
					<tr>
						<td><?= $tarefa['cod_tarefa'] ?></td>
						<td><?= $tarefa['cod_categoria'] ?></td>
						<td><?= $tarefa['nome'] ?></td>
						<td><?= $tarefa['previsao'] ?></td>
						<td><?= $tarefa['texto'] ?></td>
						<td><?= $tarefa['valor'] ?></td>
						<td><?= $tarefa['cod_usuario_c'] ?></td>
						<td><?= $tarefa['data_c'] ?></td>
						<td><?= $tarefa['cod_usuario_a'] ?></td>
						<td><?= $tarefa['data_a'] ?></td>
					</tr>

				<?php endforeach ?>


			</table>

		</div>

		<script>
			$('#click').click(function () {
				var div = $('#geral').html();
				$.ajax({
					url: '/path/to/file.php',
					type: 'POST',
					dataType: 'json',
					data: {param1: 'value1'},
				})
					.done(function (data) {
						if (data.success == 'ok') {
							$('#geral').html(div);
						} else {
// show errors.
						}
					})
					.fail(function () {
						console.log("error");
					})
					.always(function () {
						console.log("complete");
					});
			});

		</script>

		<a href="<?= base_url(); ?>Produtos/gerarPDF">Export to PDF</a>

		<br>

		<h2>Inserção</h2>

		<?php
		echo form_open("tarefas/novo");

		echo form_label("Cod_tarefa", "cod_tarefa");
		echo form_input(array(
			"name" => "cod_tarefa",
			"id" => "cod_tarefa",
			"class" => "form-control",
			"maxlength" => "255"

		));

		echo form_label("Cod_categoria", "cod_categoria");
		echo form_input(array(
			"name" => "cod_categoria",
			"id" => "cod_categoria",
			"class" => "form-control",
			"maxlength" => "255"

		));

		echo form_label("Nome", "nome");
		echo form_input(array(
			"name" => "nome",
			"id" => "nome",
			"class" => "form-control",
			"maxlength" => "255"

		));

		echo form_label("Previsao", "previsao");
		echo form_input(array(
			"name" => "previsao",
			"id" => "previsao",
			"class" => "form-control",
			"maxlength" => "255"

		));

		echo form_label("Texto", "texto");
		echo form_input(array(
			"name" => "texto",
			"id" => "texto",
			"class" => "form-control",
			"maxlength" => "255"

		));

		echo form_label("Valor", "valor");
		echo form_input(array(
			"name" => "valor",
			"id" => "valor",
			"class" => "form-control",
			"maxlength" => "255"

		));

		echo form_label("Cod_usuario_c", "cod_usuario_c");
		echo form_input(array(
			"name" => "cod_usuario_c",
			"id" => "cod_usuario_c",
			"class" => "form-control",
			"maxlength" => "255"

		));

		echo form_label("Data_c", "data_c");
		echo form_input(array(
			"name" => "data_c",
			"id" => "data_c",
			"class" => "form-control",
			"maxlength" => "255"

		));

		echo form_label("Cod_usuario_a", "cod_usuario_a");
		echo form_input(array(
			"name" => "cod_usuario_a",
			"id" => "cod_usuario_a",
			"class" => "form-control",
			"maxlength" => "255"

		));

		echo form_label("Data_a", "data_a");
		echo form_input(array(
			"name" => "data_a",
			"id" => "data_a",
			"class" => "form-control",
			"maxlength" => "255"

		));

		echo form_button(array(
			"class" => "btn btn-primary",
			"type" => "submit",
			"content" => "Cadastrar Valor"
		));

		echo form_close();
		?>


	</div>


	<p class="footer">Page rendered in <strong>{elapsed_time}</strong>
		seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>


</body>
</html>
