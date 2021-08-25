<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseControllerAdmin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if(!$this->session->has_userdata('user')){
            redirect(site_url('adminlogin/loginAdmin'));
        }
	}

}

?>