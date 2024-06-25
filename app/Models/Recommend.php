<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    use HasFactory;
    protected $table = 'recommend';
    protected $fillable = [
        'tool_id',
        'material_id',
        'practice',
        'relation',
    ];
}
