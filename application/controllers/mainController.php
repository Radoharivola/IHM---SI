<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('BaseControllerAdmin.php');
class mainController extends BaseControllerAdmin {

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
		$data["page"]="dashboard";
		$this->load->helper('mainHelper_helper');
		$this->load->view('Dashboard/template',$data);
	}	

	public function tables()
	{
		$data=array();
		$data["page"]="tables";
		$this->load->helper('mainHelper_helper');
		$this->load->view('Dashboard/template',$data);
	}	

	public function manageProducts()
	{
		$data=array();
		$data["page"]="manageProducts";
		$this->load->model('mainModel_model');
		$query=$this->mainModel_model->getListeProduits();
		$query2=$this->mainModel_model->getListeCategory();
		$data['lProduits']=$query;
		$data['lCategory']=$query2;
		$this->load->helper('mainHelper_helper');
		$this->load->view('Dashboard/template',$data);
	}	

	public function manageCategory()
	{
		$data=array();
		$data["page"]="manageCategory";
		$this->load->model('mainModel_model');
		$query2=$this->mainModel_model->getListeCategory();
		$data['lCategory']=$query2;
		$this->load->helper('mainHelper_helper');
		$this->load->view('Dashboard/template',$data);
	}	

	public function loginAdmin()
	{
		$data=array();
		$this->load->helper('mainHelper_helper');
		$this->load->view('Dashboard/login',$data);
	}	

	public function utility($page)
	{
		$data=array();
		$data["page"]=$page;
		$this->load->helper('mainHelper_helper');
		$this->load->view('Dashboard/template',$data);
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

	public function updateTreatement(){
		$idPro=$_POST['idProduit'];
		$nomProduit=$_POST['nomProduit'];
		$prix=$_POST['prix'];
		$imageName=$_POST['img'];
		$data["page"]="manageProducts";
		$this->load->model('mainModel_model');
		$this->load->helper('mainHelper_helper');
		$this->mainModel_model->updateProduct($idPro,$nomProduit,$prix,$imageName);
		$this->manageProducts();

	}

	public function updateTreatementCateg(){
		$idCateg=$_POST['idCateg'];
		$nomCateg=$_POST['nomCateg'];
		$data["page"]="manageCategory";
		$this->load->model('mainModel_model');
		$this->load->helper('mainHelper_helper');
		$this->mainModel_model->updateCategory($idCateg,$nomCateg);
		$this->manageCategory();

	}

	public function deleteTreatement(){
		$idPro=$_POST['idProduit'];
		$data["page"]="manageProducts";
		$this->load->model('mainModel_model');
		$this->load->helper('mainHelper_helper');
		$this->mainModel_model->deleteProduct($idPro);
		$this->manageProducts();

	}

	public function deleteTreatementCateg(){
		$idCateg=$_POST['idCateg'];
		$data["page"]="manageCategory";
		$this->load->model('mainModel_model');
		$this->load->helper('mainHelper_helper');
		$this->mainModel_model->deleteCategory($idCateg);
		$this->manageCategory();

	}

	public function insertProduct(){
		$nomProduit=$_POST['nomProduit'];
		$prix=$_POST['prix'];
		$imagePath=$_POST['imagePath'];
		$dataCateg=$_POST['category'];
		var_dump($dataCateg);
		$this->load->model('mainModel_model');
		$this->load->helper('mainHelper_helper');
		$this->mainModel_model->insertProduit($nomProduit,$prix,$imagePath,$dataCateg);
		$this->manageProducts();
	}

	public function insertCategory(){
		$nomCateg=$_POST['nomCateg'];
		$this->load->model('mainModel_model');
		$this->load->helper('mainHelper_helper');
		$this->mainModel_model->insertCategory($nomCateg);
		$this->manageCategory();
	}







}
