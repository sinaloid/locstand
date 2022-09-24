@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <p class="text-center font-weight-bold tilte">Ajoute utilisateur</p>
            <div class="col-12 col-md-8 mx-auto my-5">
                <form action="/action_page.php" class="bg-white p-3 b-raduis">
                    <div class="form-group">
                        <label for="uname">Nom Prenom :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Nom Prenom" name="uname"
                            required>


                    </div>
                    <div class="form-group">
                        <label for="uname">Raison social :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Raison social"
                            name="uname" required>


                    </div>
                    <div class="form-group">
                        <label for="uname">Numero whatsapp :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username"
                            name="uname" required>


                    </div>
                    <div class="form-group">
                        <label for="uname">Pays :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username"
                            name="uname" required>


                    </div>
                    <div class="form-group">
                        <label for="uname">Ville :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username"
                            name="uname" required>


                    </div>
                    <div class="form-group">
                        <label for="uname">Domaine d'activité :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username"
                            name="uname" required>


                    </div>
                    <div class="form-group">
                        <label for="pwd">Responsable de stand:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                            name="pswd" required>


                    </div>
                    <div class="form-group">
                        <label for="uname">Accompagnateur 1 :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username"
                            name="uname" required>


                    </div>
                    <div class="form-group">
                        <label for="uname">Accompagnateur 2 :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username"
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
