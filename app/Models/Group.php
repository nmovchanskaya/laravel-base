<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'start_from',
        'is_active', 
        'created_at',
        'updated_at',
    ];

    public function students() {
        return $this->hasMany(Student::class, 'group_id', 'id');
    }
}
