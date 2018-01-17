
<!DOCTYPE HTML>
<html>


  <head>
  
  <style>
  
  #futer {
   font-size: 20px;
   position:absolute;
   bottom:0;
   position:center;
}
  
  
  </style>
  
  
  <script>
  function keyword(){
 var word=mySearch.value;
 alert(word);
  }
  
  </script>
  
  
  
  </head>
  
  <body>
  

<center>
<image src = "img/sajkaca_search.png">
<br>
<input type = "search" value="Trazi" name = "type" id= "mySearch"/>

<input type ="button" value = "Trazi" id="seo" onclick = "keyword()"/>



<br>
<br>
<center><h2>Torenti za skidanje :</h2></center>
</center>




  </body>




</html>


<?php


	



//dovde scanner

$files = scandir('torenti');
sort($files); // this does the sorting
foreach($files as $file){




 
echo'<center><table style="border: 1px solid black; id = "" ">'.'<center>'.'<tr>'.'<th>Torent :</th>'.'<tr><td><a style = "font-size:19px;" href="torenti/'.$file.'">'.$file.'</a></td><td> Klik da skines</td></tr></center>';
  
    //Bez greske : echo'<a href="torenti/'.$file.'">'.$file.'</a>';
	
	
	//echo'<center>'.'<a style = "font-size:20px;" href="torenti/'.$file.'">'.$file.'</a>'.'</center>';
	
	
}
?>






