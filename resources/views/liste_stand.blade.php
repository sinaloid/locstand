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
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($datas as $data)
                 <tr>
                  <td>{{$data->type_stand}}</td>
                  <td>{{$data->numero_stand}}</td>
                  <td>{{$data->pavillon}}</td>
                  <td>

                      <a href="{{ route('stand.show', $data->id) }}" class="btn btn-info">Voir</a>
                      <a href="{{ route('stand.edit', $data->id) }}" class="btn btn-warning">Editer</a>
                      <form class="d-inline" action="{{ route('stand.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method("delete")
                       <button type="submit" class="btn btn-danger mx-1">Supprimer</button>
                      </form>
                    
                  </td>
                </tr>
                 @endforeach
                </tbody>
              </table>
        </div>

    </div>
@endsection
