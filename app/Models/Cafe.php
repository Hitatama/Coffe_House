<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    public $table = "cafe";
    use HasFactory;
    protected $fillable = ['id','name','description','opentime','address','created_by'];
    protected $guarded = [];
}
