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
    // public function findProduitByName($nom){
    //     $query=$this->db->query("SELECT*from produit where nomProduit='$nom' limit 1");
    //     return $query->row_array();
    // }
    // public function insertAchat($numCaisse,$idProduit,$qtt){
    //     $this->db->query("INSERT INTO achat VALUES(null,'$numCaisse','$idProduit','$qtt','0')");
    // }
}