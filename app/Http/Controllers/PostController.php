<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class PostController extends Controller
{
    public function index($slug)
    {
        $post = Post::query()->where('slug', $slug)->first();
        if (!$post) {
            abort(404);
        }
        return view('layouts/post', ['post' => $post]);
    }

    // Вывод главной страницы, включенной в layout
    public function view()
    {
return view('welcome');
    }

    // Вывод страницы about, включенной в layout, а так же вывод элементов из БД
    public function about()
    {
        return view('about' , [
        'articles' => Article::query()->take(3)->first()->get()
        ]);
    }
    public function article($id){
        $article = Article::query()->find('id');
        return [
            'article' => $article
        ];
    }
}