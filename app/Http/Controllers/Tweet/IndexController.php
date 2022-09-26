<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tweets = Tweet::all();
        dd($tweets);
        return view('tweet.index')
        ->with('name', 'laravel')
        ->with('version', '8');
    }
}
