<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'province_id'
    ];
    public function districts()
    {
        return $this->hasMany(District::class);
    }

    private function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function getProvinceName()
    {
        return $this->province()->pluck('name')->all()[0];
    }
    public function getProvinceId()
    {
        return $this->province()->pluck('id')->all()[0];
    }
}
