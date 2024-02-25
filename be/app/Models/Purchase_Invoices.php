<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_Invoices extends Model
{
    use HasFactory;
    protected $table = 'purchase_invoices';
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function admins()
    {
        return $this->belongsTo(Admins::class);
    }
    public function providers()
    {
        return $this->belongsTo(Providers::class);
    }
}
