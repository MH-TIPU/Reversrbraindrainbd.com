<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    use HasFactory;


    protected $fillable = [
        'image',
        'name',
        'education',
        'organization',
        'designation',
        'experience',
        'gender',
        'country',

        'motivation',
        'achievements',
        'leadership_Experience',

        'fb_url',
        'linkdin_url',

        'Area_of_experties',
        'organization2',
        'working_interest',
        'job',
        'fb_post',


    ];
}


