<?php  include"header.php";

//var_dump($_GET); //para validación de qe los datos estan llegando por GET.
?>
<body>
	<div class="container">
		<div class="card"> 
			<h5 class="card-header">Mensaje Recibido</h5>
			<div class="card-body">
				
				<p class="card-text"><?php echo $_GET["string"];  ?></p>
			</div>
		</div>
		<div class="card">
			<h5 class="card-header">Mensaje Codificado</h5>
			<div class="card-body">
				<p class="card-text"><?php echo $_GET["new_str"];  ?></p>
			</div>
		</div>
	</div>

</body>
</html>
