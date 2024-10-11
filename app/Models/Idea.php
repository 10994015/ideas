<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
    ];
    protected $with = ['user:id,name,image', 'comments.user:id,name,image'];

    protected $withCount = ['likes'];
    public function comments(){
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }
    public function user(){
        return $this->belongsTo(User::class)->latest();
    }
    public function likes(){
        return $this->belongsToMany(User::class, 'idea_like')->withTimestamps();
    }

    public function scopeSearch($query, $search=''){
        return $query->where('content', 'like', '%' . $search . '%');
    }
}
