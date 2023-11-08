@include('default')

<div class="container">
    <!-- <div class="mt-5">
        <h1 class="text-center">
            Je souhaite créer une nouvelle tache
        </h1>
    </div> -->

    <div class="card">
        <div class="col-md-6 offset-3 mt-4">
            <h5 class="card-header text-center bg-primary text-white">AJOUT TACHE</h5>
            <div class="card-body">
                <form method="post" action="/tache/nouveau">
                    @csrf
                    <div class="form-group">
                        <label for="nomTache">Nom Tache</label>
                        <input type="text" class="form-control" id="nomTache"  placeholder="Enter une tache" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="descTache">Description Tache</label>
                        <input type="text" class="form-control" id="descTache"  placeholder="Enter la description de la tache" name="description">
                    </div>
                    <div class="form-group">
                        <label for="dateTache">Date échéance</label>
                        <input type="date" class="form-control" id="dateTache" name="date">
                    </div>
                    <div class="form-group">
                        <label for="prioriteTache">Priorité</label>
                        <select class="form-control" id="prioriteTache" name="priorite">
                            <option>Veuillez choisir une priorite</option>
                            <option value="haute">Haute</option>
                            <option value="moyenne">Moyenne</option>
                            <option value="faible">Faible</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="terminerTcahe" value="1" name="terminer">
                        <label class="form-check-label" for="terminerTcahe">Deja terminer ?</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</div>