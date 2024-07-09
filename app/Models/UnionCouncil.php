<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnionCouncil extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'tehsil_id',
        'province_id'
    ];
    public function houses()
    {
        return $this->hasMany(House::class);
    }

    public function tehsil()
    {
        // if($this->belongsTo(Tehsil::class)) {
            return $this->belongsTo(Tehsil::class);
        // }
        // return $this->belongsTo(Province::class);
    }
    public function province()
    {
        // if($this->belongsTo(Tehsil::class)) {
            return $this->belongsTo(Province::class);
        // }
        // return $this->belongsTo(Province::class);
    }
    public function getParentName()
    {
        // dd((bool) $this->tehsil()->pluck('name')->all());
        if($this->tehsil()->pluck('name')->all()) {
            return $this->tehsil()->pluck('name')->all()[0];
        }
        return $this->province()->pluck('name')->all()[0];
    }
    public function getParentId()
    {
        if($this->tehsil()->pluck('id')->all()) {
            return $this->tehsil()->pluck('id')->all()[0];
        }
        return $this->province()->pluck('id')->all()[0];
    }
}
