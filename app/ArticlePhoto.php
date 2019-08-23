<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticlePhoto extends Model
{
    protected $fillable = [
        'article_id', 'love', 'name', 'order'
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\Article');
    }
}
