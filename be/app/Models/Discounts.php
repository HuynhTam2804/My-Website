<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
    use HasFactory;
    protected $table = 'discounts';
    public function type_discounts()
    {
        return $this->belongsTo(TypeDiscounts::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
