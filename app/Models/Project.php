<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name_project'
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class,'project_id','id');
    }
}