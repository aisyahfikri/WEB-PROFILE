<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blank extends Model
{
    use HasFactory;
    protected $table = "blank";
    public $timestamps = false;
    protected $fillable = [
        'Id_sekolah',
        'sekolah',
        'tahun',
    ];


}
