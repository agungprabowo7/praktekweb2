<?php 
$resep =array(
				array("buah"=>"Pepaya","banyak"=>"1","tambahan"=>"kecap"), 
				array("buah"=>"Mangga","banyak"=>"3","tambahan"=>"susu"),
				array("buah"=>"Pisang","banyak"=>"5","tambahan"=>"cappuccino"), 
				);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Belajar Echo</title>
</head> 
<body>
	 <?php
	 foreach ($resep as $r) { ?>
	 <h1>Cara Membuat Jus <?php echo $r['buah'] ?>  </h1>
	 <p>campurkan buah <?php echo $r['buah'] ?> sebanyak <?php echo $r['banyak'] ?> buah ditambahkan dengan <?php echo $r['tambahan'] ?> untuk memeberi rasa.
	 </p>
	  <?php }  ?>
	
</body>
</html>