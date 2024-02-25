<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    use HasFactory;
    protected $table = 'colors';
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
