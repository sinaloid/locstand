@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <p class="text-center font-weight-bold tilte">Faire une location ou une réservation</p>
            <div class="col-12 col-md-8 mx-auto my-5">
                <form action="{{route('location_reservation.store')}}" method="POST" class="bg-white p-3 b-raduis">
                    @csrf
                    @php
                        $stands = App\Models\Stand::all();
                        $artisans = App\Models\Artisan::all();
                    @endphp
                    <div class="form-group">
                        <label for="stand_id">Liste des Stands :</label>
                        <select class="form-select" id="stand_id"
                        name="stand_id" required>
                            <option value="">Selectionnez une stand</option>
                            @foreach ($stands as $stand)
                                <option class="d-inline-block" value="{{$stand->id}}">
                                    <span>Pavillon: {{$stand->pavillon}}</span> <br>
                                    <span>Type: {{$stand->type_stand}}</span> <br>
                                    <span>Numéro: {{$stand->numero_stand}}</span>
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="artisan_id">Liste des artisans</label>
                        <select class="form-select" id="artisan_id"
                        name="artisan_id" required>
                            <option value="">Selectionnez l'artisan</option>
                            @foreach ($artisans as $artisan)
                                <option class="d-inline-block" value="{{$artisan->id}}">
                                    <span>{{$artisan->nom." ".$artisan->prenom}}</span> <br>
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="etat_stand">Etat de la stand</label>
                        <select class="form-select" id="etat_stand"
                        name="etat_stand" required>
                            <option value="">Selectionnez un etat</option>
                            <option value="climentiser">Occuper</option>
                            <option value="ventiller">Réserver</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date_debut">Date de début</label>
                        <input type="date" class="form-control" id="date_debut" placeholder="Date de début"
                            name="date_debut" required>
                    </div>
                    <div class="form-group">
                        <label for="date_fin">Date de fin</label>
                        <input type="date" class="form-control" id="date_fin" placeholder="Date de fin"
                            name="date_fin" required>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary ">Ajouter</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
