<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    class Produit extends CI_Model{
        private $id;
        private $nom;
        private $prix;

        function listeProduit(){
            $query= $this->db->query('SELECT *FROM produit');
            $tab=array();
            $i=0;
            foreach($query->result_array() as $row){
                $p=new Produit();
                $p->setId($row['idProduit']);
                $p->setNom($row['nomProduit']);
                $p->setPrix($row['prix']);
                $tab[$i]=$p;
                $i++;
            }
            return $tab;
        }

        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */
        public function setId($id)
        {
                $this->id = $id;

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

    }

	
?>