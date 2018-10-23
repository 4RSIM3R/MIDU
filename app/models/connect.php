<?php
/**
 * Untuk Koneksi Ke Databese
 */
class db
{
	//deklarasi parameter untuk konek ke db
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db_name = "db_name";
	function connect()
	{
		$connect = new mysqli($this->host, $this->user, $this->pass, 
			$this->db_name);
		if ($connect->connect_error) {
			echo "Connection error : (".$connect->connect_error.")";
		}

		return $connect;
	}
}
