<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        return Article::create($request->all());
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return $article;
    }

    public function delete(Article $article) 
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
