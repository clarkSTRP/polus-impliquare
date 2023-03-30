@extends('layouts.app')

@section('content')

 


 {{--    <div class="row"> 
        <div class="col-md-3">
            <label>Filtrer par dates</label>
            <input type="date" name="date" class="form-control" value="">
        </div>
    </div> --}} 
    <form action="" method="GET" >
    <div class="col-md-3">
        <label>Filtrer par type</label>
        <select name="type" class="form-select">
            <option >slection du type de contrat</option>
            <option value="CDD">CDD</option>
            <option value="CDI">CDI</option>
            <option value="Alternance">Alternance</option>
        </select>
    </div>
    <div class="col-md-6">
        <br/>
        <button type="submit" class="btn btn-primary">Filtrer</button>
    </div>
    </div>
    </form>
    <form action="" method="GET" >
    <div class="col-md-3">
        <label>Filtrer par localisation</label>
        <select name="location" class="form-select">
            <option value="">slection de la region</option>
            <option value="provence">Provence</option>
            <option value="laplebe">Laplebe</option>
            <option value="Occitanie">Occitanie</option>
        </select>
    </div>
    <div class="col-md-6">
        <br/>
        <button type="submit" class="btn btn-primary">Filtrer</button>
    </div>
</div>
</form>
<form action="" method="GET" >
    <div class="col-md-6">
        <br/>
        <button type="submit" name="asc" class="btn btn-primary">tris ascendant</button>
    </div>
</form>
<form action="" method="GET" >
<div class="col-md-6">
    <br/>
    <button type="submit" name="desc" class="btn btn-primary">tris descendant</button>
</div>
</form>
    
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
                                        <h6 class="text-uppercase mb-0">{{ $Offer['type'] }}</h6>

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
