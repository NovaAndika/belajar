@extends('Auth.dashboard')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      
      <div class="card mt-5">
        <div class="card-header">
          Login User
        </div>
        <div class="card-body">

          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('login.custom') }}" method="POST">

            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
              <label>Password</label>    
              <input type="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection