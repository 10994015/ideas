<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $follweingIDs = auth()->user()->followings()->pluck('id');


        $ideas = Idea::whereIn('user_id', $follweingIDs)->
        when(request('search'), function($query){
            $query->search(request('search'));
        })->orderBy('created_at', 'DESC')->paginate(3);

        return view('home', compact(
            'ideas'
        ));
    }
}
