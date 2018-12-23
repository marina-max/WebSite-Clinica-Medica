<?php
include "conexao.inc";
?>
<html>
    
	<head>
	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		
    </head>
    
		<body>
			
			<?php
				

				if(isset ($_POST['n_paciente']) ){
				
					$n_paciente	= $_POST ['n_paciente'];	
						
					
						$deletar = "DELETE FROM PACIENTE WHERE cod_paciente = " . $n_paciente;
					
						$opa = mysqli_query($conexao,$deletar);
						
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