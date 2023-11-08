@include('default');
<div class="container">
    <div class="my-5">
        <div class="row">
            <div class="col">
             <h1>LISTE DES TACHES</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($tache as $t)
            <div class="col-12 col-md-3">
            <div class="card">
                <h5 class="card-header">Nom de la tache {{$t->nom_tache}}</h5>
                <div class="card-body">
                    <h5 class="card-title">Priorité: {{$t->priorite}}</h5>
                    <a href="tache/{{$t->id}}/details" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>