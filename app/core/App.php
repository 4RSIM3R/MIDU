<?php

/**
 * Gae Ngehajino Ortu
 * Teruntuk Anake Cak Robi Sayang
 */
class App
{
	//membuat controller default
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];
	//jalankan fungsi ini ketika class di inialisasi
	function __construct()
	{
		//mengambil apapun yang ada di url
		//$url isi dgn kembalian methode parseURL
		$url = $this->parseUrl();
		//var_dump($url);
		//mengecek adakah file yang sama dgn controller url dan dalam folder controller
		//$url[0] karena mengambil elemen pertama di url
		if (file_exists('../app/controllers/'.$url[0]. '.php')) {
			//lalu timpa controller di app dgn di url
			$this->controller = $url[0];
			//hilangkan url[0] karena sudah jadi conroller
			unset($url[0]);
		}
		//memanggil controller
		require_once '../app/controllers/'.$this->controller. '.php';
		//instansiasi
		$this->controller = new $this->controller;
		//method proses jika ada method di url cek apakah sama dgn yang ada di controllers/folder
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				//timpa method di app nya dgn ada di url
				$this->method = $url[1];
				unset($url[1]);
			}
		}
		if (!empty($url)) {
			$this->params = array_values($url);
		}
		//jalankan controller dan kirim data
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parseUrl()
	{
		//jika ada ?url= di url nya
		if (isset($_GET['url'])) {
			//ambil isi nya
			//rtrim untuk menghapus tanda pada akhir url
			$url = rtrim($_GET['url'], '/');
			//filter_var untuk menghapus tanda yang aneh (anti-sqlinject)
			$url = filter_var($url, FILTER_SANITIZE_URL);
			//explode untuk memecah url berdasarkan /
			$url = explode('/', $url);
			//kembalikan isinya
			return $url;
		}
	}
}
