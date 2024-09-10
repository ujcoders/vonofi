<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hcp extends Model
{
    use HasFactory;

    protected $fillable = [
        'hcp_name',
        'hcp_city',
        'hcp_qualification',
    ];
}
