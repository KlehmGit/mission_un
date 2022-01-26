@extends ('modeles/visiteur')
    @section('menu')
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">
                  
             </div>  
               <ul id="menuList">
                   <li >
                    <strong>Bonjour {{ $gestionnaire['prenom'] . ' ' . $gestionnaire['nom'] }}</strong> 
                      
                    <li class="smenu">
                     <a href="{{ route('chemin_ajoutVisiteur')}}" title="admin ajout ">Ajouter un visiteur</a>
                  </li>
                
               <li class="smenu">
                <a href="{{ route('chemin_deconnexion') }}"" title="Se déconnecter">Déconnexion</a>
                  </li>
              
                </ul>
         <!-- $gestionnaire est la variable qui se trouve dans le controller dans le premier argument 'gestionnaire -->
        </div>
    @endsection          