<?php
/**
 * Untuk Bagian CRUD nya disini
 */
class Config extends mysqli
{
	
	public function __construct()
	{
		//memanggil koneksi yang berada di connect.php
		$val = include 'connect.php';
		//print_r($tes);
		//memanggil fungsi construct pada parent / mysqli
		//yang berisi perintah untuk konek ke db
		parent::__construct($val['host'],$val['username'],
			$val['password'],$val['db_name']);
	}
	public function Read($table, $id)
	{
		//panggil fungsi query bawaan dari parent
		$proces = $this->query("SELECT  * FROM $table WHERE id = $id");
		//definisikan result sebagai array
		$result = array();
		//loop hasilnya
		while ($row = $proces->fetch_assoc()) {
			$result[] = $row;
		}
		return $result;
	}
}