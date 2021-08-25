<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class All_model extends CI_Model{
    public function getCaisse(){
        return $this->db->query("SELECT*from caisse");
    }
    public function getProduit(){
        return $this->db->query("SELECT*from produitWithCategory");
    }
    public function getCategory(){
        return $this->db->query("SELECT*from category");
    }
    public function getProduitByCategory($category){
        $sql="SELECT*from produitWithCategory where nomCateg=%s ";
        $sql=sprintf($sql,$this->db->escape($category));
        $query=$this->db->query($sql);
        return $query->result_array();
    }
}