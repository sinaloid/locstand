@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <p class="text-center font-weight-bold tilte">Informations de stand</p>
            <div class="col-12 col-md-4 mx-auto">
                <div class="tilte">type_stand: <span class="fw-bold">{{$data->type_stand}}</span></div>
            </div>
            <div class="col-12 col-md-4 mx-auto">
                <div class="tilte">numero_stand: <span class="fw-bold">{{$data->type_stand}}</span></div>
            </div>
        </div>
    </div>
@endsection
