<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function follow(User $user){
        $follower = auth()->user();

        $follower->followings()->attach($user->id);

        return redirect()->route('users.show', $user->id)->with('success', 'You are now following '.$user->name);
    }

    public function unfollow(User $user){
        $follower = auth()->user();

        $follower->followings()->detach($user->id);

        return redirect()->route('users.show', $user->id)->with('success', 'You are no longer following '.$user->name);
    }
}
