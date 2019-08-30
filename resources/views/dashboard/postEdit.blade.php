@extends('dashboard/dashboard')
@section('panel_container')
    <div class = "card grey lighten-4">
        <div class = "card-content">
            <form style="padding:20px" action="{{route('postUpdate',$post->id)}}" method="post">
                @csrf <!-- {{ csrf_field() }} -->
                <div class="row">
                    <h5>Title</h5>
                    <div class='input-field' id="asdfasdf">
                        <input type="text" name="title" value="{{$post->title}}" />
                    </div>
                    <h5>Article</h5>
                    <div class="input-field">
                        <textarea name="article" type="textarea" style="min-height: 250px;" class="materialize-textarea">
                            {{$post->article}}
                        </textarea>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-field center">
                            <button type='submit' name='save' style="min-width: 100px;" class='btn btn-medium waves-effect indigo'>Save</button>
                            <a href = "{{route('dashboard')}}" style="margin-left:20px; min-width: 100px" class='btn btn-medium waves-effect indigo'>Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
