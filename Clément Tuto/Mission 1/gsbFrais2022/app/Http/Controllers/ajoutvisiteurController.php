<?php
        
        namespace App\Http\Controllers;
        use Illuminate\Http\Request;
        use PdoGsb;

class ajoutvisiteur extends Controllers 
{
     function ajoutNvVisiteur()

    {
        $NvVisiteur = PdoGsb::ajoutvisiteur( $nom, $prenom,$cp,$ville,$DateEmbauche);
        
      

    }
}