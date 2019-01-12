<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagnosisPhoto extends Model
{
    protected $table='DiagnosisPhoto';
    protected $primarykey='id';
    protected $fillable=[
        'id', 'diagnosis_pic', 'diagnosis_ID','discription'
    ];
}
