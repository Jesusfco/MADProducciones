<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use Image;
use Storage;
use File;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'patern', 'matern', 'user_type', 'gender', 'phone', 'img', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles(){
        return $this->hasMany('App\Article');
    }

    public function fullname() {
        return "$this->name $this->patern $this->matern";
    }

    public function userTypeView() {
        if($this->user_type == 1) return 'Basico';
        // else if($this->user_type == 2) return 'Médico';
        // else if($this->user_type == 3) return 'Ing.Biomédico';
        else return 'Administrador';
    }

    public function genderView() {
        if($this->gender == 1) return 'Masculino';         
        return 'Femenino';                
    }

    public function scopeFormatSujest($query) {
        return $query->select(DB::raw("CONCAT(`name`, ' ', IFNULL(`patern`, ''), ' ', IFNULL(`matern`, '')) AS value"), DB::raw("id AS data"));
    }

    public function scopeWhereName($query, $name) {
        return $query->where(DB::raw("CONCAT(`name`, ' ', IFNULL(`patern`, ''), ' ', IFNULL(`matern`, ''))"), 'LIKE', '%' . $name . '%');
    }

    public function getMiniPhoto(){
        if($this->img == NULL) return 'https://cdn6.aptoide.com/imgs/a/f/1/af18be0efe38ddc48167d752001cbcc3_icon.png?w=120';
        
        return url("img/app/users/mini_$this->img");
    }

    public function getPhoto(){
        if($this->img == NULL) return 'https://cdn6.aptoide.com/imgs/a/f/1/af18be0efe38ddc48167d752001cbcc3_icon.png?w=120';
        
        return url("img/app/users/$this->img");
    }

    static public function validateUniqueEmail($re, $user) {
        
        $u = User::where('email', 'LIKE', $re->email)->first();

        if($u != NULL) {
            if($u->id == $user->id) return true;
            return false;
        }

        return true;

    }

    public function uploadPhotoPerfil($img) {
        $this->img = "$this->id.". $img->getClientOriginalExtension();

        $this->save();
        Image::make($img)
            ->fit(300,300)
            ->save("img/app/users/$this->img");
        
        Image::make($img)
            ->fit(75,75)
            ->save("img/app/users/mini_$this->img");
        
    }

    public function delete() {
        if($this->img != NULL) {
            Storage::delete("img/app/users/mini_$this->img");
            Storage::delete("img/app/users/$this->img");
        }        
        parent::delete();
    }
}
