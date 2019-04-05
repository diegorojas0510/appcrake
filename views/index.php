<?php include "header.php"?>

<body>
	<div class="container">

		<form class="form-horizontal" method="POST" style="margin:0 auto"  enctype="multipar/form-data" action="../controllers/keys.controller.php">
			<div class="form-group">
				<label class="col-lg-8 control-label">Mensaje</label>
				<div class="col-lg-4">
					<textarea rows="4" cols="50" class="form-control" name="mensaje"></textarea>
				</div>
			</div>
			<div class="">
				<button type="submit" value="Enviar" name="submit" class="btn btn-success left">Enviar</button>
			</div>
		</form>
	</div>
</body>
</html>
