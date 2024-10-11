<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CreateCommentRequest $request, Idea $idea){
        $validation = $request->validated();
        $validation['user_id'] = auth()->id();
        $validation['idea_id'] = $idea->id;

        Comment::create($validation);

        return redirect()->back()->with('success', 'Comment posted Successfully!');
    }
}
