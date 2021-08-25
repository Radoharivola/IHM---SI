<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    class DetailsAchat extends CI_Model{
        private $idCaisse;
        private $nom;
        private $prix;
        private $quantite;
        private $montant;

        public function listeAchat($idCaisse){
        $sql="SELECT * FROM cart where idCaisse= %s ";
        $sql=sprintf($sql,$this->db->escape($idCaisse));
            $query= $this->db->query($sql);
            $tab=array();
            foreach($query->result_array() as $row){
                $a=new DetailsAchat;
                $a->setIdCaisse($row['idCaisse']);
                $a->setNom($row['nomProduit']);
                $a->setPrix($row['prix']);
                $a->setQuantite($row['quantity']);
                $a->setMontant($row['montant']);
                $tab[]=$a;
            }
            return $tab;
        }
        public function getTotalParCaisse($idCaisse){
        $sql="SELECT * FROM totalCart where idCaisse= %s ";
        $sql=sprintf($sql,$this->db->escape($idCaisse));
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row['montant'];
        }

        /**
         * Get the value of idCaisse
         */
        public function getIdCaisse()
        {
                return $this->idCaisse;
        }

        /**
         * Set the value of idCaisse
         *
         * @return  self
         */
        public function setIdCaisse($idCaisse)
        {
                $this->idCaisse = $idCaisse;

                return $this;
        }

        /**
         * Get the value of nom
         */
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prix
         */
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @return  self
         */
        public function setPrix($prix)
        {
                $this->prix = $prix;

                return $this;
        }

        /**
         * Get the value of quantite
         */
        public function getQuantite()
        {
                return $this->quantite;
        }

        /**
         * Set the value of quantite
         *
         * @return  self
         */
        public function setQuantite($quantite)
        {
                $this->quantite = $quantite;

                return $this;
        }

        /**
         * Get the value of montant
         */
        public function getMontant()
        {
                return $this->montant;
        }

        /**
         * Set the value of montant
         *
         * @return  self
         */
        public function setMontant($montant)
        {
                $this->montant = $montant;

                return $this;
        }
    }
?>