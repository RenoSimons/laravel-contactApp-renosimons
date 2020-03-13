@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
        <h2 class="title">My Contact List</h2> 
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <a class="create-new-btn" href="{{ route('data.create') }}">Create New Contact</a>
  
      @foreach ($datas as $data)
        
          <div class="contact-box">
            <a href="{{route('data.show',$data->id)}}">
            <div class="contact-data">
              <h2>#.</h2>
              <h2><img class="pictogram" src="images/people.png" alt="">{{$data->name}}</h2>
              <h3>+32 {{$data->phonenumber}}</h3>
            </div>
            <div class="crud-btns">
              <form action="{{ route('data.destroy', $data->id) }}" method="post">
                  <a class="small-btn" href="{{route('data.edit',$data->id)}}"><img class="pictogram"src="images/edit2.png" alt=""></a>
                  @csrf  
                  @method('DELETE')
                  <button type="submit" class="delete-btn">Delete</button>
                </form>
            </div>
            </a>
          </div>
        
      @endforeach


{!! $datas->links() !!}
  </div>
@endsection

<style>
  .create-new-btn {
    background-color: rgb(52,144,220);
    color: white;
    padding: 7.5px;
    border-radius: 5px;
  }

  .small-btn {
    color: rgb(52,144,220);
    padding: 3px;
  }

  .delete-btn {
    background-color: rgb(52,144,220);
    border-radius: 3px;
    border: none;
    padding: 4px;
    margin-left: 20px;
    font-size: 15px;
    color:white;
  }

  .delete-btn:hover {
    transform: scale(1.2);
  }
  
  .small-btn:hover {
    color: black;
  }

  .create-new-btn:hover {
    color: white;
  }
  
  .table {
    margin-top: 30px;
  }

  .title {
    margin-bottom: 30px;
    margin-left: 425px;
  }

  .contact-box {
    display:flex;
    align-items: center;
    padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin-top: 30px;
    margin-bottom: 15px;
    background-color: white;
  }

  .contact-box a:hover {
    text-decoration: none;
  }

  .contact-data {
    display: flex;
    align-items: center;
  }

  .contact-data h2 {
    margin-right: 50px;
    font-size: 20px;
  }

  .pictogram {
    width: 35px;
    margin-right: 20px;
  }

  .crud-btns {
    position: absolute;
    margin-left: 900px;
  }

  h3 {
    position: absolute;
    margin-left: 400px;
    transform: scale(0.75);
  }
</style>