<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dudi extends Model
{
    use HasFactory;
<<<<<<< HEAD:app/Models/mapel.php
    protected $fillable = ['nama_mapel', 'id_guru'];

    public function guru(){
       return $this->belongsTo(guru::class, 'id_guru', 'id');
    }

    
=======
    protected $fillable = ['nama', 'alamat'];
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141:app/Models/Dudi.php
}
