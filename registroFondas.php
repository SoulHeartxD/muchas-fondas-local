<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Registro de fondas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
</head>
<body>
	<section id="registroFondas">
		<div class="container">
			<div class="row">
				<div class="col-12 propio card-header ">
				<div class="card-header " style="text-align: center;">
				    <h3>Registro de fondas</h3>
				</div>
				<form action="#" id="frmFondas" method="POST" accept-charset="UTF-8">
						<div class="col-12 row justify-content-center">
							<div class="col-4 form-group">
								<label for="fonda">Nombre de la Fonda</label>
								<input type="text" name="fonda" id="fonda" class="form-control">
							</div>
							<div class="col-4 form-group">
								<label for="direccion">Dirección</label>
								<input type="text" name="direccion" id="direccion" class="form-control">
							</div>							
							<div class="col-2 form-group">
								<label for="postal">Código postal</label>
								<input type="text" name="postal" id="postal" class="form-control">
							</div>
							<div class="col-2 form-group">
								<label for="telefono">Telefono</label>
								<input type="tel" name="telefono" id="telefono" class="form-control">
							</div>
							<div class="col-2 form-group">
								<label for="tipo">Tipo de cocina</label>
								<input type="text" name="tipo" id="tipo" class="form-control">
							</div>							
							<div class="col-3">
								<label for="encargado">Nombre completo del encargado</label>
								<input type="text" name="encargado" id="encargado" class="form-control">
							</div>
							<div class="col-3 form-group">
								<label for="informacion">Información adicional del local</label>
								<input type="text" name="informacion" id="informacion" class="form-control">
							</div>							
							<div class="col-2 form-group">
								<label for="fotos">Foto del local</label>
								<input type="date" name="fotos" id="fotos" class="form-control">
							</div>
						</div>
						<div class="col-12 row justify-content-center">								
							<div class="row col-12 justify-content-center" id="boton"></br>
								<button type="button" id="btnGuardar" class="btn btn-info btnContacto" data-accion="guardar">Registrar fonda</button>
							</div>							
						</div>
					</form>	
				</div>			
			</div>
		</div>
	</section>
</body>
</html>