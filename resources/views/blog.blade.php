@extends('dashboard')

@section('panel_container')
        @foreach ($all_post as $post)
                <div class = "card grey lighten-4">
                    <div class = "card-content">
                        <span class = "card-title"><h5>{{$post->title}}</h5></span>
                        <strong>
                            {{$post->create_at}}
                        </string>
                        <div class="right  grey-text text-darken-3">
                            <a style="padding:5px" class="hoverable brown lighten-4" href = "postDetails/{{$post->id}}">
                                <strong>EDIT</strong>
                            </a>
                            <a style="margin-left: 5px; padding: 5px" class="hoverable brown lighten-4" href = "postDetails/{{$post->id}}">
                                <strong class="red-text text-lighten-1">DELETE</strong>
                            </a>

                        </div>

                        <br>
                    </div>
                </div>
        @endforeach
@endsection
