<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\ArticleResource;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    /**
     * fetch and send article data
     *
     *
     * @param article code in $request
     * @return json
     * @throws conditon
     **/

    public function postArticle(Request $request){

        $status = 200;
        $error = false;



            try{
                if ($request->ref_article) {
                    // return $request->merchant;
                    $article = Article::where('code',$request->ref_article)->firstOrFail();
                    $article->load('merchant','merchant.delivery_fees','other_option_categories','other_option_categories.other_options');
                    return new ArticleResource($status,$error,$article);
                }
            }catch (ModelNotFoundException $ex){

                $res = [

                    "code" => 404,
                    "error" => true,
                    "content" => "null"

                ];
                return response()->json($res);

            }catch (Exception $ex){

                $res = [

                    "code" => 400,
                    "error" => true,
                    "content" => "null"

                ];

                return response()->json($res);

            }




    }
}
