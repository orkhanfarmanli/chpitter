@extends('layouts.app') @section('content')
<div class="col-md-4 col-md-offset-4 login_form" style="background-color:rgba(121, 192, 242,1)">
    <h2>Join Twitter tomorrow</h2>
    <form class="" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
            <label for="username" class="col-md-4 control-label">UserName</label>


            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}"> @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>


            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>


            <input id="password" type="password" class="form-control" name="password"> @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>


            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"> @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
            @endif

        </div>

        <div class="form-group">

            <button type="submit" class="btnsubmit btn btn-lg btn-primary">
                <i class="fa fa-btn fa-user"></i> Register
            </button>
            <a href="/login" type="button" class="btnsubmit btn btn-info">Log in</a>
            <div class="text-wrap text-sign text-wrap-sign">
                <p>By signing up, you agree to the
                    <a href="#">Terms of Service</a> and
                    <a href="#">Privacy Policy</a>, including Cookie Use. Others will be able
                    to find you by email or phone number when provided.
                    <br>
                    <a href="#">Advanced options</a>
                </p>
            </div>

        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
