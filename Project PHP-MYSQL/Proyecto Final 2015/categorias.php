<!DOCTYPE html><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="Juan Ignacio Rebella Couto" content="Proyecto Final PHP 2015" />
    <link rel="stylesheet" href="estilo.css" type="text/css" />
    <LINK rel="stylesheet" type="text/css" href="style.css" />   
    <script type="text/javascript" src="funcioneselectro.js"> </script>
	<title>Electro.WEB</title>
</head>


<!-- Seccion Principal -->
<?php include('header.php');?>

<!-- Ingreso y modificación de categorías -->


<div class="prod">
   <fieldset>
    <legend align="center">Ingreso y modificación de categorías.</legend>
   <table align="center">
        <tr>          
          <td>ID:</td>
          <td>
          <input 
          		placeholder="ID"
                id="dataID"
                type="text"
                name="ID"
                maxlength="50"
                title="Máximo 10 dígitos"
             />
            </td>
        </tr>        
         <tr> 
          <td>Nombre:</td>
          <td>
          <input
          		placeholder="Nombre"
                id="dataNOM"
                type="text"
                name="NOM"
                maxlength="100"
                title="Máximo 100 caracteres"
             />
            </td>
        </tr>                     
     <tr>
       <td colspan="2">
         <input type="button" value="Modificar"   onclick=""/>
         <input type="reset"  value="Cancelar" />       
       </td>
     </tr>
    </fieldset>     
 </table>
</div>


<Div class="nav">
		
        <p>Copyright &copy; 2017 Rebella Productions</p>
	</Div>


 </body>
</html>