@extends('layouts.main')
@section('content')
<div class="container">
<h1>Edit page</h1>

@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>
@endforeach
@endif
<!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('update', $students->id ) }}" method="POST">
{{csrf_field()}}
    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" value="{{$students->first_name}}" class="form-control" name="first_name" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" value="{{$students->last_name}}" class="form-control" name="last_name"  placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" value="{{$students->email}}"  class="form-control mb-4" name="email" placeholder="E-mail">

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" value="{{$students->phone}}"  class="form-control" name="phone" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">


    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" name="submit" type="submit">Update Data</button>


</form>
</div>
<!-- Default form register -->
@endsection
