@extends('admin.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
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
    <div class="col-md-6 mx-auto border rounded p-4 shadow">
        <form action="{{ route('responses.store',$Offer->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <strong>contenus de votre reponses:</strong>
                <input type="text" name="content" class="form-control" placeholder="Name">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('styles')
<style>
    .margin-tb {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .form-control {
        border-radius: 0;
    }
    button[type="submit"] {
        border-radius: 0;
    }
</style>
@endsection
