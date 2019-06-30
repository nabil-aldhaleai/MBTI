<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        "first_question",
        "second_question",
        "third_question",
        "fourth_question",
        "fifth_question",
        "sixth_question",
        "seventh_question",
        "eighth_question",
        "ninth_question",
        "tenth_question",
        "email"
    ];
}
