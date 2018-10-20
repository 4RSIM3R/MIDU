<?php
/**
 * Untuk CRUD nya
 */
class Crud extends Controller
{
	
	function index($table = 'content', $id = 'id')
	{
		$data['judul'] = 'Read Data';
		$data['table'] = $table;
		$data['id'] = $id;
		$this->view('templates/header',$data);
		$this->view('crud/index',$data);
		$this->view('templates/footer');
	}
	function insert()
	{
		$data['judul'] = 'Insert';
		$this->view('templates/header',$data);
		$this->view('crud/insert');
		$this->view('templates/footer');
	}
}