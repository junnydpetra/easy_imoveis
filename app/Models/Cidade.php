<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function imoveis(){

        $this->hasMany(Imovel::class);

       }

    public function cidade(){

        return $this->belongsTo(Cidade::class);

    }
}
