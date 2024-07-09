<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'division_id'
    ];
    public function tehsils()
    {
        return $this->hasMany(Tehsil::class);
    }
    private function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function getDivisionName()
    {
        return $this->division()->pluck('name')->all()[0];
    }
    public function getDivisionId()
    {
        return $this->division()->pluck('id')->all()[0];
    }
}
