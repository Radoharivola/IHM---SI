<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class All_model extends CI_Model{
    public function getCaisse(){
        return $this->db->query("SELECT*from caisse");
    }
    public function getProduit(){
        return $this->db->query("SELECT*from produit");
    }
    public function getCategory(){
        return $this->db->query("SELECT*from category");
    }
}