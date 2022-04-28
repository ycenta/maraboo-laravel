<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','marabout_id','content'];

    public function marabout()
    {
        return $this->hasOne(Marabout::class);
    }

}

