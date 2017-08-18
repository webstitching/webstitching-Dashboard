@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="img-logo">
        <a href="{{route('login')}}"><img src="{{ asset('images/logo2.png')}}" class="img-fluid" alt="Responsive image"></a>
      </div>
    </div>
  </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="text-center">Reset Password</h3></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                              <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                            <a class="text-center text-muted" href="{{ route('login') }}">
                                Already Have an Account?
                            </a>
                          </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <section class="footer">
          <p class="text-center">Developed By <a href="http://webstitching.com" target="_blank">Web Stitching</a>&copy; {{date('Y')}} </p>
        </section>
      </div>
    </div>
</div>
@endsection
