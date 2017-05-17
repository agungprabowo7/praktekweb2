<?php 

require_once 'View.php';
/**
* 
*/
class Utamaui extends View
{
	
	public function tampilkanberita()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>