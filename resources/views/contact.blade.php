@extends('masterPage')
@section('content')
    <div class="row">
        <div class="container col s8 m6 l6 offset-s2 offset-m3 offset-l3">
            <br/>
            <h5 style="text-align: center; font-family: Bernard MT Condensed; font-size: 30px; margin-top: 15px;">Contact Us</h5>

            @if (Session::get('message'))
                <br>
                <br>
                <span class="invalid-feedback" role="alert">
                    <h5 style="color:green">{{ Session::get('message') }}</h5>
                </span>
                <br>
            @endif
            <form method="post" action="{{route('contact')}}">
                @csrf <!-- {{ csrf_field() }} -->
                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Name</label>
                        <br/>
                        <input type="text" name="name" placeholder="Mr. mark" class="validate" required  />
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="email">Email</label>
                        <br/>
                        <input type="email"  class="validate @error('email') is-invalid @enderror" name="email" placeholder="example@******.com" required autocomplete="email" />
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="message">Message</label><br/>
                        <textarea name="message" required class="materialize-textarea"></textarea>
                    </div>
                </div>
                <center>
                    <button class="waves-effect waves-light btn btn-large">Submit</button>
                </center>
            </form>
        </div>
    </div>
@endsection
