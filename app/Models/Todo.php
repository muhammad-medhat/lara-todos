<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

/**
 * The attributes that aren't mass assignable.
 *
 * @var array
 */
// protected $guarded = [];
protected $fillable = ['title', 'description'];}
