<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $ideas = Idea::when(request()->has('search'), function($query){
            $query->search(request()->get('search'));
        })->orderBy('created_at', 'DESC')->paginate(3);

        // $idea->save();
        // dump(Idea::all());

        return view('home', compact('ideas'));
    }
}
