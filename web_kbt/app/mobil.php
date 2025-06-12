<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;

    protected $fillable = ['nama','nopolisi','merek','jenis','Kapasitas','harga','foto'];
    protected $casts = [
    'harga' => 'float',
];
public function forms()
{
    return $this->hasMany(Form::class, 'mobil_id');
}

}
