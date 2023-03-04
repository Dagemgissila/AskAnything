<?php

namespace App\Models;

use Termwind\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    protected $fillable=[
        'answer'
    ];



    public function answeruser(){
        return $this->belongsTo(Profile::class,'profile_id');
    }


}
