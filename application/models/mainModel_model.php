<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class mainModel_model extends CI_Model
{

    public function authentification($email,$mdp){
        $query= $this->db->query("SELECT * FROM admin where nom='".$email."' and passwd='".$mdp."'");
        return $query->row_array();
    }

    public function getListeProduits(){
        $query= $this->db->query("SELECT * FROM Produit");
        return $query->result_array();
    }
   
    public function updateProduct($idProduit,$productName,$price,$imageName){
        $data=[
            'nomProduit' => $productName,
            'prix' =>$price,
            'imagePath' =>$imageName,
        ];
        $this->db->where('idProduit',$idProduit);
        $this->db->update('Produit',$data);
    }
   
    public function deleteProduct($idProduct){
        $this->db->where('idProduit',$idProduct);
        $this->db->delete('Produit');
        $this->db->where('idProduit',$idProduct);
        $this->db->delete('categoryProduit');
    }

    public function getListeCategory(){
        $query= $this->db->query("SELECT * FROM Category");
        return $query->result_array();
    }

    public function insertProduit($nomProduit,$prix,$imagePath,$categData){
        $id=$this->getMaxIdProduit();
        $data=[
            'idProduit' => $id['idMax'],
            'nomProduit' => $nomProduit,
            'prix'=>$prix,
            'imagePath'=>$imagePath
        ];
        $this->db->insert('Produit',$data);
        $this->insertCategProduit($id['idMax'],$categData);
    }

    public function insertCategProduit($idProduit,$categData){

        foreach($categData as $value){
            $data=[
                'idCateg'=>$value,
                'idProduit'=>$idProduit
            ];
            $this->db->insert('CategoryProduit',$data);
        }
    }

    public function getMaxIdProduit(){
        $query= $this->db->query("SELECT max(idProduit)+1 as idMax FROM Produit");
        return $query->row_array();
    }



}
