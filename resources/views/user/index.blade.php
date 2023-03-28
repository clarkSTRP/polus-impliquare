@extends('offers.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>crud offers</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('user.create') }}"> Create New Offer</a>

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

        @foreach ($User as $Users)

        <tr>
                <td>{{$Users['id']}}</td>
                <td>{{$Users['name']}}</td>
                <td>{{$Users['email']}}</td>
            <td>

                    <form action="{{ route('user.destroy',$Users->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('user.show',$Users->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('user.edit',$Users->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $User->links() !!}

      

@endsection