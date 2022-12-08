<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'content',
    ];
    
    public function index(){
        $post = Post::latest()->paginate(5);
        
        return view('posts.index', compact('posts'));
    }
}
