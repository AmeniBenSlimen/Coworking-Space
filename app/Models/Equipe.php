<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Equipe extends Model
{
    use HasFactory;
    protected $fillable=['nom_equipe','prenom_equipe','description_equipe','image_equipe','telephone_equipe','user_id'];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
