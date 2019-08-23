<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    protected $fillable = [
        'name', 'description', 'img'
    ];

    public function articles() {
        return $this->hasMany('App\Article');
    }

    public function scopeSearch($query, $name) {        
        return $query->where('name', 'LIKE', "%$name%");
    }

    public function getImgLink(){
        if($this->img == NULL) {
            return "https://image.redbull.com/rbcom/052/2018-04-18/3defc76b-795c-4cfa-a005-c2fabd43f6fb/0012/0/130/0/2008/2816/1500/1/adventure-travel-cliff.jpg";
        }

        return url("img/articles/$this->img");
    }
}
