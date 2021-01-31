<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['study_id', 'user_id', 'jadwal', 'jam', 'transaction_total', 
    'transaction_status'];

    public function study()
    {
        return $this->belongsTo(Study::class, 'study_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
