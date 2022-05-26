<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo_espace extends Model
{
    use HasFactory;
    protected $fillable=['url','space_id'];
}
