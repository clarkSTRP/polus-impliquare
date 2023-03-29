@extends('admin.layout')

@section('content')

<div class="row mb-4">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center">
            <h2>CRUD Name</h2>
            <a class="btn btn-success" href="{{ route('user.create') }}">Create New user</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-hover shadow-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($User as $Users)
            <tr>
                <td>{{ $Users->id }}</td>
                <td>{{ $Users->name }}</td>
                <td>{{ $Users->email }}</td>
                <td>
                    <form action="{{ route('user.destroy', $Users->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('user.show', $Users->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('user.edit', $Users->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{!! $User->links() !!}

@endsection
