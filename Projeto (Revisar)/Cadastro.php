<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro - Clinica Medica</title>

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
                    
                    <form method = "POST" action = "php_actions/cadastro.php">
                        <div class="row">
                            <div class="form-group" "col-lg-4">
                                <label>Nome</label>
                                <input type="text" id = "nome" class="form-control" name = "nome">
                            </div>
                            <div class="form-group" "col-lg-4">
                                <label>RG</label>
                                <input type="text" id = "rg"  class="form-control" name = "rg">
                            </div>
							
                            <div class="form-group" "col-lg-4">
                                <label>CPF</label>
                                <input type="text" id = "cpf"  class="form-control" name = "cpf">
                            </div>
							
                            <div class="form-group" "col-lg-1">
                                <label>DDD</label>
                                <input type="number" id = "ddd"  class="form-control" name = "ddd">
                            </div>
							
							<div class="form-group" "col-lg-3">
                                <label>Telefone</label>
                                <input type="tel" id = "telefone"  class="form-control" name = "telefone">
                            </div>
							
                            <div class="form-group" "col-lg-4">
                                <label>E-Mail</label>
                                <input type="email" id = "email"  class="form-control" name = "email">
                            </div>
							
                            <div class="form-group" "col-lg-4">
                                <label>Endereço</label>
                                <input type="name" id = "endereco"  class="form-control" name = "endereco">
                            </div>
							
                            <div class="form-group" "col-lg-4">
                                <label>Cidade</label>
                                <input type="name" id = "cidade"  class="form-control" name = "cidade">
                            </div>
							
                            <div class="form-group" "col-lg-4">
                                <label>Bairro</label>
                                <input type="name" id = "bairro"  class="form-control" name = "bairro">
                            </div>
							
                            <div class="form-group" "col-lg-4">
                                <label>Login</label>
                                <input type="text" id = "login"  class="form-control" name = "login">
                            </div>
							
                            <div class="form-group" "col-lg-4">
                                <label>Senha</label>
                                <input type="password" id = "senha"  class="form-control" name = "senha">
                            </div>
							
                            
                            
                            <div class = "form-group"class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
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
