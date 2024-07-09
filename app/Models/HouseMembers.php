<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseMembers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'age',
        'cnic',
        'house_id'
    ];

    public function house()
    {
        return $this->belongsTo(House::class);
    }

    public function getHouseNumber()
    {
        // if(!empty($this->house()->pluck('number')->all())) {
            return $this->house()->pluck('number')->all()[0];
        // }
    }
    public function getHouseId()
    {
        // if(!empty($this->house()->pluck('id')->all())) {
            return $this->house()->pluck('id')->all()[0];
        // }
    }
}
