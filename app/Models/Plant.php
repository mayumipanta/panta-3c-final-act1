<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'variety', 'notes', 'date_planted', 'estimated_count', 'batch_name'])]
class Plant extends Model
{
    use HasFactory;
}
