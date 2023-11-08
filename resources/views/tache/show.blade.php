@include('default')

<div class="container">
    <h1 class="text-center">DETAIL TACHE</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <h5 class="card-header">Nom de la tache: {{$tacheTrouver->nom_tache}}</h5>
                <div class="card-body">
                    <h5 class="card-title">Priorité:{{$tacheTrouver->priorite}}</h5>
                    <p class="card-text">Description: {{$tacheTrouver->description_tache}}</p>
                    <p class="card-text">Status:
                        @if($tacheTrouver -> is_termine==1)
                            Terminé
                        @else
                            En Cours <br>
                            <a href="/tache/terminer/{{$tacheTrouver->id}}" class="btn btn-success">Terminer</a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>