<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'group_id',
        'surname', 
        'name',
        'created_at',
        'updated_at',
    ];

    public function group() {
        return $this->hasOne(Group::class, 'id', 'group_id');
    }
}
