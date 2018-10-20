<?php 
/**
 * function index menjadi default jika tdk ada apa di url akseskan ke fungsi ini
 */
class Home extends Controller
{
	
	public function index()
	{
		$data['judul'] = 'Home';
		$this->view('templates/plugins-css');
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}
}
