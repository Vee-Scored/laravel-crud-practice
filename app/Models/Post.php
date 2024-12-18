<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;


    public function category () : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function author() : BelongsTo {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public $fillable = ['title','content','user_id','category_id','created_at','updated_at'];
}
