@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Contacts</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('data.update',$data->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Name :</strong>
          <textarea type="text" name="name" class="form-control">{{$data->name}}</textarea>
        </div>
        <div class="col-md-12">
          <strong>Phone Number :</strong>
          <textarea class="form-control" name="phonenumber">{{$data->phonenumber}}</textarea>
        </div>
        <div class="col-md-12">
          <strong>Street :</strong>
          <textarea class="form-control" name="street">{{$data->street}}</textarea>
        </div>
        <div class="col-md-12">
          <strong>Housenumber :</strong>
          <textarea class="form-control" name="housenumber">{{$data->housenumber}}</textarea>
        </div>
        <div class="col-md-12">
          <strong>City :</strong>
          <textarea class="form-control" name="city">{{$data->city}}</textarea>
        </div>

        <div class="col-md-12" style="margin-top: 30px;">
          <a href="{{route('data.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
