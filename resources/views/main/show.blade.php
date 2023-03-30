@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Détails de l'offre</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('main.index') }}">Retour</a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6 border p-4">
            <div class="form-group">
                <h4>{{ $Offer->title }}</h4>
                <p><strong>Description:</strong> {{ $Offer->description }}</p>
                <p><strong>Localisation:</strong> {{ $Offer->location }}</p>
                <p><strong>Salaire:</strong> {{ $Offer->salary }} €/mois</p>
            </div>
        </div>
        <div class="col-lg-6 border p-4">
            <div class="form-group">
                <p><strong>Date de création:</strong> {{ $Offer->created_at }}</p>
                <p><strong>Date de mise à jour:</strong> {{ $Offer->updated_at }}</p>
                <p><strong>Disponible pour:</strong> {{ $Offer->available_for }} jour</p>
                <a href="{{ route('responses.create',$Offer->id) }}" class="btn btn-primary">postuler à l'offre</a>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .form-group p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        h4 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .border {
            border: 1px solid #dee2e6;
        }
    </style>
@endsection
