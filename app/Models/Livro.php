<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo','ano', 'isbn', 'idioma', 'capa'];

    public function midia(){
        return $this->hasOne(Midia::class);
    }
}
