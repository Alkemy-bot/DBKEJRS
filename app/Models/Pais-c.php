<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais-c extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'pais';
    public $timestamps = false;
}
