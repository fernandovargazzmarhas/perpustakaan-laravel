<?php

use Illuminate\Database\Eloquent\Model;

class Duraiko extends Model
{
    protected $table = 'Buku';
    protected $fillable = [
        'judul',
        'pengarang',
        'jml_halaman'
    ];
}
