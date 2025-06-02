<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";

    public function category() {
        return $this->belongsTo(Category::class);
    }

    /*     protected function title(): Attribute
    {
        return Attribute::make(
        //mutador
            set: function ($value) {

                return strtolower($value);
            },
        //accesor
            get: function($value){
            return ucfirst($value);
            }
        );
    } */

    /* protected function casts(): array
    {
        return [
            "published_at" => 'datetime'
        ];
    } */
}
