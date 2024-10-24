<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['name', 'email', 'comment', 'is_hidden', 'is_deleted', 'is_pending'];
}
