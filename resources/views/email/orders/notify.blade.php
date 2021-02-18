@component('mail::message')
# Notificação de compra
------
@component('mail::table')
|    Marca   |   Modelo   |          Peça             |
| ---------- |:----------:| -------------------------:|
| {{$brand}} | {{$model}} | {{ $part }} R${{ $price }}|
@endcomponent

## Mensagem
{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
