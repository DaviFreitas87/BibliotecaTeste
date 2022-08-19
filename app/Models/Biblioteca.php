<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
   protected $fillable = ['titulo', 'isbn', 'nome_autor', 'ano'];
}
