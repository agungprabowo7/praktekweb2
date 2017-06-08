<?php 

require_once 'berita.php';
/**
* 
*/
class Utamaui extends berita
{
	
	public function tampilkanberita()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>