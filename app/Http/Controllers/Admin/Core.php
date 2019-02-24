<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Article;

class Core extends Controller
{
    // list materials

	public function getArticles() {
	
		$articles = Article::all();
		foreach ($articles as $article) {
			echo $article->name."<br>";
			echo $article->img."<br>";
		}
		dump($articles);
	}
}


