@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="columns">
      <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card">
          <div class="card-content">
            <h1 class="title">Log In</h1>

            <form action="{{ route('login') }}" method="POST" role="form">
              {{ csrf_field() }}
              <div class="field">
                <label for="email" class="label">Email Address</label>
                <p class="control">
                  <input class="input {{ $errors->has('email') ? 'is-danger': ''}}" type="text" name="email" placeholder="name@example.com" id="email" value="{{ old('email') }}">
                </p>
                @if($errors->has('email'))
                  <p class="help is-danger">{{ $errors->first('email') }}</p>
                @endif
              </div>
              <div class="field">
                <label for="password" class="label">Password</label>
                <p class="control">
                  <input class="input {{ $errors->has('password') ? 'is-danger': ''}}" type="password" name="password" id="password">
                </p>
                @if($errors->has('password'))
                  <p class="help is-danger">{{ $errors->first('password') }}</p>
                @endif
              </div>
              <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>

              <button class="button is-success is-outlined is-fullwidth m-t-30">Log In</button>
            </form>
          </div><!--/ .card-content-->
        </div><!--/ .card -->
        <h5 class="has-text-centered m-t-20"><a href="{{ route('password.request') }}" class="is-muted">Forgot your password?</a></h5>
      </div>
    </div>
  </div>
@endsection
