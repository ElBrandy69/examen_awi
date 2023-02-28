#  EXAMEN PRACTICO CRUD CON MODELO MVC

## ¿Que es este proyecto? 
Este es un CRUD sencillo basado en el modelo MVC(Modelo, vista y controlador) utilizando como lenguaje principal el PHP.
Este proyecto posee las 4 funciones principales de un CRUD las cuales son: Insertar, Buscar, Eliminar y Modificar.

## Configuracion del CRUD: 

Primero que nada deberemos de descargar el archivo de nuestro proyecto en formato zip.

<img src="./images/captura1.png"/>

<img src="./images/captura2.png"/>

Posteriormente deberemos localizarnos en nuestro disco local/xampp/htdocs y ahi es donde copiaremos el archivo descargado.

<img src="./images/captura3.png"/>

<img src="./images/captura4.png"/>

Deberemos extraer el contenido del archivo y podremos visualizar todos los archivos que este posee.
<img src="./images/captura5.png"/>

<img src="./images/captura6.png"/>

<img src="./images/captura7.png"/>

Una vez conseguido esto, nos hubicaremos en la carpeta Archivo BD, la cual es la que contiene el archivo para realizar la creacion de las tablas de la base de datos.

<img src="./images/captura8.png"/>



<img src="./images/captura9.png"/>

Al mismo tiempo, deberemos de haber inicializado nuestro XAMPP

<img src="./images/captura10.png"/>


Una vez encendido, nos diriguiremos a nuestro navegador y en este escribiremos localhost/phpmyadmin para inicializar el gestor de base de datos.

<img src="./images/captura11.png"/>

<img src="./images/captura12.png"/>

Una vez dentro tendremos que crear una base de datos a la cual podremos asignarle el nombre que nosotros deseemos.

<img src="./images/captura13.png"/>

Una vez creada abriremos una hoja de SQL.

<img src="./images/captura14.png"/>

Abriremos la carpeta que acabamos de importar con la herramienta de Visual Studio Code, y abriremos el archivo de la carpeta Archivo BD, el cual se llama "bdexamen.sql"
Copiaremos el archivo a partir de la creacion de la tabla de categorias.


<img src="./images/captura15.png"/>

Lo pegaremos en la hoja sql que abrimos anteriormente y le daremos clic en continuar.

<img src="./images/captura16.png"/>

Posteriormente ya se nos habran creado y cargado todas las tablas con sus llaves primarias y foraneas.

<img src="./images/captura17.png"/>

Una vez hecho esto nos tendremos que dirigir a nuestra carpeta de bd, la cual posee todas las configuraciones de conexion a la base de datos. Especificamente el archivo de config.php.

<img src="./images/captura19.png"/>

Se nos mostraran 4 campos que podremos modificar: host, usuario, contraseña y nombre de la base de datos.

<img src="./images/captura20.png"/>

Una vez ya cargado todo, nos ubicaremos en la URL y colocaremos la ruta de la carpeta iniciando por localhost/examen_awi-master


### Funciones

Insertar

Colocaremos este apartado los datos que vamos a controlar en los registros y daremos clic en Insertar 
<img src="./images/INSERT.png"/>

<img src="./images/INSERT2.png"/>

Buscar

Nos ubicaremos en la barra de busqueda ubicada en el extremo superior derecho y colocaremos el nombre que deseemos buscar, posteriormente daremos clic y se nos buscara el registro automaticamente.

<img src="./images/BUSCAR.png"/>

<img src="./images/BUSCAR2.png"/>

Modificar

Nos ubicaremos en un registro y daremos clic en el boton de modificar, se nos mostrara los datos del registro en el menu anteriormemnte usado para insertar, modificaremos los datos y daremos clic en guardar. A continuacion se vera como los datos se han modificado.
<img src="./images/MODIFICAR.png"/>


<img src="./images/MODIFICAR2.png"/>


<img src="./images/MODIFICAR3.png"/>

Eliminar

Seleccionaremos el registro que deseamos eliminar, confirmaremos la eliminacion del registro y posteriormente podremos ver como se ha eliminado el registro satisfactoriamente.

<img src="./images/ELIMINAR.png"/>


<img src="./images/ELIMINAR2.png"/>


<img src="./images/ELIMINAR3.png"/>











