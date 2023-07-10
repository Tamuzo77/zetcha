<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public const PRODUCTION = 1;
    public const CREATION = 2;
    public const LIVRAISON = 3;

}
