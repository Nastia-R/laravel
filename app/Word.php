<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['word', 'description', 'translate'];

    /**
     * Get the user that owns the word.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
