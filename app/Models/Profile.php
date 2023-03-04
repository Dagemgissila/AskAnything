<?php

namespace App\Models;

use App\Models\User;
use App\Models\Profile;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'fullname',
        'phonenumber',
        'location'
    ];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function quest(){
        return $this->hasMany(Question::class,'user_id');
    }

    public function useranswer(){
        return $this->hasMany(Answer::Class,'profile_id');
    }
}
