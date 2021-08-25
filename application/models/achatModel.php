<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

    class achatModel extends CI_Model{
        private $id;
        private $idCaisse;
        private $idProduit;
        private $quantite;
        public $idAchat;

        public function insert(){
            $date='curdate()';
            $req=("insert into achat (idCaisse,idProduit,quantity,dateAjout) VALUES ('$this->getIdCaisse()','$this->getIdProduit()','$this->getQuantite()',$date)");
            $this->db->query($req);
        }
        public function delete($idAchat){
        $sql="DELETE FROM achat where idAchat= %s";
        $sql=sprintf($sql,$this->db->escape($idAchat));
        $this->db->query($sql);
        }
        public function valider($idCaisse){
        $sql="UPDATE achat set valide=1 where idCaisse= %s";
        $sql=sprintf($sql,$this->db->escape($idCaisse));
        $this->db->query($sql);
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