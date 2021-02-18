@section('title', 'index')

@extends('layout.main')

@section('content')
<div class="mt-5 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selecione a peça desejada!</div>

                <div class="card-body">
                    <form method="POST" action="/">
                        @csrf
                        @livewire('products')
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="message">Mensagem</label>
                          <div class="col-md-6">
                              <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                          </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
