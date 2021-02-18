<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Brand extends EloquentModel
{
    use HasFactory;

    public function models()
    {
        return $this->hasMany(Model::class);
    }

    public function parts()
    {
        return $this->hasManyThrough(ModelPart::class, Model::class);
    }
}
