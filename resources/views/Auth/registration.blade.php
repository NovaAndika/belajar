<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <title>Register User</title>
</head>
<body>
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        
        <div class="card mt-5">
          <div class="card-header">
            Register User
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

            <form action="{{ route('register.custom') }}" method="POST">

              @csrf
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
              </div>

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
