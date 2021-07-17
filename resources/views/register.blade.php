@extends('plantilla')

@section('register')

    <div class="container-fluid col-md-4  mt-5">
      <h1 class="text-center mb-5">
        Registrate!!!!
      </h1>
      <form method="POST" action="{{ route('user-register') }}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-left">Correo</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="**************" name="password">
          </div>
          <button type="submit" class="btn btn-primary mt-5">Crear</button>
        </form>
    </div>
  

@endsection