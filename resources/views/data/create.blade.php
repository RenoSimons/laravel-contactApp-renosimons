@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Contact</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Type error</strong> Please fill in numeric values where needed<br>
      </div>
    @endif

    <form action="{{route('data.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Full Name :</strong>
          <input type="text" name="name" class="form-control" placeholder="John Wick" required>
        </div>
        <div class="col-md-12">
          <strong>Phone Number :</strong>
          <textarea class="form-control" placeholder="Phonenumber" name="phonenumber" required></textarea>
        </div>
        <div class="col-md-12">
          <strong>Street :</strong>
          <textarea class="form-control" placeholder="Street" name="street" required></textarea>
        </div>
        <div class="col-md-12">
          <strong>House Number :</strong>
          <textarea class="form-control" placeholder="House Number" name="housenumber" required></textarea>
        </div>
        <div class="col-md-12">
          <strong>City :</strong>
          <textarea class="form-control" placeholder="City" name="city" required></textarea>
        </div>

        <div class="col-md-12" style="margin-top: 30px;">
          <a href="{{route('data.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
