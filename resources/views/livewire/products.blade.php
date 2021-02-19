<div>
    {{-- <pre>{{ var_dump( old('model')) }}</pre> --}}
    <div class="form-group row">
        <label for="country" class="col-md-4 col-form-label text-md-right">Marca</label>

        <div class="col-md-6">
            <select wire:model="selectedBrand" name="brand" class="form-control @error('brand') is-invalid @enderror">
                <option value="" @if(old('brand') == 0) selected @endif>Selecione a marca do seu carro</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" @if(old('brand')==$brand->id) selected @endif>{{ $brand->name }}</option>
                @endforeach
            </select>
            @error('brand')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    @if ((!is_null($selectedBrand) && !empty($selectedBrand)) || !is_null(old('model')) || $errors->has('model'))
        <div class="form-group row">
            <label for="state" class="col-md-4 col-form-label text-md-right">Modelo</label>

            <div class="col-md-6">
                <select wire:model="selectedModel" name="model" value="2" class="form-control @error('model') is-invalid @enderror">
                    <option value="" selected>Selecione o modelo</option>
                    @foreach($models as $model)
                        <option value="{{ $model->id }}" @if(old('model')==$model->id) selected @endif>{{ $model->name }}</option>
                    @endforeach
                </select>
                @error('model')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    @endif

    @if ((!is_null($selectedModel) && !empty($selectedModel)) || !is_null(old('part')) || $errors->has('part'))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">Peça</label>

            <div class="col-md-6">
                <select wire:model="selectedPart" class="form-control @error('part') is-invalid @enderror" name="part">
                    <option value="" selected>Selecione a peça desejada</option>
                    @foreach($parts as $part)
                        <option value="{{ $part->id }}" @if(old('part')==$part->id) selected @endif>{{ $part->name }} R${{ number_format($part->price, 2) }}</option>
                    @endforeach
                </select>
                @error('part')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    @endif
</div>
