<?php
class colors extends plxPlugin {

 
    public function __construct($default_lang){

    # Appel du constructeur de la classe plxPlugin (obligatoire)
    parent::__construct($default_lang);


    # Pour accéder à une page d'administration
    $this->setAdminProfil(PROFIL_ADMIN,PROFIL_MANAGER);
    
    # Pour accéder à une page de configuration
    $this->setConfigProfil(PROFIL_ADMIN,PROFIL_MANAGER);

    $this->addHook('AdminTopEndHead', 'AdminTopEndHead');

    # Déclaration des hooks
    $this->addHook('colors', 'colors'); //hook pour l'affichage manuel

    } 

    public function AdminTopEndHead() { ?>
    <link rel="stylesheet" href="<?php echo PLX_PLUGINS ?>colors/app/style.css">

    <?php
    }
    
    public function colors($info) {
      echo $this->getParam($info);
    }
      
} // class colors
?>