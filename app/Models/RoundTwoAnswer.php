<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoundTwoAnswer extends Model
{

    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = [
        'user_id',
        'round_two_questions_id',
        'answer_text',
    ];

    /**
     * Relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship with the RoundTwoQuestion model.
     */
    public function roundTwoQuestion()
    {
        return $this->belongsTo(RoundTwoQuestion::class);
    }

    public function question() {
        return $this->belongsTo(RoundTwoQuestion::class, 'round_two_questions_id');
    }

}
