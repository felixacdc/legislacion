<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Redirect;
use App\Article;

class ArticlesController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showComment(Request $request, $id)
    {
        $comment = Article::find($id)->comment;

        if ( $request->ajax() ) {
            return response()->json([
                'data' => $comment->toArray()
            ]);
        }

        return Redirect::to('/');
    }

}
