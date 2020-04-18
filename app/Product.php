<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','sku','quantity'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'products';
}