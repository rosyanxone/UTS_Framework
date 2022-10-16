<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

		$articles = DB::table('articles')->orderBy('waktu', 'desc')->paginate(8);

        return view('home', [
            'posts' => Article::all()->keyBy('id'),
            'articles' => $articles
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'kategori' => 'required',
            'waktu' => 'required',
        ]);
        $request['slug'] = str($request->judul)->slug();

        Article::create($request->all());
        
        return redirect()->route('articles.index')
            ->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article 
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article) {
        return view('article', [
            "post" => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article 
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article) {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'kategori' => 'required',
            'waktu' => 'required',
        ]);
        $request['slug'] = str($request->judul)->slug();

        $article->update($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Artikel berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $post = Article::find($article->id);
        $post->delete();

        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Artikel berhasil dihapus!');
    }
}
