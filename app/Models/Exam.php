<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',


    ];
    public function question()
    {
        return $this->hasMany(Question::class);
    }
    public function result()
    {
        return $this->hasMany(Result::class);
    }
}
