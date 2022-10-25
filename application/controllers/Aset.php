<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aset extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		cek_login();

		$this->load->model('Admin_model', 'admin');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "Aset";
		$data['aset'] = $this->admin->getAset();
		$this->template->load('templates/dashboard', 'aset/data', $data);
	}
	public function detail($id)
	{
		$data['title'] = 'Aset';
		//menampilkan data berdasarkan id
		$data['data'] = $this->barang_model->detail_join($id, 'aset')->result();

		$this->template->load('templates/dashboard', 'aset/data', $data);
	}
	private function _validasi()
	{
		$this->form_validation->set_rules('nama_aset', 'Nama Aset', 'required|trim');
		// $this->form_validation->set_rules('jenis_id', 'Jenis Barang', 'required');
		// // $this->form_validation->set_rules('satuan_id', 'Satuan Barang', 'required');
		// $this->form_validation->set_rules('gudang_id', 'Gudang', 'required');
	}
	private function _config()
	{
		$config['upload_path']      = "./assets/upload";
		$config['allowed_types']    = 'gif|jpg|jpeg|png';
		$config['max_size']         = '2048';
		$config['file_name']         = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		$this->load->library('upload', $config);
	}
	public function add()
	{
		$this->_validasi();
		$this->_config();
		if ($this->form_validation->run() == false) {
			$data['title'] = "Inventori Aset";
			$data['jenis'] = $this->admin->get('jenis');
			// $data['satuan'] = $this->admin->get('satuan');
			$data['gudang'] = $this->admin->get('gudang');
			$data['harga_barang'] = "harga_barang";
			$data['tahun'] = "tahun";
			$data['nama_aset'] = "nama_aset";
			// Mengenerate ID Barang
			$kode_terakhir = $this->admin->getMax('aset', 'id_aset');
			$kode_tambah = substr($kode_terakhir, -6, 6);
			$kode_tambah++;
			$number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
			$data['id_aset'] = 'A' . $number;

			$this->template->load('templates/dashboard', 'aset/add', $data);
		} else {
			$input = $this->input->post(null, true);
			if (@$_FILES['image']['name'] != null) {
				if ($this->upload->do_upload('image')) {
					$input['image'] = $this->upload->data('file_name');

					$this->admin->insert('aset', $input);

					if ($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('Succes', 'Data Berhasil Disimpan');
					}
					redirect('aset');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('aset/add');
				}
			} else {
				$input['image'] = null;
				$this->admin->insert('aset', $input);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('Succes', 'Data Berhasil Disimpan');
					redirect('aset');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('aset/add');
				}
			}
		}
	}


	public function edit($getId)
	{
		$id = encode_php_tags($getId);
		$this->_validasi();
		$this->_config();
		if ($this->form_validation->run() == false) {
			$data['title'] = "Inventory";
			$data['jenis'] = $this->admin->get('jenis');
			$data['gudang'] = $this->admin->get('gudang');
			$data['tahun'] = "tahun";
			$data['nama_aset'] = "nama_aset";
			$data['aset'] = $this->admin->get('aset', ['id_aset' => $id]);
			$this->template->load('templates/dashboard', 'aset/edit', $data);
		} else {
			$input = $this->input->post(null, true);
			if (empty($_FILES['image']['name'])) {
				$insert = $this->admin->update('aset', 'id_aset', $id, $input);
				if ($insert) {
					set_pesan('perubahan berhasil disimpan.');
					redirect('aset');
				} else {
					set_pesan('perubahan tidak disimpan.');
				}
				redirect('aset/edit' . $id);
			} else {
				if ($this->upload->do_upload('image') == false) {
					echo $this->upload->display_errors();
					die;
				} else {
					if ($data['image'] != null) {
						$old_image = 'assets/upload/' . $data['image'];
						unlink($old_image);
					}

					$input['image'] = $this->upload->data('file_name');
					$update = $this->admin->update('aset', 'id_aset', $id, $input);
					if ($update) {
						set_pesan('perubahan berhasil disimpan.');
						redirect('aset');
					} else {
						set_pesan('gagal menyimpan perubahan');
					}
					redirect('aset/edit' . $id);
				}
			}
		}
	}


	public function delete($getId)
	{
		$id = encode_php_tags($getId);
		if ($this->admin->delete('aset', 'id_aset', $id)) {
			set_pesan('data berhasil dihapus.');
		} else {
			set_pesan('data gagal dihapus.', false);
		}
		redirect('aset');
	}

	// public function getstok($getId)
	// {
	// 	$id = encode_php_tags($getId);
	// 	$query = $this->admin->cekStok($id);
	// 	output_json($query);
	// }
}
