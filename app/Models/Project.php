<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_title',
        'launch_date',
        'project_status',
        'project_thumbnail',
        'repository_url',
        'project_summary',
    ];
}
