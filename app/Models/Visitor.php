<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $table = 'visitors';

    protected $fillable = [
        'name', 'phone','email,' ,'address','status','card_number',
    ];

    public function visit()
    {
        return $this->hasMany(VisitDetail::class);
    }
}
