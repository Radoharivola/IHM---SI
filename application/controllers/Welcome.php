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
		$data=array();
		$data['vue']='product-list.php';
		$data['title']='Liste produits';
		$this->load->model('All_model');
		$data['allProduit']=$this->All_model->getProduit();
		$data['allCategory']=$this->All_model->getCategory();
		$this->load->view('front/template',$data);
		
	}	
	public function cart()
	{
		$data=array();
		$data['vue']='cart.php';
		$data['title']='Panier';
		$this->load->view('front/template',$data);
		
	}	
	public function admin()
	{
		$this->load->view('index');
		
	}	
	public function test()
	{
		$this->load->view('test/test');
		
	}
	// changer caisse
	// public function index()
	// {
	// 	$this->load->view('index');
		
	// }		
}
