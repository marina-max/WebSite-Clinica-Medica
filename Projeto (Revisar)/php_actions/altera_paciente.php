<?php
include "conexao.inc";
?>
<html>
    
	<head>
	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		
    </head>
    
		<body>
			
			<?php
				

				if(isset ($_POST['n_paciente_alterar'])and isset ($_POST['nome_paciente_alterar']) and isset ($_POST['tel_paciente_alterar']) and isset ($_POST['rg_paciente_alterar']) ){
				
					$n_paciente	= $_POST ['n_paciente_alterar'];	
					$nome_paciente	= $_POST ['nome_paciente_alterar'];
					$tel_paciente	= $_POST ['tel_paciente_alterar'];
					$rg_paciente	= $_POST ['rg_paciente_alterar'];
						
					
						$alterar = "UPDATE paciente SET nome_paciente = '" . $nome_paciente .  "', telefone = '" . $tel_paciente . "', rg = '" . $rg_paciente . "' WHERE cod_paciente = " . $n_paciente;


						echo $alterar;

					
						$opa = mysqli_query($conexao,$alterar);
						
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