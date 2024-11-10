<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Response;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Response as FacadesResponse;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'mobnumber',
        'collegecode',
        'collegename',
        'regnumber',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function response(){
        return $this->hasMany(Response::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    public function getCustomIdAttribute(){
        return 'prayuddha'.str_pad($this->id,3,'0',STR_PAD_LEFT);
    }
    public function question() {
        return $this->belongsTo(RoundTwoQuestion::class, 'round_two_questions_id');
    }


    public function roundTwoAnswers()
{
    return $this->hasMany(RoundTwoAnswer::class);
}

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
