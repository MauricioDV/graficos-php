<!DOCTYPE html>
<html>
<head>
	<title>Graficos con plotly</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="librerias/plotly-latest.min.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						Unidad de Sistemas - F.D.C.P.
					</div>
					<div class="panel panel-body">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="text-center">Gráfico de Barras</h2>
								<div id="cargaBarras"></div>
							</div>
							<div class="col-sm-12">
								<h2 class="text-center">Gráfico de Tortas</h2>
								<div id="cargaTortas"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaBarras').load('barras.php');
		$('#cargaTortas').load('tortas.php');
	});
</script>