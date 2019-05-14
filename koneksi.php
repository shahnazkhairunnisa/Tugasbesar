<?php 
	
	$conn = mysqli_connect("sql204.epizy.com","epiz_23905351","JrnokluSMB2","epiz_23905351_nanas");

	function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rows;
	}

	function hapus ($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM blog WHERE id = $id");
		return mysqli_affected_rows($conn); 
	}


	function ubah($data)
	{
		global $conn;

		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$bahan = htmlspecialchars($data["bahan"]);
		$sejarah = htmlspecialchars($data["sejarah"]);

		$query = "UPDATE blog SET nama = '$nama', bahan = '$bahan', sejarah = '$sejarah' WHERE id = $id";

		mysqli_query ($conn, $query);
		return mysqli_affected_rows ($conn);
	}

	// function creat ($data){
	// 	global $conn;

	// 	$judul = $data["judul"];
	// 	$isi = $data["isi"];

	// 	$query = "INSERT INTO blog VALUES ('','$judul', '$isi')";

	// 	mysql_query($conn, $query);

	// 	return mysqli_affected_rows($conn);



	
 ?>