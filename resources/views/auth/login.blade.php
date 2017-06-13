@extends('marketing.skeleton')

@section('content')
  <body class="marketing register">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">

          <div class="signup-box">
            <img class="logo" src="/img/small-logo.png" alt="">
            <h2>{{ trans('auth.Login to your account') }}</h2>

            @include ('partials.errors')

            <form class="" action="/login" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
              </div>

              <div class="form-group">
                <label for="password">{{ trans('auth.Password') }}</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>

              <div class="form-group actions">
                <button type="submit" class="btn btn-primary">{{ trans('auth.Login') }}</button>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" checked> {{ trans('auth.Remember me') }}
                </label>
              </div>

              <div class="form-group links">
                <ul>
                  <li>{{ trans('auth.Forget your password?') }} <a href="/password/reset">{{ trans('auth.Reset your password') }}</a></li>
                  @if(env('APP_DISABLE_SIGNUP') != 'true')
                    <li>{{ trans('auth.Don't have an account?') }} <a href="/register">{{ trans('auth.Sign up') }}</a></li>
                  @endif
                </ul>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection
