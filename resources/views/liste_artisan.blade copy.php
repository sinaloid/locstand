@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <p class="text-center font-weight-bold tilte">Liste des stands</p>
        <div class="col-12 col-md-8 mx-auto my-5">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Type de stand</th>
                    <th>Numéro de stand</th>
                    <th>Nom pavillon</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Climatisé</td>
                    <td>A3</td>
                    <td>Rouge</td>
                  </tr>
                  <tr>
                    <td>Standart</td>
                    <td>B1</td>
                    <td>Vert</td>
                  </tr>
                  <tr>
                    <td>Standart</td>
                    <td>C2</td>
                    <td>Soleil lévant</td>
                  </tr>

                </tbody>
              </table>
        </div>

    </div>
@endsection
