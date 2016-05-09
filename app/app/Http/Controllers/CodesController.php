<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Codes;

class CodesController extends Controller
{

    public function index()
    {
        return view('begin');
    }

    public function workCode(Request $request, $search = '')
    {
        $articles = Codes::find(1)
                    ->articles()
                    ->where('code_id', "=", 1)
                    ->where(function($query) use ($search){
                        return $query
                            ->where('number', 'LIKE', '%' . $search . '%')
                            ->orWhere('name', 'LIKE', '%' . $search . '%')
                            ->orWhere('description1', 'LIKE', '%' . $search . '%')
                            ->orWhere('description2', 'LIKE', '%' . $search . '%')
                            ->orWhere('description3', 'LIKE', '%' . $search . '%')
                            ->orWhere('description4', 'LIKE', '%' . $search . '%')
                            ->orWhere('description5', 'LIKE', '%' . $search . '%')
                            ->orWhere('description6', 'LIKE', '%' . $search . '%')
                            ->orWhere('description7', 'LIKE', '%' . $search . '%')
                            ->orWhere('description8', 'LIKE', '%' . $search . '%')
                            ->orWhere('description9', 'LIKE', '%' . $search . '%')
                            ->orWhere('description10', 'LIKE', '%' . $search . '%');
                    })->get();

        if ($request->ajax()) {
            
            return response()->json([
                'data' => $articles->toArray()
            ]);
        }
    }

    public function commercialCode(Request $request, $search = '')
    {
        $articles = Codes::find(2)
                    ->articles()
                    ->where('code_id', "=", 2)
                    ->where(function($query) use ($search){
                        return $query
                            ->where('number', 'LIKE', '%' . $search . '%')
                            ->orWhere('name', 'LIKE', '%' . $search . '%')
                            ->orWhere('description1', 'LIKE', '%' . $search . '%')
                            ->orWhere('description2', 'LIKE', '%' . $search . '%')
                            ->orWhere('description3', 'LIKE', '%' . $search . '%')
                            ->orWhere('description4', 'LIKE', '%' . $search . '%')
                            ->orWhere('description5', 'LIKE', '%' . $search . '%')
                            ->orWhere('description6', 'LIKE', '%' . $search . '%')
                            ->orWhere('description7', 'LIKE', '%' . $search . '%')
                            ->orWhere('description8', 'LIKE', '%' . $search . '%')
                            ->orWhere('description9', 'LIKE', '%' . $search . '%')
                            ->orWhere('description10', 'LIKE', '%' . $search . '%');
                    })->get();

        if ($request->ajax()) {
            return response()->json([
                'data' => $articles->toArray()
            ]);
        }
    }


}
