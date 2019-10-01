<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	
 
	
class Produits_model extends CI_Model
	
{
    public function liste() 
	
    {
   
        $this->load->database();
   
        $requete = $this->db->query("SELECT * FROM produits");
   
        $aProduits = $requete->result();  

        return $aProduits;            
   
    }
}