<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_home');
	}

	public function index()
	{
		$data['books'] = $this->m_home->readdata()->result();
		$this->load->view('templates/v_header');
		$this->load->view('v_home', $data);
		$this->load->view('templates/v_footer');
	}
	
	public function tambahPage()
	{
		$this->load->view('templates/v_header');
		$this->load->view('v_tambah');
		$this->load->view('templates/v_footer');
	}

	public function tambahProses()
	{
		$name = $this->input->post('name');
		$stok = $this->input->post('stok');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('category');

		$data = array(
			'name' => $name,
			'stok' => $stok,
			'image' => 'default.png',
			'deskripsi' => $deskripsi,
			'category_id' => $kategori
		);

		$this->m_home->insertData($data);

		redirect('home');
	}

	public function editPage($id) 
	{
		$data['spesific_book'] = $this->m_home->readById($id)->row();
		
		$this->load->view('templates/v_header');
		$this->load->view('v_edit', $data);
		$this->load->view('templates/v_footer');
	}

	public function editProses()
	{
		$id = $this->uri->segment(3);
		$name = $this->input->post('name');
		$stok = $this->input->post('stok');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('category');

		$data = array(
			'name' => $name,
			'stok' => $stok,
			'deskripsi' => $deskripsi,
			'$category_id' => $kategori
		);

		$this->m_home->updateData($data, $id);

		redirect('home');
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->m_home->deleteBooks($id);
		redirect('home');
	}
}