<div>
    <div class="form-group row">
        <label for="country" class="col-md-4 col-form-label text-md-right">Marca</label>

        <div class="col-md-6">
            <select wire:model="selectedBrand" class="form-control">
                <option value="" selected>Selecione a marca do seu carro</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedBrand))
        <div class="form-group row">
            <label for="state" class="col-md-4 col-form-label text-md-right">Modelo</label>

            <div class="col-md-6">
                <select wire:model="selectedModel" class="form-control">
                    <option value="" selected>Selecione o modelo</option>
                    @foreach($models as $model)
                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif

    @if (!is_null($selectedModel))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">Peça</label>

            <div class="col-md-6">
                <select wire:model="selectedPart" class="form-control" name="city_id">
                    <option value="" selected>Selecione a peça desejada</option>
                    @foreach($parts as $part)
                        <option value="{{ $part->id }}">{{ $part->name }} R${{ number_format($part->price, 2) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>
