@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Offers</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('offers.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('offers.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" name="location" class="form-control" placeholder="Enter location">
                        </div>
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <input type="text" name="type" class="form-control" placeholder="Enter type">
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary:</label>
                            <input type="text" name="salary" class="form-control" placeholder="Enter salary">
                        </div>
                        <div class="form-group">
                            <label for="available_for">Available For:</label>
                            <input type="text" name="available_for" class="form-control" placeholder="Enter availability">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" name="description" rows="5" placeholder="Enter description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <style>
        .margin-tb {
            margin: 20px 0;
        }
        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            padding: 20px;
        }
        label {
            font-weight: bold;
        }
    </style>
@endsection
