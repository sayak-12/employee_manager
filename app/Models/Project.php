<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'skill_reqd'];
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
