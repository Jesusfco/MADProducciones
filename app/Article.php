<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
        'user_id', 'article_type_id', 'name', 'resume', 'img', 'date', 'text', 'youtube'
    ];

    public function type(){
        return $this->belongsTo('App\ArticleType');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photos(){
        return $this->hasMany('App\ArticlePhoto');
    }

    public function scopeFind2($query, $id) {
        return $query->where('id', $id)->first();
    }

    public function scopeSearch($query, $name) 
    {        
        return $query->where('name', 'LIKE', "%$name%");
    }

    public function delete() {
        $this->photos()->delete();        
        parent::delete();
    }

    public function getPhoto(){                
        return url("img/articles/$this->id/$this->img");
    }

}
