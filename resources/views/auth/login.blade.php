@extends('layouts.app') @section('content')

<div class="col-md-4 col-md-offset-4 login_form">
    <form class="" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <h2>Log in to your account</h2>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class=" control-label">E-Mail Address</label>


            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class=" control-label">Password</label>


            <input id="password" type="password" class="form-control" name="password"> @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif

        </div>

        <div class="form-group">

            <div class="text-wrap text-wrap-sign">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
                <a style="color:white;" class="pull-right" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>

        </div>

        <div class="form-group">
            <div class="">
                <button type="submit" class="btnsubmit btn btn-lg btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i> Login
                </button>
                <a href="/register" type="button" class="btnsubmit btn btn-info">Sign up</a>



            </div>
        </div>
    </form>
</div>
</div>
</div>

@endsection
