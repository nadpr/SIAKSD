<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barangmasuk_lapc extends CI_Controller {

	function __construct(){
					parent::__construct();
					//$this->load->'login_ci/cek_login';
	}

	public function index()
	{
		$this->load->model('barangmasuk_lapm');
		$barangmasuk_lap['barangmasuk_lap'] = $this->barangmasuk_lapm->tampil();

		ob_start();
		$content = $this->load->view('barangmasuk_lap',$barangmasuk_lap);
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
		$this->load->model('barangmasuk_lapm');
		$barangmasuk_lap['barangmasuk_lap'] = $this->barangmasuk_lapm->tampil();
		$this->load->view('barangmasuk_lap',$barangmasuk_lap);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
