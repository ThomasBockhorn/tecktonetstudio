<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_title',
        'project_description',
        'project_category',
        'client_name',
        'project_url',
    ];

    /**
     * The project has one project image
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function projectImage(){
        return $this->hasOne(ProjectImage::class);
    }
}
