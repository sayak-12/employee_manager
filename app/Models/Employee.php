<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'email', 'bio', 'skill', 'project_id'];
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
