<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ArticleController extends Controller
{

    public function show($id)

    {
//show the one position
$article = Article::query()->find($id);

return view('articles.show', ['article' => $article]);

    }

public function index()
{
    //the list of all position
    $articleSections = Article::query()->get();

    return view('articles.article' , ['articleSections'=>$articleSections]);
}
public function create(){
        //show the view to create a new resource
    return view('articles.create');

}
public function store(){
        //persist the new resource

    request()->validate([
        'title'=>'required',
        'excerpt'=>'required',
        'body'=>'required',
    ]);



    $article = new Article();
    $article->title = request('title');
    $article->excerpt = request('excerpt');
    $article->body = request('body');
    $article ->save();
    return redirect('/articles');
}
public function edit($id){
        //show the view an existing resources
    //find the article associated with id
    $article = Article::query()->find($id);

return view('articles.edit', compact('article'));
}
public function update($id){
        //persist the edited resource
    $article = Article::query()->find($id);
    $article->title = request('title');
    $article->excerpt = request('excerpt');
    $article->body = request('body');
    $article ->save();
    return redirect('/articles/' . $article->id);
}
public function destroy(){
        //deleted the resource
}
}
