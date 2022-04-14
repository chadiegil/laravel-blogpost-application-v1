<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['title','content','category_id','featured'];

    protected $dates = ['deleted_at'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

