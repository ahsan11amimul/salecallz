@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row justify-content-center align-items-center" style="margin-top:100px;">
        <div class="col-md-6">
            <div class="card" style="width: 30rem;">
                <div class="card-header text-center">{{ __('Login Here..') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email') }}">
                                @error('email')
                                   <p class="text-danger fw-semibold">{{$message}}</p>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remeber">
                            <label class="form-check-label" for="remember">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
 @if (Session::has('success'))
      <script>
         Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: "{!! Session::get('success') !!}",
  showConfirmButton: false,
  timer: 1500
})
      </script>
  @endif
@endsection
