

<?php
include "conexao.inc";
?>
<html>
    
	<head>
	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		
    </head>
    
		<body>
			
			<?php
				

				if(isset ($_POST['nome']) and isset ($_POST['rg']) and isset ($_POST['cpf']) and isset ($_POST['ddd']) 
					and isset ($_POST['telefone']) and isset ($_POST['email']) and isset 
					($_POST['endereco']) and isset ($_POST['cidade']) and isset ($_POST['bairro']) and isset ($_POST['login']) and isset ($_POST['senha'])){
				
					$nome	= $_POST ['nome'];	
					$rg	= $_POST ['rg'];
					$cpf = $_POST ['cpf'];
					$ddd = $_POST ['ddd'];	
					$telefone = $_POST ['telefone'];
					$email	= $_POST ['email'];
					$endereco	= $_POST ['endereco'];
					$cidade	= $_POST ['cidade'];
					$bairro	= $_POST ['bairro'];
					$login	= $_POST ['login'];	
					$senha	= $_POST ['senha'];	
					
						$inserir = "INSERT INTO medico (nome_medico ,rg_medico , cpf_medico , ddd_medico , telefone_medico, email_medico, endereco_medico , cidade_medico , bairro_medico , login_medico , senha_medico) 
						VALUES ('$nome', '$rg', '$cpf', '$ddd', '$telefone', '$email' , '$endereco', '$cidade','$bairro', '$login', '$senha')";
					
						$opa = mysqli_query($conexao,$inserir);
						
						if(!$opa){
							
							echo "opafion";
							
						}
						else{
							header ("location: ../login.php");
						}
							
								
				}
			?>
		</body>
</html>
			<?php
			  mysqli_close($conexao);
			?>