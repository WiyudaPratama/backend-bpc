<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Study extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['kelas', 'slug', 'harga'];

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'id');
    }
}
