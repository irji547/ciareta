<?php
class Hallo extends CI_Controller {

	public function index()
	{
		echo "Hello world" ;
	}

	public function nama()
	{
		echo "Nama Saya GA" ;
	}
	public function biodata()
	{
		$judul="Biodata Saya" ;
		$data['judul']=$judul ;
		$this->load->view('biodata', $data, FALSE);

	}
}  

?>