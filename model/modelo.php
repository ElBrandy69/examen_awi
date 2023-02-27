<?php

require 'bd/conexion_bd.php';

class Productos extends BD_PDO
{
	function Insertar($nombre, $cantidad, $idproveedor, $idcategoria)
	{
		$this->Ejecutar_Instruccion("Insert into productos(Nombre,Cantidad,id_proveedor,id_categoria) values('$nombre','$cantidad','$idproveedor','$idcategoria')");
	}

	function Eliminar($id)
	{
		$this->Ejecutar_Instruccion("Delete from productos where id_producto = '$id'");
	}

	function Buscar($buscar)
	{
		$datos_buscar = $this->Ejecutar_Instruccion("Select productos.id_producto,productos.Nombre,productos.Cantidad,concat(proveedores.Nombres,' ',proveedores.Apellido_p,' ',proveedores.Apellido_m) as Nombre_prov,id_categoria from productos INNER JOIN proveedores ON productos.id_proveedor=proveedores.id_proveedor where Nombre like '%$buscar%'");
		return $datos_buscar;
	}

	function Buscar_todo()
	{

		$datos_buscar = $this ->Ejecutar_Instruccion("Select productos.id_producto,productos.Nombre,productos.Cantidad,concat(proveedores.Nombres,' ',proveedores.Apellido_p,' ',proveedores.Apellido_m) as Nombre_prov,categorias.Nombre from productos INNER JOIN proveedores ON productos.id_proveedor=proveedores.id_proveedor INNER JOIN categorias ON productos.id_categoria=categorias.id_categoria;");
		return $datos_buscar;
	
	}

	function Modificar($nombre,$cantidad,$idproveedor,$idcategoria,$id_producto)
	{	
		
		$this->Ejecutar_Instruccion("Update productos set Nombre='$nombre',Cantidad='$cantidad',id_proveedor='$idproveedor',id_categoria='$idcategoria' where id_producto = '$id_producto'");
	}

	function Seleccionar($id)
	{
		$prod_mod = $this->Ejecutar_Instruccion("Select * from productos where id_producto = '$id'");
		return	$prod_mod;

	}

	function Tabla_gen($datos_buscar)
	{
		$tabla="";
		foreach ($datos_buscar as $renglon) {
			$tabla.="<tr>";
			$tabla.='<td>'.$renglon[0].'</td>';
			$tabla.='<td>'.$renglon[1].'</td>';
			$tabla.='<td>'.$renglon[2].'</td>';
			$tabla.='<td>'.$renglon[3].'</td>';
			$tabla.='<td>'.$renglon[4].'</td>';
			$tabla.='<td><input class="btn-warning" type="button" id="btnmodificar" name="btnmodificar" value="Modificar" onclick="javascript: modificar('.$renglon[0].');"></td>';
			$tabla.='<td><input class="btn-danger" type="button" id="btneliminar" name="btneliminar" value="Eliminar" onclick="javascript: eliminar('.$renglon[0].');"></td>
			</tr>';
			

			
		}
			return $tabla;
	}
	
}

?>