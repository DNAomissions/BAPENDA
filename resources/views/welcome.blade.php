@extends('layouts.app')

@section('js')
@stop

@section('content')
<!-- <div class="animation-in"></div> -->
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md position-ref" id="title">
            <img class="image-title" src="{{asset('images/logobapenda.png')}}"></img>
        </div>
        <div class="col-md-offset-1 col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading text-left">
                    Login Form
                </div>
                <div class="panel-body container-fluid">
                    <form class="form-horizontal container-fluid" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <input id="username" placeholder="Username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop