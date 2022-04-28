<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marabout extends Model
{
    use HasFactory;

    protected $fillable = ['name','activity_begin_date','phone','address','mail','picture_url'];
}
