<head>
    <title>Post details</title>
</head>
{{--
    Show post details in this page
 --}}
@include('masterPage')
<div class="container">
    <div class="row">
        <div class = "col s12 m10 offset-m1">
            <span class = "card-title"><h3>{{$post->title}}</h3></span>
            <div class="divider"></div>
            <p>{{$post->article}}</p>
            <br>
            <div class="divider"></div>
            <strong> {{$post->create_at}} </string>
                <br>
            </div>
        </div>
    </div>
@include('footer')
