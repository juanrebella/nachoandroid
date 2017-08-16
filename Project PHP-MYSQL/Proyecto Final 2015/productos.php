<!DOCTYPE html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="Juan Ignacio Rebella Couto" content="Proyecto Final PHP 2015" />
    <link rel="stylesheet" href="estilo.css" type="text/css" />
    <LINK rel="stylesheet" type="text/css" href="style.css" />  
    <script type="text/javascript" src="funcioneselectro.js"> </script>
	<title>Electro Web</title>
</head>
<?php include('conectar.php'); ?>

<!-- Seccion Principal -->
<body>
<?php include('header.php');?>
<span style="font-weight: 700">
<!-- Tabla de Productos -->

<div class="prod">
  <form action="productosINS.php" method="POST">
        <span style="font-weight: 70">
        <fieldset>
        <legend align="center" style="font-size: 18px; font-style: normal;">Productos</legend>
     <table align="center">          <!-- id en minuscula va para javascr --> <!--ID en mayuscula va a ser variable en otro.php-->
     <tr>          
       <td><span style="font-weight: 700">ID:</span></td>
          <td>
            <span style="font-weight: 700">
            <input 
            	placeholder="ID"
                id="dataID"  
                type="text"
                name="ID"
                maxlength="50"
                title="Máximo 10 dígitos"
             />
            </span></td>
    </tr>        
          <tr> 
          <td><span style="font-weight: 700">Descripción:</span></td>
          <td>
            <span style="font-weight: 700">
            <input 
            	placeholder="Descripción"
                id="dataDES"
                type="text"
                name="DES"
                maxlength="40"
                title="Máximo 40 caracteres"
             />
            </span></td>
        </tr>              
         <tr> 
          <td><span style="font-weight: 700">Origen:</span></td>
          <td>
            <span style="font-weight: 700">
            <input 
            	placeholder="Orígen"
                id="dataORI"
                type="text"
                name="ORI"
                maxlength="100"
                title="Máximo 100 caracteres"
             />
            </span></td>
        </tr>              
         <tr>
           <td><span style="font-weight: 700">Precio:</span></td>
           <td>
             <span style="font-weight: 700">
             <input 
             	placeholder="Precio"
                id="dataPRE"
                type="text"
                name="PRE"
                maxlength="15"
                title="Máximo 15 caracteres"
             />
             </span></td> 
    </tr>
         <tr>
          <td><span style="font-weight: 700">Categoría:</span></td>
          <td>
            <span style="font-weight: 700">
            <input 
            	placeholder="Categoría"
                id="dataCAT"
                type="text"
                name="CAT"
                maxlength="100"
                title="Máximo 100 caracteres"
             />
            </span></td>
        </tr>  
             <tr>
       <td colspan="2">
         <span style="font-weight: 700">
         <input type="submit" name="submit" value="Enviar" />
         <input type="reset"  value="Cancelar" />       
         </span></td>
     </tr>
     </table>
  </form>
</div>

	<Div class="nav">
		<p>Copyright &copy; 2017 Rebella Productions</p>
	 </Div>

<div class="gif">

<a href="https://www.mcdonalds.com/us/en-us.html">
<img src="images/ronald.gif"  width="350" height="140" alt="Regalo de Ronald!!">
</a>

<a href="https://www.mcdonalds.com/us/en-us.html">
<img src="images/banner.gif" height="140" width="350">
</a>

</div>

<div >
<h1 align="center"> Oh, Yes Sir. </h1>
<p id="inicio">
 She doesn't trust anyone. Money has cut her off from people.

Then comes the apparent non-sequitur. "In a tree by the brook, there's a songbird who sings, sometimes all of our thoughts are misgiven." So far the song has been about a lady and a stairway, or if we're already on the metaphorical bandwagon, it's about materialism and the way that cuts us off from other people. We can't understand this line except in the context of the rest<img src="images/zeppelin.jpg"  width="170" height="204" alt="Led Zeppelin" align="right"> of the song, but we'll soon see that a change from an old way of thinking to a new one is the real theme of this song. So eventually we'll understand that this line starts the real theme of the song and everything that came before it is a metaphor for the old way of thinking.

The refrain is "Oooo, it makes me wonder." Wonder what? The singer is rethinking something. But what? <br>

<span>The story takes a personal turn with the line, "There's a feeling I get when I look to the west and my spirit is crying for leaving." This is a lovely poetic line that boils down to "Facing death makes me think about what's important in life." Because the sun sets there, west has been a metaphor for death since at least ancient Egyptian times.  

"In my thoughts I have seen rings of smoke through the trees and the voices of those who stand looking." Rings of smoke denote campfires, indicating that people live there, despite being hidden. Those who stand looking are people who witness evil, but say nothing. The people in his thoughts are coming out of hiding to stand up for what's right. 

"And it's whispered that soon, if we all call the tune, then the piper will lead us to reason."
</p>
<p><span>

 </p>	

</div>

</body>
</html>