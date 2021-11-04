<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // id を書き換え不可にしてる
    protected $guarded = [
        'id'
    ];

    // uuid, name, price を書き換え可能にしてる
    protected $fillable = [
        'uuid', 'name', 'price'
    ];
}