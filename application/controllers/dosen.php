<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dosen');
	}

	public function index() //menampilkan data dosen
	{
		$data['judul']="Tampil Data dosen";
		$data['tampil']=$this->M_dosen->tampil()->result();// ambil data dari model
		$this->load->view('dosen/tampil', $data, FALSE);
	}

	public function input() // menambah data
	{
		$data['judul']="Tambah dosen";
		$this->load->view('dosen/input', $data, FALSE);
	}

	public function save() // menyimpan data
	{
		$nik=$this->input->post('nik');
		$kode=$this->input->post('kode_dosen');
		$nama=$this->input->post('nama_dosen');
		$Jk=$this->input->post('jk');
		$email=$this->input->post('email');
		$status=$this->input->post('status');

		$data=array(
			'nik'=>$nik,
			'kode_dosen'=>$kode,
			'nama_dosen'=>$nama,
			'jk'=>$Jk,
			'email'=>$email,
			'status'=>$status
		);

		$this->M_dosen->save($data);
		redirect('dosen','refresh');
	}

	public function edit() // meng edit data yang dipilih
	{
		$id=$this->uri->segment(3);  //
		$data['judul']="Edit Data";
		$data['edit']=$this->M_dosen->getid($id)->row_array();
		$this->load->view('dosen/edit', $data,FALSE);
	}

	public function update()
	{
		$nik=$this->input->post('nik');
		$kode=$this->input->post('kode_dosen');
		$nama=$this->input->post('nama_dosen');
		$Jk=$this->input->post('jk');
		$email=$this->input->post('email');
		$status=$this->input->post('status');

		$data=array(
			'nik'=>$nik,
			'kode_dosen'=>$kode,
			'nama_dosen'=>$nama,
			'jk'=>$Jk,
			'email'=>$email,
			'status'=>$status
		);

		$this->M_dosen->update($data,$id);
		redirect('dosen','refresh');
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('kode_dosen', $id);
		$this->db->delete('dosen');
		redirect('dosen','refresh');
	}
}

 ?>
