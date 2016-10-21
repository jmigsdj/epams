<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("Asia/Manila");
class Panel extends MY_Controller {
//check if authenticated
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('panel_model');
		$this->load->model('login_model');
		$this->load->model('User_model');
		$user_id=$this->session->userdata("id");
		if(empty($user_id)){
			 redirect(base_url(),'refresh');
		 }
	}
	public function logout(){
        $this->session->userdata = array();
        $this->session->sess_destroy();
        redirect('', 'refresh');
    }

//************************************************
//			View
//************************************************
	public function index() {
		$user_id=$this->session->userdata("id");
		$this->load->view('header_vw');
		$this->load->view('menu_vw');
		$this->load->view('content_hdr');
		$this->dashboard();
		$this->load->view('content_ftr');
		$this->load->view('footer_vw');
	}

	public function dashboard(){
		$data['max_users']=$this->panel_model->count_user();
		$data['inventory']=$this->panel_model->select_inventory();
		$this->load->view('content\dashboard',$data);
	}

	public function inventory(){
		$data['inventory']=$this->panel_model->select_inventory();
		$this->load->view('content\inventory',$data);
	}

	//fail ajax
	// public function inventory_list(){
	// 	$list=$this->panel_model->select_inventory();
	// 	$data = array();
	// 	foreach ($list as $item) {
	// 		$row = array();
	// 		$row[] = $item->device_id;
	// 		$row[] = $item->name;
	// 		$row[] = $item->brand;
	// 		$row[] = $item->model;
	// 		$row[] = $item->categName;
	// 		$row[] = $item->condition;
	//
	// 		$data[] = $row;
	// 	}
	// 	$output = array(
	// 			"data" => $data
	// 	);
	// 	echo json_encode($data);
	// }

	//History
	public function history(){
		$this->load->view('content\history');
	}


}
