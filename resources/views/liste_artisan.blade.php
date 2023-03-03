@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <p class="text-center font-weight-bold tilte">Liste artisans</p>
        <div class="col-12 col-md-10 mx-auto my-5">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Raison social</th>
                    <th>Responsable stand</th>
                    <th>Email</th>
                    <th>domaine d'activité</th>
                    <th>Nationalité</th>
                    <th>Contact</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($datas as $data)
                 <tr>
                  <td>{{$data->nom}}</td>
                  <td>{{$data->prenom}}</td>
                  <td>{{$data->raison_social}}</td>
                  <td>{{$data->responsable_stand}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{$data->domaine_activite}}</td>
                  <td>{{$data->pays}}</td>
                  <td>{{$data->contact}}</td>
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
