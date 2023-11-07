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
        @for($i=1; $i < 8 ; $i++)
            <div class="col-12 col-md-3">
            <div class="card">
                <h5 class="card-header">Nom de la tache {{$i}}</h5>
                <div class="card-body">
                    <h5 class="card-title">Priorité: haute</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </div>
                </div>
            </div>
        @endfor
    </div>
</div>