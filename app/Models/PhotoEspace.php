<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoEspace extends Model
{
    use HasFactory;
    protected $fillable=['image_espace','space_id'];
}
