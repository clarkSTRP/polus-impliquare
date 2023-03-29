@extends('layouts.app')

@section('content')

    
<div class="dropdown btn-group">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      localisation de l'offre
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Provence</a></li>
      <li><a class="dropdown-item" href="#">laplebe</a></li>
      <li><a class="dropdown-item" href="#">Occitanie</a></li>
    </ul>
  </div>
  <div class="dropdown btn-group">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      type d'offres
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">CDD</a></li>
      <li><a class="dropdown-item" href="#">CDI</a></li>
      <li><a class="dropdown-item" href="#">Alternance</a></li>
    </ul>
  </div>
    
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2 class="text-center mb-5">Nos Offres</h2>

                @if ($message = Session::get('success'))

                    <div class="alert alert-success">

                        <p>{{ $message }}</p>

                    </div>

                @endif

                <div class="row">

                    @foreach ($Offers as $Offer)

                        <div class="col-md-12 mb-4">

                            <div class="job-posting media p-4 border rounded">

                                <div class="row">

                                    <div class="col-md-3 bg-light border-right text-center">

                                        <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="Image de l'annonce">

                                        <h6 class="text-uppercase mb-0">{{ $Offer['title'] }}</h6>

                                    </div>

                                    <div class="col-md-9">

                                        <div class="media-body">

                                            <p class="mb-0">{{ $Offer['description'] }}</p>

                                            <div class="text-right mt-4">

                                                <a href="{{ route('main.show', $Offer->id) }}" class="btn btn-outline-secondary">Voir l'annonce</a>

                                            </div>

                                            <small class="text-muted">{{ $Offer['updated_at'] }}</small>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

                <div class="row">

                    <div class="col-md-12">

                        {!! $Offers->links() !!}

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('styles')

    <style>

        .job-posting {

            border: none;

            background-color: #fff;

            box-shadow: 0px 0px 10px #ccc;

            font-family: 'Times New Roman', Times, serif;

        }

        .bg-light {

            background-color: #f8f9fa;

        }

        .border-right {

            border-right: 1px solid #dee2e6;

        }

        .btn-outline-secondary {

            color: #9c5b34;

            border-color: #9c5b34;

        }

        .btn-outline-secondary:hover {

            background-color: #9c5b34;

            border-color: #9c5b34;

            color: #fff;

        }

    </style>

@endsection
