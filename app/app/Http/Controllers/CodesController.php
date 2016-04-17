<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class CodesController extends Controller
{

    public function index()
    {
        return view('begin');
    }

    public function workCode(Request $request, $search = '')
    {
        $articles = Article::all();

        if ($request->ajax()) {
            return response()->json([
                'data' => $articles->toArray()
            ]);
        }
    }

    public function commercialCode(Request $request, $search = '')
    {
        return view('begin');
    }


}
