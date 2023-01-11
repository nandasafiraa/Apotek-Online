 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_user extends CI_Controller {

	public function index()
	{
		$data['content']="dashboard_user";
		$this->load->view('template_user',$data);		
	}

} 

/* End of file dashboard_user.php */
/* Location: ./application/controllers/dashboard_user.php */