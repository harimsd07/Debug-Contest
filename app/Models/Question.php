<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Question extends Model
{
    protected $fillable = [
        'question_text',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_answer',
    ];
    public function response(){
        return $this->hasMany(Response::class);
    }

    public function answers()
{
    return $this->hasMany(Answer::class);
}

}
