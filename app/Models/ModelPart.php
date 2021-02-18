<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Model as ModelsModel;

class ModelPart extends Model
{
    use HasFactory;

    public function model()
    {
        return $this->belongsTo(ModelsModel::class);
    }
}
