@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <p class="text-center font-weight-bold tilte">Modifier stand</p>
            <div class="col-12 col-md-8 mx-auto my-5">
                <form action="{{route('stand.update', $data->id)}}" method="POST" class="bg-white p-3 b-raduis">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nom">Type_stand :</label>
                        <input type="text" class="form-control" id="Type_stand" placeholder="Type_stand"
                            name="Type_stand" value="{{$data->type_stand}}" required>
                    </div>
                
                    <div class="form-group">
                        <label for="prenom">Numero_stand :</label>
                        <input type="text" class="form-control" id="Numero_stand" placeholder="Numero_stand"
                            name="Numero_stand" value="{{$data->numero_stand}}" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control" id="password" placeholder="Password"
                            name="password" required>
                    </div>

                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary ">Modifier</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
