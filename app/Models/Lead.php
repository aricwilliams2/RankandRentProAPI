<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

   protected $fillable = [
    'id',
    'name',
    'city', 
    'reviews',
    'phone',
    'website',
    'contacted',
    'follow_up_at',
    'notes',
];


}