<?php namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;

use Carbon\Carbon;
use App\Articles;
use App\Tags;
class ArticleController extends Controller {

    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index() {
        //$article = new Articles();
        $articles = Articles::latest()->published()->get();
        return view('pages.articles', compact('articles'));
    }

    public function show($id) {
        //$article = App\Articles.find($id);
        //$article = new Articles();
        //$one = $article.find($id);
        $article = Articles::find($id);
        return view('pages.show', compact('article'));

    }

    public function create() {
        $tags = Tags::lists('name', 'id');
        return view('pages.create', compact('tags'));
    }

    public function store(ArticleRequest $request) {
//        $input = $request->all();
//        Articles::create($input);
        $article = new Articles($request->all());
        \Auth::user()->articles()->save($article);
        $tagIds = $request->input('tags');
        $article->tags()->attach($tagIds);
        return redirect('articles');
    }

    public function edit($id) {
        $tags = Tags::all();
        $article = Articles::findorFail($id);
        return view('pages.edit', compact('article', 'tags'));
    }

    public function update($id, ArticleRequest $request) {
        $article = Articles::findorFail($id);
        $input = $request->all();
        $article->update($input);
        return redirect('articles');

    }
}


