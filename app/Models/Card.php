<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class Card extends Model
{
    use HasFactory;
    
    public $fillable=["name","price","description","image","category","provider_id"];
    public $hidden=["created_at","updated_at"];
    
}
