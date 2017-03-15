<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    /**
     * @var Article
     */
    protected $article;

    /**
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function getIndex()
    {
        $articles = $this->article->all();
 
        return view('articles.index')->with(compact('articles'));
    }

    /*
     * 詳細表示
     * 
     */
    public function getShow($id)
    {
        $article = $this->article->find($id);
        
        return view('articles.show', compact('article'));
    }

    /*
     * 記事の投稿
     * 
     */
    public function getCreate()
    {
        return view('articles.create');
    }

    public function postCreate(Request $request)
    {
        $data = $request->all();
        $this->article->fill($data);
        $this->article->save();
        
        return redirect()->to('articles/index');
        
    }

    public function getEdit()
    {

    }

    public function postEdit()
    {

    }

    public function postDelete()
    {

    }

}