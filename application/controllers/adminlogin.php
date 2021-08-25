<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminlogin extends CI_Controller {

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
	public function loginAdmin()
	{
		$data=array();
		$this->load->helper('mainHelper_helper');
		$this->load->view('Dashboard/login',$data);
	}	
	public function loginTreatment()
	{
		$email=$_POST['email'];
		$mdp=$_POST['mdp'];
		$data=array();
		$data["page"]="dashboard";
		$this->load->model('mainModel_model');
		$this->load->helper('mainHelper_helper');
		$query=$this->mainModel_model->authentification($email,$mdp);
		if($query['nom'] !=null and $query['passwd']!=null){
			$this->session->set_userdata('user',$query['nom']);
			$this->load->view('Dashboard/template',$data);
		}else{
			$data['error']="error";
			$this->load->view('Dashboard/login',$data);
		}
	}
    public function deco(){
		$this->session->unset_userdata('user');
		redirect(site_url("adminlogin/loginAdmin"));
	}
}
