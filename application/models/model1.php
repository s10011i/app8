<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model1  extends CI_Model {
	public function get_data(){
		$query=$this->db->get('users1');
		if ($query->num_rows()>0) {
			return $query->result();
		}else{
			return NULL;
		}
	}
	public function add_data(){
		    $this->load->library('form_validation');
		if ($this->input->post('sub')) {
			$this->form_validation->set_rules('fname','First Name','trim|required');
			$this->form_validation->set_rules('lname','Last Name','trim|required');
			if ($this->form_validation->run()) {
				$query=array(
					'first_name'=>$this->input->post('fname'),
					'last_name'=>$this->input->post('lname')
					);
				$this->db->insert('users1', $query);
			}
		}
	}
	public function edit_data(){
		$fname = $this->input->post('name1');
        $lname  = $this->input->post('name2');
        $id = $this->input->post('id');
        $data = array (
            'first_name' => $fname,
            'last_name'  => $lname
        );
        $this->db->where('id', $id);
        $this->db->update('users1', $data);
	}
	public function delete_data(){
		$id = $this->input->post('num');
		$this->db->where('id', $id);
		$this->db->delete('users1'); 	
	}	
}
?>