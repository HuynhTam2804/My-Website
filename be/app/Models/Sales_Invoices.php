<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_Invoices extends Model
{
    use HasFactory;
    protected $table = 'sales_invoices';
    public function status_carts()
    {
        return $this->belongsTo(StatusSales::class);
    }
    public function users()
    {
        return $this->belongsTo(Users::class);
    }
    public function discounts()
    {
        return $this->belongsTo(Discounts::class);
    }
}
