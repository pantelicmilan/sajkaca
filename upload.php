<!DOCTYPE html>
<html>
<head>
  <title>Apluduj tvoj torent fajl :D</title>
  
  <style>
#footer {
   font-size: 20px;
   position:absolute;
   bottom:0;
   position:center;
}
  </style>
  
</head>
<body>

<center><image src = "img/sajkaca_upload.png"></image></center>


  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Postavite svoj torent (.torrent) :</p>
    <input type="file" name="uploaded_file" accept=".torrent"></input><br />
	<br>
    <input type="submit" value="Posaljite"></input>
  </form>
  
  <br>
  <a href = "search.php">Kliknite da vidite da li je upload prosao dobro</a>


</body>
</html>
<?php



  if(!empty($_FILES['uploaded_file']))
  {
    $path = "torenti/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "Fajl  ".  basename( $_FILES['uploaded_file']['name']). 
      " je uspesno poslat.";
    } else{
        echo "Postoji problem sa vasim apludom , proverite konekciju...";
    }
  }
?>