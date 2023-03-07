<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Movie;

class Genre extends Model
{
    use HasFactory;
    protected $fillable = ['genre', 'slug'];

    public static function generateSlug($title){
        return Str::slug($title, '-');
    } 

    public function movies(){
        return $this->hasMany(Movie::class);
    }
}
