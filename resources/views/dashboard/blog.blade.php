@extends('dashboard/dashboard')
@section('panel_container')
    @foreach ($all_post as $post)
        <div class = "card grey lighten-4">
            <div class = "card-content">
                <span class = "card-title"><h5>{{$post->title}}</h5></span>
                <strong>
                    {{$post->create_at}}
                </string>
                <div class="right  grey-text text-darken-3">
                    <a style="padding:5px" href="{{route('postEdit',$post->id)}}" class="hoverable brown lighten-4">
                        <strong>EDIT</strong>
                    </a>
                    <a style="margin-left: 5px; padding: 5px" href="{{route('postDelete',$post->id)}}" class="hoverable brown lighten-4">
                        <strong class="red-text text-lighten-1">DELETE</strong>
                    </a>
                </div>
                <br>
            </div>
        </div>
    @endforeach

    <div class="right">
      <a class="hoverable btn-floating btn-medium red" href="{{ route('postAdd') }}">
        <i class="medium mdi-editor-mode-edit">+</i>
      </a>
  </div>
    {{-- </div> --}}
    <script type="text/javascript">
    $(document).ready(function(){
        if ({{Session::get('status')}} == 1) {
            M.toast({html:"Post update successfuly!",classes:'rounded'});
        }

        if ({{Session::get('deleteStatus')}} == 1) {
            M.toast({html:"Post deleted successfuly!",classes:'rounded'});
        }
    });
    </script>
@endsection
