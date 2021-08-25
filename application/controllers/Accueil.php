<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Caisse');
		$c=new Caisse();
		$c=$c->listeCaisse();
		$data=array();
		$data["caisse"]=$c;
        $data['title']='Accueil';
		$data['vue']='Accueil.php';
		$this->load->view('front/template',$data);
	}	

	public function choix($numeroCaisse){
		$this->session->set_userdata('idCaisse',$numeroCaisse);
		redirect(site_url("welcome/index"));
	}
    public function deco(){
		$this->session->unset_userdata('idCaisse');
		redirect(site_url("accueil"));
	}
	
}
