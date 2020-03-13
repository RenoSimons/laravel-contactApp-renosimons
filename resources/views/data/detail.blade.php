@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Contact Detail</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Name : </strong> {{$data->name}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Phone Number : </strong> {{$data->phonenumber}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Street : </strong> {{$data->street}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Housenumber : </strong> {{$data->housenumber}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>City : </strong> {{$data->city}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Created at : </strong> {{$data->created_at}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Updated at : </strong> {{$data->updated_at}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('data.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
