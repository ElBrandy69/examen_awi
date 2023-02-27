<?php error_reporting(1); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Productos</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="vendor/jquery/jquery.slim.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
	function eliminar(id)
	{
		if (confirm("¿ Estas seguro de eliminar el registro ?")) 
		{
			window.location = "index.php?ideliminar=" + id;
		}
	}

	function modificar(id)
	{
		window.location = "index.php?idmodificar=" + id;
	}

	function cerrar_sesion()
	{
		if (confirm("¿ Estas seguro de cerrar la sesión ?")) 
		{
			window.location = "cerrar_sesion.php";
		} 	
	}

	function validar()
	{
		var nombre = document.getElementById("txtnombre").value;
		var id = document.getElementById("lstcategorias").value;

		if (nombre.trim().length<1) 
		{
			alert("Nombre esta vacio");
			return false;
		}

		if (nombre.trim().length != nombre.length) 
		{
			alert("Tienes espacios de mas en el nombre");
			return false;
		}

		$.getJSON("validaciones/verificar_categorias.php?c=" + id).done(function(datos)  
	    {
	      if ((isset(datos[0][0]))) 
	      {
	        alert("Categoria no existe, No te quieras pasar de listo");
	        return false;
	      }        
	    }); 

		return true;
	}

	function verificar_producto(id)
	{
	  $.getJSON("validaciones/verificar_producto.php?p=" + id).done(function(datos)  
	    {
	      if (datos[0][0]>0) 
	      {
	        alert("Producto ya existe, verifique");
	      }        
	    });  
	}


</script>
<style>
	body{
		background-color:black;
	}

	h1{
		color: white;
	}

	select{
		width: 208px;
		height: 30px;
		border-radius: 0;
	}
</style>
</head>
<body> 
	<div class="container" style="margin-top:4%;">
	<br>	
	<h1 style="text-align:center;">Componentes de computo</h1>
	
	<br>
	<div class="container" style="display: flex;justify-content:center;">
	<form action="index.php" method="post" id="frminsertar" name="frminsertar" 
	onsubmit="return validar();">
		<input type="text" id="txtid" name="txtid" placeholder="Numero" value="<?php echo @$prod_mod[0][0]; ?>" hidden>
		<input type="text" id="txtnombre" name="txtnombre" onblur="javascript: verificar_producto(this.value);" maxlength="30" placeholder="Nombre" value="<?php echo @$prod_mod[0][1]; ?>" required>
		<input type="text" id="txtcantidad" name="txtcantidad" maxlength="5" placeholder="Cantidad" value="<?php echo @$prod_mod[0][4]; ?>" required>
		<select name="lstproveedores" id="lstproveedores" required>
			<option value="">Seleccione Proveedor</option>
			<?php echo $datos_proveedores; ?>
		</select>

		<select name="lstcategorias" id="lstcategorias" required>
			<option value="">Seleccione Categorias</option>
			<?php echo $datos_categorias; ?>
		</select>

		<input class="btn-info" type="submit" id="btnregistrar" name="btnregistrar" value="<?php 
		if(isset($_GET['idmodificar']))
		{
			echo 'Guardar';
		}
		else
		{
			echo 'Insertar';
		}
		?>">		
	</form>	
	</div>
	
	<br>
	
	<div class="barra">
		<br>
	<ul style="display:flex; justify-content:space-between;">
		<div class="elemento1" >
			<h1>Listado de componentes</h1>
		</div>
		<div class="elemento2" style="display:grid; align-content:center; margin-right:5%;">
				<form action="index.php" id="frmbuscar" name="frmbuscar" method="post">
					<input type="text" id="txtbuscar" name="txtbuscar" placeholder="Buscar nombre">
					<input class="btn-primary" type="submit" id="btnbuscar" name="btnbuscar" value="Buscar">
				</form>
		</div>
	</ul>
	</div>

		<table class="table table-striped table-dark" align="center" style="margin-top: 5%;">
			<tr>
				<td>Num</td>
				<td>Nombre</td>
				<td>Cantidad</td>
				<td>Proveedor</td>
				<td>Categoria</td>
				<td colspan="2" align="center">Accion</td>
			</tr>
			<?php echo $datos; ?>
		</table>

<br><br>

</div>
	
</body>
</html>
