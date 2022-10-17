@extends('app')  @section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr class="">
            <th scope="col">ID</th>
            <th scope="col">Fullname</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->fullname}}</td>
                <td>{{$item->birthday}}</td>
                <td>{{$item->address}}</td>
                <td><a href="student/{{$item->id}}/edit" class="btn btn-primary btn-sm">Edit</a></td>
            </tr>

            @endforeach

        </tbody>
      </table>
</div>


@endsection


