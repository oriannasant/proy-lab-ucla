<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
    use HasFactory;
    protected $fillable = [

        'id_program',
        'descrip_pensum',
        'date',
        'id_departament',
        'pdf'
        
    ];
}
