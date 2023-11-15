<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
//    INDEX
public function index(){
    $articles = Article::all();
    return view('index', compact('articles'));
}
//  SHOW
public function show(Article $article){
    return view("detail", compact('article'));  
}



   
   
   
//    CREATE
    public function create(){
        return view('article.create');        
    }
// STORE
    public function store(Request $request){

        $file = $request->file('img');

    Article::create([

    'title'=> $request->title,
    'description'=> $request->description,
    'price'=> $request->price,
    'img'=> $request->file('img') ? $file->store('public/images') : 'public/images/default marketplace.png'

    ]);

    return redirect()->route('article.create')->with('success','Il gioco è stato aggiunto correttamente.');

}


// EDIT
public function edit(Article $article){
return view('article.edit', compact('article'));
}


// UPDATE

public function update(ArticleStoreRequest $request, Article $article){

    $file= $request->file('img');

    $article->update([
        'title'=> $request->title,
    'description'=> $request->description,
    'price'=> $request->price,
    'img'=> $file ? $file->store('public/images') : $article->img

    ]);

    return redirect()->route('article.edit', compact('article'))->with('success','Il gioco è stato modificato correttamente.');
}



// DELETE
public function destroy(Article $article){
$article->delete();
return redirect()->route('index')->with('success', 'Il gioco è stato eliminato correttamente');
}
}

