@include('default');

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
                    <a href="#" class="btn btn-success">Terminer</a>
                </div>
            </div>
        </div>
    </div>
</div>