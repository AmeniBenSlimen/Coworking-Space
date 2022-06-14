
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
 
  height: 1100px;
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
  margin-bottom:100px;
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
  width: 100%;
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
strong  {
   animation-duration: .8s;
   animation-name: clignoter;
   animation-iteration-count: infinite;
   transition: none;
  color: 
}
@keyframes clignoter {
  0%   { color:#000000; }
  40%   {color:red; }
  100% { opacity:#000000; }
}
</style>
<div class="full-screen-container">
      <div class="login-container">
        <h3 class="login-title">Register</h3>
               

                <div class="input-group">
                    <br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date_naissance" class="col-md-4 col-form-label text-md-end">{{ __('Date de Naissance') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="date_naissance" type="text" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" value="{{ old('date_naissance') }}" required autocomplete="prenom" autofocus> -->
                                <input type="date" name="date_naissance" id="date_naissance" class="form-control @error('date_naissance') is-invalid @enderror" required autocomplete="date_naissance" autofocus pattern="[0-9]{2}/[0-9]{2}/[1-9]{4}"/>
                                @error('date_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="alert alert-danger" role="alert">
                                        <strong>Compte déja existant</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('Numéro de Télephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                     

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="login-button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                          
                        </div>
                    </form>
                      <br>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementsByTagName("strong")[0].style.fontSize = "15px";
</script>
@endsection

