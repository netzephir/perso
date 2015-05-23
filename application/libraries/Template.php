<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template {
    private $CI;
    private $var = array();
    private $template = 'default';
    
    /*
    |===============================================================================
    | Constructeur
    |===============================================================================
    */
    public function __construct()
    {
        $this->CI = get_instance();
        
        // Le titre est composé du nom de la méthode et du nom du contrôleur
        // La fonction ucfirst permet d'ajouter une majuscule
        
        $this->var['titre'] = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());
        // Nous initialisons la variable $charset avec la même valeur que
        // la clé de configuration initialisée dans le fichier config.php
        $this->var['charset'] = $this->CI->config->item('charset');
        $this->var['version'] = $this->CI->config->item('version');
        $this->var['devEnable'] = $this->CI->config->item('dev');
        $this->var['css'] = array();
        $this->var['js'] = array();
    }
    
    /*
    |===============================================================================
    | Méthodes pour modifier les variables envoyées au layout
    | . setTitre
    | . setCharset
    |===============================================================================
    */
    public function setTitre($titre) {
        if(is_string($titre) AND !empty($titre)) {
            $this->var['titre'] = $titre;
            return true;
        }
        return false;
    }
    
    /*
    |===============================================================================
    | Méthodes pour ajouter des feuilles de CSS et de JavaScript
    | . addCss
    | . addJs
    |===============================================================================
    */
    public function addCss($nom) {
            //var_dump(file_exists('./assets/css/' . $nom . '.css'));
        $file = assets_url().'css/' . $nom . '.css';
        $file_headers = @get_headers($file);
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $exists = false;
        }
        else {
            $exists = true;
        }
        if(is_string($nom) AND !empty($nom) AND $exists) {
                $this->var['css'][] = $nom;
                return true;
        }
        return false;
    }
    
    public function addJs($nom) {
        $file = assets_url().'js/' . $nom . '.js';
        $file_headers = @get_headers($file);
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $exists = false;
        }
        else {
            $exists = true;
        }
        if(is_string($nom) AND !empty($nom) AND $exists) {
            $this->var['js'][] = $nom;
            return true;
        }
        return false;
    }
    
    /*
    |===============================================================================
    | Méthodes pour choisir le template
    | . setTemplate
    |===============================================================================
    */
    
    public function setTemplate($template) {
        if(is_string($template) AND !empty($template) AND file_exists('./application/views/templates/' . $template . '.tpl')) {
            $this->template = $template;
            return true;
        }
        return false;
    }
    
    /*
    |===============================================================================
    | Méthodes pour charger les vues
    | . view
    | . views (TODO)
    |===============================================================================
    */
    public function view($name, $data = array())
    {
        // On charge smarty
        $this->CI->load->library('CI_Smarty');
        // On assigne les données dans le contenu de la page
        foreach ($data as $key => $value)
            $this->CI->ci_smarty->assign($key, $value);
 
        // On récupère le contenu de la page
        $content = $this->CI->ci_smarty->view($name, true);

        //Si la requete n'est pas en ajax on charge la view dans
        if(!IS_AJAX){
            // On clean les assign pour le template
            $this->CI->ci_smarty->clearAllAssign();

            // On insère le contenu de la page dans le template
            $this->CI->ci_smarty->assign('content', $content);
            // On assigne les données du template
            foreach($this->var as $key => $value)
                $this->CI->ci_smarty->assign($key, $value);

            // On récupère le résultat du template et du contenu
            $output = $this->CI->ci_smarty->view('templates/' . $this->template, true);
        }
        else{
            $output = $content;
        }
        // On affiche ou on retourne le résultat en utilisant le moteur de template de CodeIgniter
        return $this->CI->load->view('viewer', array('output' => $output), !IS_AJAX);
    }
}
/* End of file template.php */
/* Location: ./application/librairies/template.php */