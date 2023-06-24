<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hp extends Model
{
protected $tabel='hp';
protected $guarded=[];
protected $fillable=['merk','harga_hp','RAM','Internal','Kamera','Fingerprint','Sistem_Operasi','Type','File'];
}
