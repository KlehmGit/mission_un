<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;

class connexionController extends Controller
{
    function connecter(){
        
        return view('connexion')->with('erreurs',null);
    } 
    function valider(Request $request){
        $login = $request['login'];
        $mdp = $request['mdp'];
        $visiteur = PdoGsb::getInfosVisiteur($login,$mdp);
        $gestionnaire = PdoGsb::getInfosGestionnaire($login,$mdp); // creation de la req de le pdo pour la co du gestionnaire
        
        if(!is_array($visiteur))
        {
            if(!is_array($gestionnaire))
            {
                $erreurs[] = "Login ou mot de passe incorrect(s)";
                return view('connexion')->with('erreurs',$erreurs);

            }
            else
            {
                session(['gestionnaire' => $gestionnaire]);
                return view('sommaireGestionnaire')->with('gestionnaire',session('gestionnaire'));
            }
         
            
        } 
        else
        {
            session(['visiteur' => $visiteur]);
            return view('sommaire')->with('visiteur',session('visiteur'));
         
        }
    } 
    function deconnecter(){
            session(['visiteur' => null]);
            return redirect()->route('chemin_connexion');
    }
       
}
