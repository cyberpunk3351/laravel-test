<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index(Request $request) {
        $articles = Article::all();
        return view('welcome', compact('articles'));
    }

    public function create() {

        return view('create');
    }

    public function store(Request $request) {

        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->healthy = rand(0,1);
        $article->time = rand(1,10);
        $article->difficulty_id = rand(1,3);
        $article->user_id = rand(1,11);
        $article->save();
        return redirect()->route('article.index');
    }

    public function show($id) {

        $articles = Article::find($id);
        return view('show', compact('articles'));
    }

    public function edit($id) {

        $articles = Article::find($id);
        return view('edit', compact('articles'));
    }

    public function delete($id) {

        $articles = Article::find($id);
        $articles->delete();
        return redirect()->route('article.index');

    }

    public function update(Request $request, $id) {

        $article = Article::find($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->update();
        $id = $article->id;
        return redirect()->route('article.index');
    }


}
