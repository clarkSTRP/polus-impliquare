@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Nos Offres</h2>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <div class="row">

        @foreach ($Offers as $Offer)

            <div class="col-md-12 mb-4">

                <div class="job-posting media p-4 border rounded">

                    <img src="https://via.placeholder.com/150" class="mr-3" alt="Image de l'annonce">

                    <div class="media-body">

                        <h5 class="mt-0">{{ $Offer['title'] }}</h5>

                        <p>{{ $Offer['description'] }}</p>

                        <div class="text-right">

                            <a href="{{ route('main.show', $Offer->id) }}" class="btn btn-info">voir l'annonce</a>

                        </div>

                        <small class="text-muted">{{ $Offer['updated_at'] }}</small>

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

@endsection

@section('styles')

    <style>

        .job-posting {

            border: 1px solid #ddd;

            gap: 20px;

        }

    </style>

@endsection
