# Teste Autopeças Tec4you 

Este repositório contém o código para o teste de admissão da empresa tec4you.
## Usando o projeto
Primeiramente clone o repositório com:
```bash
git clone https://github.com/DreamDevLost/teste-tec4you.git
```
Execute o seguinte comando para copiar o .env.example para .env:
```bash
php -r copy('.env.example', '.env');
```
Agora atualize o arquivo .env com as credenciais do banco de dados, servidor smtp e o email de destino.<br><br>
Faça as migrações com seeds:
```bash
php artisan migrate:fresh --seed
```
Agora instale as dependências do front-end com o npm ou yarn:
```bash
npm install && npm run dev
```
Ou
```bash
yarn install && yarn dev
```
Agora inicie o projeto:
```bash
php artisan serve
```

## Rotas API
### Em caso de erro a API retornará o seguinte json como exemplo:
```json
{
    "error": true,
    "message": {
        "part_id": [
            "O parâmetro 'part id precisam ser numérico.'"
        ]
    }
}
```
___
```
POST /api/order
```
Faz o pedido da peça com uma mensagem:<br>
Parâmetros em form-data: 
```
part_id: ID de uma peça | Campo obrigatório
message: texto          | Campo obrigatório
```
_________
```
GET /api/brands
```
Retorna todas as marcas:
```json
[
    {
        "id": 1,
        "name": "Plymouth",
        "created_at": "2021-02-18T02:56:55.000000Z",
        "updated_at": "2021-02-18T02:56:55.000000Z"
    },
    ...
]
```
____
```
GET /api/brands/{id}
```
Retorna uma marca:
```json
{
    "id": 1,
    "name": "Plymouth",
    "created_at": "2021-02-18T02:56:55.000000Z",
    "updated_at": "2021-02-18T02:56:55.000000Z"
}
```
____
```
GET /api/brands/{id}/parts
```
Retorna as peças que pertencem a uma marca de carro:
```json
{
    "id": 1,
    "name": "Plymouth",
    "created_at": "2021-02-18T02:56:55.000000Z",
    "updated_at": "2021-02-18T02:56:55.000000Z"
}
```
____
```
GET /api/models
```
Retorna todos os modelos de carros de todas as marcas:
```json
[
    {
        "id": 1,
        "brand_id": 8,
        "name": " - Cooper Roadster",
        "created_at": "2021-02-18T02:56:55.000000Z",
        "updated_at": "2021-02-18T02:56:55.000000Z"
    },
    ...
]
```
____
```
GET /api/models/{id}
```
Retorna um modelo:
```json
{
    "id": 1,
    "brand_id": 8,
    "name": " - Cooper Roadster",
    "created_at": "2021-02-18T02:56:55.000000Z",
    "updated_at": "2021-02-18T02:56:55.000000Z"
}
```
____
```
GET /api/models/{id}/parts
```
Retorna as peças para o modelo especificado:
```json
[
    {
        "id": 1,
        "model_id": 1,
        "name": "Filtro de ac",
        "price": 4.5,
        "created_at": "2021-02-18T02:56:55.000000Z",
        "updated_at": "2021-02-18T02:56:55.000000Z"
    },
    ...
]
```
____
```
GET /api/parts
```
Retorna todas peças:
```json
[
    {
        "id": 1,
        "model_id": 1,
        "name": "Filtro de ac",
        "price": 4.5,
        "created_at": "2021-02-18T02:56:55.000000Z",
        "updated_at": "2021-02-18T02:56:55.000000Z"
    },
    ...
]
```
____
```
GET /api/parts/by/brand/{id}
```
Retorna todas as peças para uma marca de carro especifica:
```json
[
    {
        "id": 25,
        "model_id": 25,
        "name": "òleo",
        "price": 1.2,
        "created_at": "2021-02-18T02:56:55.000000Z",
        "updated_at": "2021-02-18T02:56:55.000000Z",
        "laravel_through_key": 1
    },
    ...
]
```
____
```
GET /api/parts/by/model/{id}
```
Retorna todas as peças para um modelo de carro especifica:
```json
[
    {
        "id": 1,
        "model_id": 1,
        "name": "Filtro de ac",
        "price": 4.5,
        "created_at": "2021-02-18T02:56:55.000000Z",
        "updated_at": "2021-02-18T02:56:55.000000Z"
    }
]
```
____
```
GET /api/parts/{id}
```
Retorna uma peça especifica:
```json
{
    "id": 1,
    "model_id": 1,
    "name": "Filtro de ac",
    "price": 4.5,
    "created_at": "2021-02-18T02:56:55.000000Z",
    "updated_at": "2021-02-18T02:56:55.000000Z"
}
```
