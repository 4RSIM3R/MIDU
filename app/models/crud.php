<?php
/**
 * Baginan CRUD nya sini Kang
 * Untuk Sayangku ely
 */
class Data
{
	
	/* method untuk menampilkan data siswa */
    public function view()
    {
    	/* memanggil fungsi koneksi */
    	require_once '../app/models/connect.php';
    	/* method untuk menampilkan data siswa */
    	$db = new db();
    	/* panggil fungsi koneksinya */
    	$mysqli = $db->connect();
    	/* persiapkan perintah query */
    	$query = "SELECT * FROM table_name";
    	/* prepare query nya */
    	$stmt = $mysqli->prepare($query);
    	/* jika tdk berhasil prepare nya tampilkan pesan error */
    	if (!$stmt) {
    		die('Query Error: '.$mysqli->errno.'-'.$mysqli->error);
    	}
    	/* ekseskusi query nya */
    	$stmt->execute();
    	/* method untuk menampilkan data siswa */
    	$result = $stmt->get_result();
    	while ($data = $result->fetch_assoc()) {
    		$hasil[] = $data;
    	}
    	$stmt->close();
    	$mysqli->close();
    	return $hasil;
    }
}
