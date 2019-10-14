<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_agama');
	}

	public function index() //menampilkan data jurusan 
	{
		$data['judul']="Tampil Data Agama";
		$data['tampil']=$this->M_agama->tampil()->result();// ambil data dari model
		$this->load->view('Agama/tampil', $data, FALSE);
	}

	public function input() // menambah data
	{
		$data['judul']="Tambah Agama";
		$this->load->view('Agama/input', $data, FALSE);
	}

	public function save() // menyimpan data
	{
		$kode=$this->input->post('id_agama');
		$nama=$this->input->post('nama_agama');

		$data=array(
			'id_agama'=>$id,
			'nama_agama'=>$nama
		);

		$this->M_agama->save($data);
		redirect('Agama','refresh');
	}

	public function edit() // meng edit data yang dipilih
	{
		$id=$this->uri->segment(3);  //
		$data['judul']="Edit Data";
		$data['edit']=$this->M_agama->getid($id)->row_array();
		$this->load->view('Agama/edit', $data,FALSE);
	}

	public function update()
	{
		$kode=$this->input->post('id_agama');
		$nama=$this->input->post('nama_agama');

		$data=array( // disini record yang akan di update
			'nama_agama'=>$nama
		);

		$this->M_agama->update($data,$id);
		redirect('Agama','refresh');
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_agama', $id);
		$this->db->delete('agama');
		redirect('Agama','refresh');
	}
}

 ?>
