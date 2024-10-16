<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "kelas";
    protected $primaryKey = "id";
    protected $typeKey = "int";
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable =  [
        "id",
        "name",
        "jumlah"
    ];

    public function dosen() {
        return $this->hasOne(Dosen::class, 'kelas_id');
    }
}
