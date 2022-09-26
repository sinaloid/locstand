@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <p class="text-center font-weight-bold tilte">Liste artisans</p>
        <div class="col-12 col-md-8 mx-auto my-5">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>domaine d'activité</th>
                    <th>Nationalité</th>
                    <th>Lieu de residence</th>
                    <th>Contact</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>Peintre</td>
                    <td>Burkinabè</td>
                    <td>Mali</td>
                    <td>65787460</td>
                   

                  </tr>
                  <tr>
                    <td>Kongo</td>
                    <td>Josiane</td>
                    <td>john@example.com</td>
                    <td>Peintre</td>
                    <td>Burkinabè</td>
                    <td>Mali</td>
                    <td>65787460</td>
                   
                  </tr>
                  <tr>
                    <td>Gal</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>Peintre</td>
                    <td>Burkinabè</td>
                    <td>Mali</td>
                    <td>65787460</td>
                   
                  </tr>
                </tbody>
              </table>
        </div>

    </div>
@endsection
