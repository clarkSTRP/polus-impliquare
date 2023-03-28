@extends('offers.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>crud offers</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('offers.create') }}"> Create New Offer</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($Offers as $Offer)

        <tr>
                <td>{{$Offer['id']}}</td>
                <td>{{$Offer['title']}}</td>
                <td>{{$Offer['type']}}</td>
                <td>{{$Offer['location']}}</td>
                <td>{{$Offer['description']}}</td>
                <td>{{$Offer['salary']}}</td>
                <td>{{$Offer['created_at']}}</td>
                <td>{{$Offer['updated_at']}}</td>
                <td>{{$Offer['available_for']}}</td>
            <td>

                    <form action="{{ route('offers.destroy',$Offer->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('offers.show',$Offer->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('offers.edit',$Offer->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $Offers->links() !!}

      

@endsection