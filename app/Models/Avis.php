<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avis extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
