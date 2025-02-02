<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'title', 'description', 'assigned_to', 'priority', 'status', 'due_date'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function subTasks()
    {
        return $this->hasMany(SubTask::class);
    }
}
