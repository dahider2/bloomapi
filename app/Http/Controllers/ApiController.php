<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    public function postArticle(Request $request){

        if ($request->ref_article && $request->filled('merchant')) {
            // return $request->merchant;
            $article = Article::where('code',$request->ref_article)
                                ->whereHas('merchant', function(Builder $query) use($request){
                                    $query->where('code_m',$request->merchant);
                                })->firstOrFail();
            $article->load('merchant','merchant.delivery_fees','other_option_categories','other_option_categories.other_options');
        return new ArticleResource($article);
        }else{
            return "no";
        }

    }
}
