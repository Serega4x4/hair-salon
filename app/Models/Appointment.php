<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['client_name', 'client_email', 'client_phone', 'comment'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function master()
    {
        return $this->belongsTo(Master::class);
    }
}
