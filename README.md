# G1 Learn API

Esta é a API do Fórum desenvolvida utilizando PHP, Laravel e MySQL. Esta API fornece endpoints para gerenciar usuários, tópicos, respostas e outras funcionalidades relacionadas ao fórum.

### Requisitos
Antes de iniciar, certifique-se de ter os seguintes requisitos instalados em seu sistema:

- PHP
- Composer
- MySQL

### Configuração
Siga as etapas abaixo para configurar e executar a API do Fórum:

1. Clone este repositório em sua máquina local.
2. Abra o terminal e navegue até o diretório raiz do projeto.
3. Execute o seguinte comando para instalar as dependências do Laravel:

```
composer install
```

4. Crie um arquivo .env a partir do arquivo .env.example. No arquivo .env, configure as informações do banco de dados:

```
DB_CONNECTION=mysql
DB_HOST=seu-host-do-banco-de-dados
DB_PORT=porta-do-banco-de-dados
DB_DATABASE=nome-do-banco-de-dados
DB_USERNAME=seu-nome-de-usuário
DB_PASSWORD=sua-senha
```

Certifique-se de fornecer as informações corretas de conexão com o banco de dados.

5. Execute o seguinte comando para gerar a chave de criptografia da aplicação:

```
php artisan key:generate
```

6. Execute o seguinte comando para executar as migrações e criar as tabelas do banco de dados:

```
php artisan migrate
```

Isso criará todas as tabelas necessárias para o funcionamento da API.

7. Execute o seguinte comando para iniciar o servidor de desenvolvimento:

```
php artisan serve
```

### Endpoints
A API do Fórum possui os seguintes endpoints disponíveis:

## GET
- /api/posts: retorna todos os tópicos.
- /api/posts/{post_id}: retorna tópico com id passado por parametro.
- /api/posts/{post_id}/comments: retorna tópico com id passado por parametro incluindo todos os comentários e respostas relacionados ao tópico.
- /api/posts/{post_id}/comments/{id}: retorna comentário de um post com id passado por parametro.

## POST
- /api/posts: criar tópico.
- /api/posts/{post_id}/comments: adicionar comentário ao post passado por parametro.
- /api/posts/{post_id}/comments/{id}/replies: adicionar reposta ao comentário do post passado por parametro.
 
   
