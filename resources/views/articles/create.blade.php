@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulna/0.7.5/css/bulma.css">
    @endsection
@section('content')

    <div id ="wrapper">

        <div id="page" class="container">

            <h1>New Article</h1>

                <form method="POST" action="{{route('articleForm')}}">

                    {{ csrf_field() }}

                    <div class="field">

                        <label class="label" for="title">Title</label>

                        <div class="control">

                            <input class="input" type="text" name="title" id="title">
                            @if ($errors->has('title'))
                            <p class="help is-danger">{{$errors->first('title')}}</p>
                                @endif
                        </div>

                    </div>

                    <div class="field">

                        <label class="label" for="excerpt">Excerpt</label>

                        <div class="control">

                            <input class="input" type="text" name="excerpt" id="excerpt">

                        </div>

                    </div>

                    <div class="field">

                        <label class="label" for="body">Body</label>

                        <div class="control">

                            <input class="input" type="text" name="body" id="body">

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