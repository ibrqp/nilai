<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    use HasFactory;
    protected $fillable = ['id_siswa', 'id_mapel', 'nilai'];
    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa', 'id');
    }
    public function mapel()
    {
        return $this->belongsTo(mapel::class, 'id_mapel', 'id');
    }
}
