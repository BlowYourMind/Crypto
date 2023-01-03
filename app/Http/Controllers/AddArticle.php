<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\CryptoAssets;
use Illuminate\Http\Request;

class AddArticle extends Articles
{
    public function insert()
    {
        $articles = \request()->all();
        $article = new Articles([
            'title' => $articles['article'],
            'description' => $articles['description']
        ]);
        $article->save();
        return redirect('/');

    }
}
