<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    protected $fillable =[
        'question_id',
        'user_id',
        'submitted_answer',
    ];
    public function question()
{
    return $this->belongsTo(Question::class);
}

public function user()
{
    return $this->belongsTo(User::class); // Assuming each contestant is a user
}


}
