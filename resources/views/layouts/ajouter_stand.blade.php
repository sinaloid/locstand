@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <p class="text-center font-weight-bold tilte">Ajouter un stand</p>
            <div class="col-12 col-md-8 mx-auto my-5">
                <form action="/action_page.php" class="bg-white p-3 b-raduis">
                    <div class="form-group">
                        <label for="uname">Type de Stand :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Type de Stand" name="uname"
                            required>


                    </div>
                    <div class="form-group">
                        <label for="uname">Numéro de stand :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Numéro de stand"
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
