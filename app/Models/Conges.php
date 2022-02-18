<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conges extends Model
{
    use HasFactory;
    protected $table ="holidays";
    protected $fillable = [
        'user_ID',
        'start',
        'end',
        'type',
        'certificate',
        'status',
    ];

}
