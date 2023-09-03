<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_detalis extends Model
{
    use HasFactory;
    protected $table="users_detalis";

    protected $fillable = [
        'uid',
        'spid',
        'photo'
    ];
    public function specialties(){
        return $this->hasMany('App\Models\specialties','id','spid');
    }

}
