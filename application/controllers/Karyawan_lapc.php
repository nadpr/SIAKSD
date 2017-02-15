<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class karyawan_lapc extends CI_Controller {

	function __construct(){
					parent::__construct();
					$this->simple_login->cek_login();
	}
	
	public function index()
	{
		$this->load->model('karyawan_lapm');
		$karyawan_lap['karyawan_lap'] = $this->karyawan_lapm->tampil();

		ob_start();
		$content = $this->load->view('karyawan_lap',$karyawan_lap);
		$content = ob_get_clean();
		$this->load->library('html2pdf');
		try
		{
			$html2pdf = new HTML2PDF('L', 'A4', 'fr');
			$html2pdf->pdf->SetDisplayMode('fullpage');
			$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
			$html2pdf->Output('print.pdf');
		}
		catch(HTML2PDF_exception $e) {
			echo $e;
			exit;
		}

	}

	public function cetak()
	{
		$this->load->model('karyawan_lapm');
		$karyawan_lap['karyawan_lap'] = $this->karyawan_lapm->tampil();
		$this->load->view('karyawan_lap',$karyawan_lap);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
