@extends ('sommaireGestionnaire')
@section('contenu1')

<h3>Fiche de frais du mois {{ $numMois }}-{{ $numAnnee }} : 
    </h3>
    <div class="encadre">
   
  	<table class="listeLegere">
  	   <caption>Ajout Visiteur </caption>
        <tr>
            @foreach($lesnom as $un nom)
			    <th> {{$unFraisForfait['libelle']}} </th>
            @endforeach
		</tr>
        <tr>
            @foreach($lesFraisForfait as $unFraisForfait)
                <td class="qteForfait">{{ $unFraisForfait['quantite'] }} 
                </td>
            @endforeach
		</tr>
    </table>
    <br>
    <strong> Montant total : {{$cumul}} </strong>
  	</div>
@endsection