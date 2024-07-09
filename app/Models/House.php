<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'uc_id'
    ];

    public function houseMembers()
    {
        return $this->hasMany(HouseMembers::class);
    }

    public function unionCouncil()
    {
        return $this->belongsTo(UnionCouncil::class, 'uc_id');
    }

    public function getUCCode()
    {
        // dd($this->unionCouncil(),123);
        if(!empty($this->unionCouncil()->pluck('code')->all())) {
            return $this->unionCouncil()->pluck('code')->all()[0];
        }
    }
    public function getUCId()
    {
        if(!empty($this->unionCouncil()->pluck('id')->all())) {
            return $this->unionCouncil()->pluck('id')->all()[0];
        }
    }
}
