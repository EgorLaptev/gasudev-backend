<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $table = 'team';

    use HasFactory;

    protected $fillable = [
        'fullname',
        'post',
        'description',
        'image'
    ];

}
