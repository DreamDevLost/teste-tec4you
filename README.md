# Teste Autopeças Tec4you 

Este repositório contém o código para o teste de admissão da empresa tec4you.
## Usando o projeto

Primeiramente crie e edite o arquivo .env com as suas informções do banco de dados:
```bash
php -r copy('.env.example', '.env');
```
Faça as migrações com seeds
```bash
php artisan migrate:fresh --seed
```
Agora inicie o projeto
```bash
php artisan serve
```
