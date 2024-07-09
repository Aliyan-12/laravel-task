<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tehsil extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'district_id'
    ];
    public function unionCouncils()
    {
        return $this->hasMany(UnionCouncil::class);
    }

    private function district()
    {
        return $this->belongsTo(District::class);
    }
    public function getDistrictName()
    {
        return $this->district()->pluck('name')->all()[0];
    }
    public function getDistrictId()
    {
        return $this->district()->pluck('id')->all()[0];
    }
}
