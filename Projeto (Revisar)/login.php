<!DOCTYPE html>

<?php
	
	include "php_actions/conexao.inc";
	
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica Medica</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/Clinica.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Cronograma Clínica Médica</div>
    <div class="address-bar">334 Navegantes | Porto Seguro | Centro</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="Exemplo.html">Clinica Medica</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Exemplo.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">Agenda</a>
                    </li>
                    <li>
                        <a href="blog.html">Sobre</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<!--Login >
	

	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form method = "POST" action = "login.php">
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="Cadastro.html">Cadastre-se</a>
				  </div>
				</div>
			</div>
		  </div>
	
	< /login -->

    <div class="container">

        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Insira suas
                        <strong>Informações</strong>
                    </h2>
					<hr>
                    <p> 
					<?php 
						
						
						mysql_connect("localhost", "root", "") or die (mysql_error ());

						// Selecionar o Banco de Dados
						mysql_select_db("clinica") or die(mysql_error());
						
						$paciente = "SELECT * FROM paciente";	
						$limite = mysql_query("$paciente");
						
						
						
						while ($paciente = mysql_fetch_array($limite)){
							
						echo "paciente Nº" . $paciente["cod_paciente"] . " | Nome: " . $paciente["nome_paciente"] . " | Telefone: " . $paciente["telefone"] . " | RG: " . $paciente["rg"] . "<br>";
						
						}
						
						mysql_close();
						
					?>
					</p>
                  
                </div>
				
				<div  class="col-lg-12" >
				
				<hr>
				
					<h2 class="intro-text text-center">Exclua o  
						<strong> paciente</strong>
					</h2>
				<hr>

					<div class= "col-lg-4">
						<h4>Insira o nº do paciente: </h4>
							
							
							<form method = "POST" action = "php_actions/deleta_paciente.php">	
							
							
							<div class = "col-lg-3">
							<input type ="text" id = "n_paciente" class = "form-control" name = "n_paciente">
							</div>
							<div class= "col-lg-5">
							<button type="submit" class="btn btn-default">Submit</button>
							</div>
								
							</form>
							
					</div>
					

				</div>
				
				<div class = "col-lg-12">
				
					<div>
							<hr>
							<h2 class="intro-text text-center">Altere um 
								<strong>paciente</strong>
							</h2>
							<hr>
					
					</div>
					
					<div>
						
						<form method = "POST" action = "php_actions/altera_paciente.php">	
							
							
							<div class = "col-lg-3">
							<label>Nº do paciente a alterar</label>
							<input type ="text" id = "n_paciente_alterar" class = "form-control" name = "n_paciente_alterar">
							</div>
							<div class = "col-lg-3">
							<label>Novo nome</label>
							<input type ="text" id = "nome_paciente_alterar" class = "form-control" name = "nome_paciente_alterar">
							</div>
							<div class = "col-lg-3">
							<label>Novo telefone</label>
							<input type ="text" id = "tel_paciente_alterar" class = "form-control" name = "tel_paciente_alterar">
							</div>
							<div class = "col-lg-3">
							<label>Novo rg</label>
							<input type ="text" id = "rg_paciente_alterar" class = "form-control" name = "rg_paciente_alterar">
							</div>
							<div class= "col-lg-5" class= "form-group">
							
								
								<button type="submit" class="btn btn-default">Enviar</button>
							
							
							</div>
								
						</form>
						
					</div>
				
					
				
				</div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>IFBA &copy; xama que e noiss</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
