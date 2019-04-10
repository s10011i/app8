<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller1 extends CI_Controller{
	public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->library('form_validation');
    //load the employee model
    $this->load->model('model1');
}
	public function index(){
		// $this->load->view('view1');
		$data['records']=$this->model1->get_data();
		$this->load->view('view1',$data);	
	}
	public function href1(){
			$this->load->view('view_add');
	}
	public function add_data(){
		$this->model1->add_data();
	    $this->index();
	}
	public function href2(){
			$this->load->view('view_edit2');
	}
	public function edit_data(){
		$this->model1->edit_data();
	    $this->index();
	}
	public function href3(){
			$this->load->view('view_delete');	
	}
	public function delete_data(){
		$this->model1->delete_data();
	    $this->index();

	}

}

?>