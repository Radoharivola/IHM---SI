<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('BaseController.php');

class Achat extends BaseController {

	public function __construct()
	{
		parent::__construct();
	}

	public function insertAchat(){
		$this->load->model('achatModel');
		// $this->load->model('DetailsAchat');
		// $this->load->model('Produit');
		$idPro=$this->input->post("idProd");
		$nb=$this->input->post("qtty");
		$idCaisse=$this->session->userdata('idCaisse');
		$a=new achatModel();
		$a->setIdCaisse($idCaisse);
		$a->setIdProduit($idPro);
		$a->setQuantite($nb);
		$a->insert();

        redirect(site_url('welcome'));
	}	
    public function deleteAchat(){
		$this->load->model('achatModel');
		// $this->load->model('DetailsAchat');
		// $this->load->model('Produit');
		$idAchat=$this->input->post("idAchat");
		$a=new achatModel();
		$a->delete($idAchat);

        redirect(site_url('welcome/cart'));
	}
    public function valider(){
		$this->load->model('achatModel');
		// $this->load->model('DetailsAchat');
		// $this->load->model('Produit');
		$idCaisse=$this->session->userdata('idCaisse');
		$a=new achatModel();
		$a->valider($idCaisse);

        redirect(site_url('welcome'));
	}
}
