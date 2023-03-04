<?php

namespace App\Models;

use App\Models\User;
use App\Models\Answer;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'question',
        'category'
    ];

    public function scopeFilter($query ,array $filtes){


        if($filtes['category'] ?? false){
           $query->where('category','like','%'.request('category').'%');
        }
}

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }


    public function myprofile(){
        return $this->belongsTo(Profile::class,'user_id');
    }






}
