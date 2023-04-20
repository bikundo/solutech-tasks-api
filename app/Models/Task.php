<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =[ 'name', 'description', 'due_date', 'status_id'];

    public function taskuser()
    {
        return $this->hasOne(UserTask::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
