@extends('admin.template')

@section('title', 'Editeaza Camera')

@section('content')

@php
    use App\Models\RoomType;
    $roomtype = RoomType::find($room->id_RoomType);
    $roomtypes = RoomType::all();
@endphp

<form class='col-lg-4 col-sm-10 dri-form' method='post' action="{{route('admin-edit-room-post', ['id' => $room->id_Room])}}">
    @csrf
    <div class="form-group row">
      <label for="staticID" class="col-sm-4 col-form-label">ID</label>
      <div class="col-sm-8">
        <input type="text" readonly class="form-control-plaintext" id="staticID" value="{{$room->id_Room}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticNumber" class="col-sm-4 col-form-label">Numar Camera</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name='number' id="staticNumber" value="{{$room->roomNumber}}">
      </div>
    </div>
    <div class="form-group row">
        <label for="staticStatus" class="col-sm-4 col-form-label">Status</label>
        <div class="col-sm-8">
          <select class="form-control" name='status' id="staticStatus">
            <option value='vizibil' @if($room->status == 'vizibil') selected @endif>Vizibil</option>
            <option value="invizibil" @if($room->status == 'invizibil') selected @endif>Invizibil</option>
          </select>
        </div>
      </div>
    <div class="form-group row">
      <label for="inputType" class="col-sm-4 col-form-label">Tipul</label>
      <div class="col-sm-8">
        <select class="form-control" name='type'>
            @foreach ($roomtypes as $types)
                <option value="{{$types->id_RoomType}}" @if($room->id_RoomType == $types->id_RoomType)selected @endif>{{$types->type}}</option>
            @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
        <label for="inputPrice" class="col-sm-4 col-form-label">Pret <span style="color: grey">({{$roomtype->type}})</span> RON </label>
        <div class="col-sm-8">
          <input type="text" name='price' readonly class="form-control-plaintext" id="inputPrice" value="{{$roomtype->price}}">
        </div>
      </div>
    <div class="form-group row">
      <label for="inputDesc" class="col-sm-4 col-form-label">Desriere <span style="color: grey">({{$roomtype->type}})</span></label>
      <div class="col-sm-8">
        <input type="text" name='description' readonly class="form-control-plaintext" id="inputDesc" value="{{$roomtype->description}}">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputCap" class="col-sm-4 col-form-label">Capacitate <span style="color: grey">({{$roomtype->type}})</span></label>
        <div class="col-sm-8">
          <input type="text" name='capacity' readonly class="form-control-plaintext" id="inputCap" value="{{$roomtype->capacity}}">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputimg" class="col-sm-4 col-form-label">Imagine</span></label>
        <div class="col-sm-8">
          <img src="{{asset('/images/' . $room->image)}}" class="img-fluid" style="border-radius: 10px">
        </div>
      </div>
    <button type='submit' class='btn' style='background-color: #4e73df;color:white;'>Salveaza</button>
    @if(Session::get('message'))
    <p style='color: green; margin-top: 15px;'>Camera a fost actualizata</p>
    @endif
  </form>

@endsection