@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <p class="text-center font-weight-bold tilte">Ajouter un artisan</p>
            <div class="col-12 col-md-8 mx-auto my-5">
                <form action="/action_page.php" class="bg-white p-3 b-raduis">
                    <div class="form-group">
                        <label for="uname">Nom :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Entrez votre nom " name="uname"
                            required>


                    </div>

                    <div class="form-group">
                        <label for="uname">Prenom :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Entrez votre prenom" name="uname"
                            required>


                    </div>
                    <div class="form-group">
                        <label for="uname">Raison social :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Entrez votre raison social"
                            name="uname" required>
                    </div>
                    

                    <div class="form-group">
                        <label for="uname">Contact :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Entrez votre contact"
                            name="uname" required>
                    </div>

                
                    <div class="form-group">
                        <label for="uname">Domaine d'activité :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Entrez le nom de votre domaine d'activité "
                        name="uname" required>
                    </div>

                    <div class="form-group">
                        <label for="uname">Pays :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Entrez le nom de votre pays"
                            name="uname" required>
                    </div>


                    <div class="form-group">
                        <label for="uname">Ville :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Entrez le nom de votre ville"
                            name="uname" required>
                    </div>


                    <div class="form-group">
                        <label for="uname">Responsable de stand:</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Entrez votre le nom du responsable de stand"
                            name="pswd" required>
                    </div>


                    <div class="form-group">
                        <label for="uname">Accompagnateur 1 :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Entrez le nom de l'accompagnateur 1"
                            name="uname" required>
                    </div>


                    <div class="form-group">
                        <label for="uname">Accompagnateur 2 :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Entrez le nom de l'accompagnateur 2"
                            name="uname" required>
                    </div>


                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary ">Ajouter</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
