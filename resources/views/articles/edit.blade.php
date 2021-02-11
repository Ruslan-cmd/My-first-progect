@extends('layout');
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulna/0.7.5/css/bulma.css">
@endsection
@section('content')
    <div id ="wrapper">

        <div id="page" class="container">

            <h1>Update article</h1>

            <form method="POST" action="/articles/{{$article->id}}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="field">

                    <label class="label" for="title">Title</label>

                    <div class="control">

                        <input class="input" type="text" name="title" id="title" value="{{$article->title}}">

                    </div>

                </div>

                <div class="field">

                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">

                        <input class="input" type="text" name="excerpt" id="excerpt" value="{{$article->excerpt}}">

                    </div>

                </div>

                <div class="field">

                    <label class="label" for="body">Body</label>

                    <div class="control">

                        <input class="input" type="text" name="body" id="body" value="{{$article->body}}">

                    </div>

                </div>

                <div class="field is-grouped">

                    <div class="control">

                        <button class="button is-link" type="submit">Submit</button>

                    </div>


                </div>
            </form>

        </div>

    </div>

@endsection
