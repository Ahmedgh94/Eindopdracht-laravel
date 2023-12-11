<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'player'; // Specify the correct table name
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'nation', 'rank', 'point'];
    
    use HasFactory;
}
