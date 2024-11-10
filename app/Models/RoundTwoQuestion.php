<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoundTwoQuestion extends Model
{
    protected $table = 'round_two_questions';
    protected $fillable = [
        'round_two_questions',
    ];

    public function roundTwoAnswers()
{
    return $this->hasMany(RoundTwoAnswer::class);
}

}
