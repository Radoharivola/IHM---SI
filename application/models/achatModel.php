<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

    class achatModel extends CI_Model{
        private $id;
        private $idCaisse;
        private $idProduit;
        private $quantite;

        public function insert(){
            $req=('insert into achat (idCaisse,idProduit,quantity) VALUES ('.$this->getIdCaisse().','.$this->getIdProduit().','.$this->getQuantite().')');
            $this->db->query($req);
        }
        
        public function getId() { 
            return $this->id; 
        } 

        public function setId($id) {  
            $this->id = $id; 
        } 

        public function getIdCaisse() { 
            return $this->idCaisse; 
        } 

        public function setIdCaisse($idCaisse) {  
            $this->idCaisse = $idCaisse; 
        } 

      

        public function getQuantite() { 
            return $this->quantite; 
        } 

        public function setQuantite($quantite) {  
            $this->quantite = $quantite; 
        }     

        public function getIdProduit() { 
            return $this->idProduit; 
        } 

        public function setIdProduit($idProduit) {  
            $this->idProduit = $idProduit; 
        } 
}
?>