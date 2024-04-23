<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	function __construct()
    {
   	 parent::__construct();
   	 $this->load->helper("url");   //call the form helper
   	 $this->load->helper('form');
  	 $this->load->library('session');
    $this->load->model('home_model','',TRUE);
    $this->session_data = $this->session->userdata('logged_in');
    if(empty($this->session_data))
    {
       redirect('login');
    }
    }
	public function index()
	{
		$ndata['login']=$this->session_data;
		$data['contacts'] = $this->home_model->get_all_data("");

    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('products/index',$data);
		$this->load->view('common/footer');
	}
	public function create()
		{
	    $data = array('id' => '');
	    $data['attributes'] = array('class' => 'form');
	    $data['prop'] = array('class' => 'form-control');

	    $ndata['login']=$this->session_data;

	    $this->load->view('common/header',$ndata);
	    $this->load->view('common/navigation');
	    $this->load->view('products/create',$data);
	    $this->load->view('common/footer');
		}

		public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('name', 'product name', 'required');
			$this->form_validation->set_rules('size', 'quantity', 'require');
			$this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric');
	    $this->form_validation->set_rules('date', 'Date', 'trim|required|date');
	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$dataproducts = array(
						'name' => $this->input->post('name'),
						'size' => $this->input->post('size'),
						'amount' => $this->input->post('amount'),
	          'phone' => $this->input->post('phone'),
          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->home_model->insert_data('products', $dataproducts);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
