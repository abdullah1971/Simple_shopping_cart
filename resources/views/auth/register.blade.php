@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                            <label for="full_name" class="col-md-4 control-label">Full Name</label>

                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required autofocus>

                                @if ($errors->has('full_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>






                        <div class="form-group{{ $errors->has('date-of-birth') ? ' has-error' : '' }}">
                            <label for="date-of-birth" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="date-of-birth" type="date" class="form-control" name="date-of-birth" value="{{ old('date-of-birth') }}" required>

                                @if ($errors->has('date-of-birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date-of-birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                          <label for="gender1" class="col-md-4 control-label">Gander</label>

                          <div class="col-lg-6">

                            <div class="radio">
                              <label>
                                <input type="radio" name="gender" id="gender1" value="male" checked="" required>
                                Male
                              </label>
                            </div>

                            <div class="radio">
                              <label>
                                <input type="radio" name="gender" id="gender2" value="female">
                                Female
                              </label>
                            </div>

                          </div>

                        </div>

                        <div class="form-group{{ $errors->has('mobile-no') ? ' has-error' : '' }}">
                            <label for="mobile-no" class="col-md-4 control-label">Mobile No.</label>

                            <div class="col-md-6">
                                <input id="mobile-no" type="text" class="form-control" name="mobile-no" value="{{ old('mobile-no') }}" required>

                                @if ($errors->has('mobile-no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile-no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
