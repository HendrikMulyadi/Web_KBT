<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
   public function mobil()
{

    return $this->belongsTo(Mobil::class, 'mobil_id');
}
// app/Models/Form.php
protected $fillable = [
    'name',
    'phone',
    'alamat',
    'mobil_id',
    'waktu',
    'harga',
    'lama_sewa',
    'total',
    'pesan',
];

}
