<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryPhoto extends Model
{
    use HasFactory;

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
