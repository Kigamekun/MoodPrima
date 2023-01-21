<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'meta_landing';
    protected $fillable = ['hero','heading_hero','about','maps','email','address'];
    use HasFactory;
}
