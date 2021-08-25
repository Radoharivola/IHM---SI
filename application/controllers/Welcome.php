<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('BaseController.php');
class Welcome extends BaseController {

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
		$data['idCaisse']=$this->session->userdata('idCaisse');
		$data['vue']='product-list.php';
		$data['title']='Liste produits';
		$this->load->model('All_model');
		$data['allProduit']=$this->All_model->getProduit();
		$data['allCategory']=$this->All_model->getCategory();
		$this->load->view('front/template',$data);
		
	}	
	public function cart()
	{		

		$this->load->model('Produit');
		$this->load->model('DetailsAchat');
	
		$caisse=$this->session->userdata('idCaisse');
		$dt=$this->DetailsAchat->listeAchat($caisse);
		$total=$this->DetailsAchat->getTotalParCaisse($caisse);
		$produit=$this->Produit->listeProduit();

		$data=array();
		$data['idCaisse']=$caisse;
		$data['achat']=$dt;
		$data['produit']=$produit;
		$data['total']=$total;
		$data['vue']='cart.php';

		$data['title']='Panier';
		$this->load->view('front/template',$data);

	}	
	public function admin()
	{
		$this->load->view('index');
		
	}	
	// changer caisse
	// public function index()
	// {
	// 	$this->load->view('index');
		
	// }		
}
