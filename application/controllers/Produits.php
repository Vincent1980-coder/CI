<?php
	
// application/controllers/Produits.php
	
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Produits extends CI_Controller 
	
{
    public function accueil()
    {
        $this->load->view("produits/accueil");
    }

    public function session()
    {
        $this->load->view("produits/session");
    }

    public function contact()
    {
        $this->load->view("produits/formulaire");
    }

        public function liste()
    {
        // On charge le modèle 'produits_model'
	
        $this->load->model('produits_model');

        // On appelle la méthode liste() du modèle,
	
        // qui retourne le tableau de résultat ici affecté dans la variable $aListe (un tableau) 
	
        // remarque la syntaxe $this->nom_modele->methode()       
	
        $aListe = $this->produits_model->liste();  
        
        // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue      
        $aView["liste_produits"] = $aListe;
        
        // Appel de la vue avec transmission du tableau 
        $this->load->view('produits/entete');
        $this->load->view('produits/liste', $aView);
        $this->load->view('produits/piedpage');
    }

    public function ajout()
    {
        //$this->load->helper('form');  (autoload)
           
        if ($this->input->post()) { // 2ème appel de la page: traitement du formulaire
            
            $data = $this->input->post();
                             
            // On créé un tableau de configuration pour l'upload
            $config['upload_path'] = './assets/photos/'; // chemin où sera stocké le fichier
            $config['file_name'] = 'maphoto.jpg'; // nom du fichier final
            $config['allowed_types'] = 'gif|jpg|png'; // Types autorisés (ici pour des images)
                
            // On charge la librairie 'upload' de CodeIgniter en lui envoyant la config
            $this->load->library('upload');
                
            // On initialise la config 
            $this->upload->initialize($config);
            $infos = array('upload_data' => $this->upload->data());


            // La méthode do_upload() effectue les validations sur l'attribut HTML 'name' ('fichier' dans notre formulaire) et si OK renomme et déplace le fichier tel que configuré
            if ( ! $this->upload->do_upload('fichier')) 
                
            {   // Echec : on récupère les erreurs dans une variable (une chaîne)
	            $errors = $this->upload->display_errors();    
               
                // on réaffiche la vue du formulaire en passant les erreurs 
                $aView["errors"] = $errors;
               
                $this->load->view('produits/entete');
                $this->load->view('produits/ajout', $aView);
                $this->load->view('produits/piedpage');
               
            }
               
            else
                
            {   // On insert dans la base de données 
                $this->db->insert('produits', $data);
                redirect("produits/liste");
            }  
            
        } 
          
        else 
        { // 1er appel de la page: affichage du formulaire
            $this->load->view('produits/entete');
            $this->load->view('produits/ajout');
            $this->load->view('produits/piedpage');
        }
    }

    public function modif($id)
	{
        /*  $this->load->database();        (autoload)
            $this->load->helper('url');
            $this->load->helper('form');    */
        
        if ($this->input->post()) 
        {
            $data = $this->input->post();
            $id = $this->input->post("id");
        
            $this->db->where('pro_id', $id);
            $this->db->update('produits', $data);
        
            redirect('produits/liste');
        } 
        else 
        {
            $liste = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", array($id));
            
            // Teste s'il y a un résultat à la requête effectué : 
            if (!$liste->row()) 
            {
                echo"<p>L'id ".$id." n'existe pas dans la base de données.</p>";    
                exit;             
            }            
            
            $model["produits"] = $liste->row(); // première ligne du résultat
            
            $this->load->view('produits/entete');
            $this->load->view('produits/modif', $model);
            $this->load->view('produits/piedpage');
        }  
    }

    public function suppr($id)
	{
        /*  $this->load->database();        (autoload)
            $this->load->helper('url');
            $this->load->helper('form');    */
           
            $this->db->where('pro_id', $id);
            $this->db->delete('produits', $data);
        
            redirect('produits/liste');
    }
}
?>