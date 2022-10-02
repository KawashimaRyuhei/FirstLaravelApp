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
        // SQL側でデータをソート（しているので一般的には早い）
        $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        // PHP側で取得したデータをソート（しているので遅いことが多い）
        // $tweets = Tweet::all()->sortByDesc('created_at');
        return view('tweet.index')
        ->with('tweets', $tweets);
    }
}
