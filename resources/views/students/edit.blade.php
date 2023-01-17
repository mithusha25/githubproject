@extends('students.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Student data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.update', $student->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Student Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $student->name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Game Address :</label>
              <input type="text" class="form-control" name="address" value="{{ $student->address }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Details</button>
      </form>
  </div>
</div>
@endsection