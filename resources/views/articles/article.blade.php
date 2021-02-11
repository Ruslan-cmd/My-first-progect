
@extends('layout')
@section('content1')

    <div id="wrapper">
        @foreach($articleSections as $articleSection)
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                   <a href="/articles/{{$articleSection->id}}"> <h2>{{$articleSection->title}}</h2> </a>
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>

                </div>
                {{$articleSection->body}}
            </div>
        </div>
            @endforeach
</div>
@endsection