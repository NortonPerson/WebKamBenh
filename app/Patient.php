<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['history','id'];

    public function PatientRecord(){
        return $this->hasMany(PatientRecord::class);
    }

    public function PatientRegister(){
        return $this->hasMany(PatientRegister::class);
    }

    public function User(){
        return $this->belongsTo(User::class,'id','id');
    }
}
