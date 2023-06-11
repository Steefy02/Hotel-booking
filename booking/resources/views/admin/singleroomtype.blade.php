@extends('admin.template')

@section('title', 'Editeaza Camera')

@section('content')

<form class='col-lg-4 col-sm-10 dri-form' method='post' action="">
    @csrf
    <div class="form-group row">
      <label for="staticID" class="col-sm-4 col-form-label">ID</label>
      <div class="col-sm-8">
        <input type="text" readonly class="form-control-plaintext" id="staticID" value="{{$roomtype->id_RoomType}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputType" class="col-sm-4 col-form-label">Tip</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name='type' id="inputType" value="{{$roomtype->type}}">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputDesc" class="col-sm-4 col-form-label">Descriere</label>
        <div class="col-sm-8">
          <input type="text" name='price' class="form-control" id="inputDesc" value="{{$roomtype->description}}">
        </div>
      </div>
    <div class="form-group row">
      <label for="inputPrice" class="col-sm-4 col-form-label">Pret (RON)</label>
      <div class="col-sm-8">
        <input type="text" name='price' class="form-control" id="inputPrice" value="{{$roomtype->price}}">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputCapacity" class="col-sm-4 col-form-label">Capacitate (nr. pers)</label>
        <div class="col-sm-8">
          <input type="text" name='price' readonly class="form-control" id="inputcapacity" value="{{$roomtype->capacity}}">
        </div>
      </div>
    <button type='submit' class='btn' style='background-color: #4e73df;color:white;'>Salveaza</button>
    @if(Session::get('message'))
    <p style='color: green; margin-top: 15px;'>Tipul de camera a fost actualizat</p>
    @endif
  </form>

@endsection