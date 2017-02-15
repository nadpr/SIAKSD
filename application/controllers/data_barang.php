<?php
	class data_barang extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->Model('barang_model');
		$this->model = $this->barang_model;
		$this->load->helper('url'); //fungsi dari CI
		$this->load->helper(array('form'));
		//$this->load->views('barang_view');
	}

	public function index(){
		$query = $this->barang_model->getquery();
		$data['query']=$query;
		$this->load->view('barang_view',$data);
	}

	public function hapus($id){
		$this->barang_model->hapus_data($id);
		redirect('data_barang');
	}

	/** public function edit($id){
		$data['query'] = $this->barang_model->getById($id);
		$query = $this->barang_model->getquery();
		$data['query']=$query;
		$this->load->view('edit_barang',$data);
	}*/

	//public function simpan(){
			//$this->load->view('barang_view');
	//}

	function edit($id){
		$where = array('barang_id' => $id);
		$data['barang'] = $this->barang_model->edit_data($where, 'barang') ->result();
		$this->load->view('edit_barang',$data);
	}

	public function update(){
		$barang_id = $this->input->post('barang_id');
		$barang_nm = $this->input->post('barang_nm');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');
		//echo $barang_id." ".$barang_nm." ".$harga_beli." ".$harga_jual;
		$data = array(
			'barang_nm' => $barang_nm,
			'harga_beli' => $harga_beli,
			'harga_jual' => $harga_jual
			);

		$where = array(
			'barang_id' => $barang_id );

		$this->barang_model->update_data($where, $data, 'barang');
		$query = $this->barang_model->getquery();
		$data['query']=$query;
		$this->load->view('barang_view',$data);
		///$this->db->where('barang_id',$id);
		//$this->db->update('barang',$data);
	}

	public function detail($id){
		$data['query'] = $this->barang_model->getDetail($id);
		$this->load->view('detail_barang',$data);
	}

}
?>
