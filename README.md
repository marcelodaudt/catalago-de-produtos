## Catálago de Produtos

Projeto de Catálogo de Produtos simples desenvolvido em Laravel.

Recursos disponíveis:
- Cadastro, visualização, alteração e exclusão (*SoftDeletes*) de produtos;
- Visualização dos produtos com busca e ordenação, paginado;
- Sistema com autenticação de usuários - para alteração e exclusão de produtos;
- página de contato com envio de *e-mail*.


## Instalação

Procedimentos de deploy básico para desenvolvimento:

    composer install
    cp .env.example .env
    php artisan migrate:fresh --seed
