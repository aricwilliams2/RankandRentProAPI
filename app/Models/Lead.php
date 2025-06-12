<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'phone', 'company', 'status', 'notes', 
        'reviews', 'website', 'contacted'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'reviews' => 'integer',
        'contacted' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}