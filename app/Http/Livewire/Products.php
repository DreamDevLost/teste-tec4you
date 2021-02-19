<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Model;
use App\Models\ModelPart;
use Livewire\Component;

class Products extends Component
{
    public $brands;
    public $models;
    public $parts;

    public $selectedBrand = null;
    public $selectedModel = null;
    public $selectedPart = null;

    public function mount()
    {
        $this->brands = Brand::all();
        $this->models = collect();
        $this->parts = collect();
    }

    public function render()
    {
        return view('livewire.products');
    }

    public function updatedSelectedBrand($brand)
    {
        $this->models = Model::where('brand_id', $brand)->get();
        $this->selectedModel = null;
    }

    public function updatedSelectedModel($model)
    {
        if (!is_null($this->selectedModel)) {
            $this->parts = ModelPart::where('model_id', $model)->get();
        }
    }
}
