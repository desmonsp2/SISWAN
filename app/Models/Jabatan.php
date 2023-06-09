<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'positions';

    protected $fillable = [
        'position_name',
        'description',
        'unit_id'
    ];

    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id');
    }


}
