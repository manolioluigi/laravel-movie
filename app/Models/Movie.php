<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Genre;
class movie extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'original_title', 'nationality', 'release_date', 'vote', 'cast', 'cover_path'];

    public static function generateSlug($title){
        return Str::slug($title, '-');
    } 

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
