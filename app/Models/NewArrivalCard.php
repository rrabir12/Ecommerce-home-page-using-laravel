<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewArrivalCard extends Model
{
    use HasFactory;

    protected $table = 'new_arival_card';

    protected $fillable = ['image', 'title', 'name', 'price'];
}
