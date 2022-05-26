@extends('layouts.footer')
@extends('layouts.appp')
@extends('layouts.navbar')


@section('content')
<style>
  * {
  box-sizing: border-box;
  font-family: 'Quicksand', sans-serif;
}

html,
body {
  margin: 0;
}

.full-screen-container {
  background-image: url('images/bb.webp');
  height: 100%;
  width: 100%;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.login-container {
  background-color: hsla(201, 100%, 6%, 0.6);
  padding: 50px 30px;
  min-width: 400px;
  width: 50%;
  max-width: 600px;
}
.login-title {
  color: #fff;
  text-align: center;
  margin: 0;
  margin-bottom: 40px;
  font-size: 2.5em;
  font-weight: normal;
}
.input-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}
.input-group label {
  color: #fff;
  font-weight: lighter;
  font-size: 1em;
  margin-bottom: 7px;
}
.input-group input {
  font-size: 1.5em;
  padding: 0.1em 0.25em;
  background-color: hsla(201, 100%, 91%, 0.3);
  border: 1px solid hsl(201, 100%, 6%);
  outline: none;
  border-radius: 5px;
  color: #fff;
  font-weight: lighter;
}
.input-group input:focus {
  border: 1px solid hsl(201, 100%, 50%);
}
.login-button {
  padding: 10px 30px;
  width: 73%;
  border-radius: 5px;
  background: hsla(201, 100%, 50%, 0.1);
  border: 1px solid hsl(201, 100%, 50%);
  outline: none;
  font-size: 1.5em;
  color: #fff;
  font-weight: lighter;
  margin-top: 20px;
  cursor: pointer;
}
.login-button:hover {
  background-color: hsla(201, 100%, 50%, 0.3);
}
.login-button:focus {
  background-color: hsla(201, 100%, 50%, 0.5);
}
</style>

<div class="full-screen-container">
      <div class="login-container">
        <h3 class="login-title">Login  </h3>
               
        @if(session()->get('error'))
    <div class="alert alert-danger">
      {{ session()->get('error') }}  
    </div><br />
  @endif
                <div class="input-group">
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                       
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="login-button">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <br>
                                
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
