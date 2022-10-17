@extends('app') @section('content')
<form action="{{route('update',$student->id)}}" method="POST">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-1 col-form-label">ID</label>
        <div class="col-sm-7">
          <input type="text" readonly class="form-control-plaintext" name="id" value="{{$student['id']}}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-1 col-form-label">Fullname: </label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="fullname" value="{{$student['fullname']}}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-1 col-form-label">Birthday: </label>
        <div class="col-sm-7">
          <input type="date" class="form-control" name="birthday"  value="{{$student['birthday']}}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-1 col-form-label">Address: </label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="address" value="{{$student['address']}}">
        </div>
      </div>
      @csrf
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
