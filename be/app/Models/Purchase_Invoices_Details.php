<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_Invoices_Details extends Model
{
    use HasFactory;
    protected $table = 'purchase_invoices_details';
    public function products()
    {
        return $this->belongsTo(Products::class);
    }
    public function colors()
    {
        return $this->belongsTo(Colors::class);
    }
    public function sizes()
    {
        return $this->belongsTo(Sizes::class);
    }
}
