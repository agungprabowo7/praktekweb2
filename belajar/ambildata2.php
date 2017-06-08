<?php
$host = "localhost";
$dbname = "Agung_buku";
$username = "root";
$password = "07061997";
$db = "";

try {
$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
die("Connection error: ".$exception->getMessage());
}
$query = $db->prepare("SELECT * FROM berita");
$query->execute();
$data = $query->fetchAll();
?>


<table border="1px">
	<tr>
		<th>id</th>
		<th>Tanggal</th>
		<th>Judul</th>
	</tr>
	<?php foreach ($data as $ib) {?>
	<tr>
		<td><?php echo $ib ['id_buku'] ?></td>
		<td><?php echo $ib ['judul'] ?></td>
		<td><?php echo $ib ['penulis'] ?></td>
	</tr>

<?php } ?>
</table>

