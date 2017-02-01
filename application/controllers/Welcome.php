<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_page');
	}
	public function submit_details()
	{
		$user['name']=$this->input->post('uname');
		$user['phone']=$this->input->post('uphone');
		$user['email']=$this->input->post('uemail');
		$user['gender']=$this->input->post('ugender');
		$user['hobbie']=$this->input->post('uhobbies');
		$user['country']=$this->input->post('ugender');
		$hobbie=implode(',',$user['hobbie'] );
		$user['hobbie']=$hobbie;
		$this->load->model('mod');
		$this->mod->insert_data($user);
		$data['user_detail']=$this->mod->select_data();
		$this->load->view('welcome_page',$data);
	}
	public function delete_details()
	{
		$dd['id']=$this->input->get('id');
		$this->load->model('mod');
		$this->mod->delete_data($dd);
		$data['user_detail']=$this->mod->select_data();
		$this->load->view('welcome_page',$data);
		
		
	} 	
	public function edit_details()
	{
		$dd['id']=$this->input->get('id');
		$this->load->model('mod');
		$data['user_detail']=$this->mod->edit_data($dd);
		$this->load->view('update_page',$data);

		// $data['user_detail']=$this->mod->select_data();
		// $this->load->view('welcome_page',$data);
		
		
	} 	
}
