<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table = 'my_post';
    // protected $timestamps = false;
    // public $primaryKey = 'post_id';
   
    protected $fillable = ['title','user_id','status','description'];
}
