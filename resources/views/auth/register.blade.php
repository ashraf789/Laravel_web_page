@extends('masterPage')
<head>
    <style media="screen">

    </style>
</head>
@section('content')
    <center>
        <div class="container">
            <div id="register-page" class="row">
                <div class="col s12 m10 l6 offset-m1 offset-l3  z-depth-3 card-panel">
                    <div class="section">
                    </div>
                    <form class="register-form" method="post" action="{{url('/signUp')}}">
                        @csrf <!-- {{ csrf_field() }} -->

                        <div class="form-group row">
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="mdi-social-person-outline prefix"></i>
                                    <input id="name" name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        <label for="user_name" class="center-align">Username</label>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="mdi-communication-email prefix"></i>
                                        <input id="user_email" type="email" class="validate @error('user_email') is-invalid @enderror" name="email"  required autocomplete="email">
                                            <label for="user_email" class="center-align">Email</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row margin">
                                        <div class="input-field col s12">
                                            <i class="mdi-action-lock-outline prefix"></i>
                                            <input id="user_password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                <label for="user_password">Password</label>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field col s12">
                                                <i class="mdi-action-lock-outline prefix"></i>
                                                <input id="confirm_pass" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                <label for="confirm_pass">Re-type password</label>
                                                {{-- retrive all error --}}

                                                {{--
                                                @if ($errors->any())

                                                @foreach ($errors->all() as $value)
                                                <strong>{{ $value }}</strong>
                                            @endforeach
                                        @endif
                                        --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button type='submit' name='btn_sign_up' class='col s12 btn btn-large waves-effect indigo'>Register</button>
                                    </div>
                                    <div class="input-field col s12">
                                        <p class="margin center medium-small sign-up">Already have an account? <a href="{{'login'}}">Login</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </center>
        @endsection
