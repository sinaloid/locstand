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
                  @foreach ($datas as $data)
                 <tr>
                  <td>{{$data->type_stand}}</td>
                  <td>{{$data->numero_stand}}</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-infos mx-1">Voir</button>
                      <button class="btn btn-warning mx-1">Editer</button>
                      <button class="btn btn-danger mx-1">Supprimer</button>
                    </div>
                    
                  </td>
                </tr>
                 @endforeach
                </tbody>
              </table>
        </div>

    </div>
@endsection
