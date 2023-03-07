<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;
use Illuminate\Support\Str;
class Actor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public static function generateSlug($title){
        return Str::slug($title, '-');
    } 

    public function movies(){
        return $this->belongsToMany(Movie::class);
    }
}
