@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <p class="text-center font-weight-bold tilte">Ajoute utilisateur</p>
            <div class="col-12 col-md-8 mx-auto my-5">
                <form action="/action_page.php" class="bg-white p-3 b-raduis">

                    <div class="form-group">
                        <label for="uname">Nom :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Nom"
                            name="uname" required>
                    </div>

                    <div class="form-group">
                        <label for="uname">Prenom :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Prenom"
                            name="uname" required>
                    </div>

                    
                    <div class="form-group">
                        <label for="uname">Email :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Email"
                            name="uname" required>
                    </div>

                    <div class="form-group">
                        <label for="uname">Direction :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Direction"
                            name="uname" required>
                    </div>

                    <div class="form-group">
                        <label for="uname">Fonction :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Fonction"
                            name="uname" required>
                    </div>

                    <div class="form-group">
                        <label for="uname">Type-user :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Type_user"
                            name="uname" required>
                    </div>
    

                    <div class="form-group">
                        <label for="pwd">Password :</label>
                        <input type="password" class="form-control" id="uname" placeholder="Password"
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
