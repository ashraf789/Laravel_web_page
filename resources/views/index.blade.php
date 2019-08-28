
<head>
    <title>Main page</title>
</head>
@extends('masterPage')
@section('content')
    <div class="container">
        <div class="row">
        </br>
        @foreach ($all_post as $post)
            <div class = "col s12 m10 offset-m1">
                <div class = "card grey lighten-4 hoverable">
                    <div class = "card-content">
                        <span class = "card-title"><h5>{{$post->title}}</h5></span>
                        <p>{{ str_limit($post->article,$limit=250, $end = '....')}}</p>

                        <br>
                        <strong>
                            {{$post->create_at}}
                        </string>
                        <a href = "postDetails/{{$post->id}}">
                            <button class = "btn right brown  lighten-4 grey-text text-darken-3">read more</button>
                        </a>
                        <br>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
