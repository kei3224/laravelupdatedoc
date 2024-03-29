<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_type',
        'title',
        'sender',
        'office',
        'document_code',
        'description'
    ];
}
