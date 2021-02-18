<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    use HasFactory;

    public function parts()
    {
        return $this->hasMany(ModelPart::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
