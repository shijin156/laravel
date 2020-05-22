@extends('layouts.main')
@section('content')
<div class="container">
  <h1>Home page</h1>
  @if (session('succes_msg'))
  <div class="alert alert-success" role="alert">
    {{session('succes_msg')}}
  </div>
  @endif
  <table class="table">
    <thead class="grey lighten-2">
      <tr>
        <th  class="align-middle" scope="col">id</th>
        <th  class="align-middle" scope="col">First Name</th>
        <th  class="align-middle" scope="col">Last Name</th>
        <th  class="align-middle" scope="col">Email</th>
        <th  class="align-middle" scope="col">Phone</th>
        <th  class="align-middle" scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $rows)
      <tr>
        <th class="align-middle" scope="row">{{ $rows->id }}</th>
        <td class="align-middle">{{ $rows->first_name }}</td>
        <td class="align-middle">{{ $rows->last_name }}</td>
        <td class="align-middle">{{ $rows->email }}</td>
        <td class="align-middle">{{ $rows->phone }}</td>
        <td class="align-middle"><a href="{{route('edit', $rows->id)}}" class="btn btn-sm btn-warning">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ||
<form action="{{route('delete', $rows->id)}}" method="post" style="display:none;" id="data-form-{{$rows->id}}">
{{csrf_field()}}
{{method_field('delete')}}
</form>
<button onclick="if (confirm('Are you want to delete this file?')){
event.preventDefault();
document.getElementById('data-form-{{$rows->id}}').submit();
}
else{
  event.preventDefault();
}
"
href="" class="btn btn-sm btn-info">Delete <i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$students->links()}}
</div>
@endsection
