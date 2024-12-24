# Gerenciamento de Estudantes - PHP/Laravel

Este projeto é uma aplicação Laravel simples para gerenciar estudantes, incluindo as operações de **Criar**, **Ler**, **Atualizar** e **Deletar** (CRUD).

---

## Requisitos

- [XAMPP](https://www.apachefriends.org/index.html) (para configurar o servidor local e o banco de dados) (recomendo o XAMPP)
- PHP 8.1 ou superior
- Composer
- Laravel 10.x

---

## Configuração do Projeto

### 1. Clone o Repositório
```bash
git clone https://github.com/GabrielViniciusLCM/Gerenciamento-Estudantes.git
cd crud-estudantes
```

### 2. Instale as Dependências
Certifique-se de que o Composer está instalado e execute:
```bash
composer install
```

### 3. Configure o Ambiente
Crie o arquivo `.env` a partir do `.env.example`:
```bash
cp .env.example .env
```

Edite o arquivo `.env` para configurar o banco de dados local do XAMPP. Exemplo:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gerenciamento_estudantes
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Crie o Banco de Dados
1. Abra o **phpMyAdmin** (geralmente em [http://localhost/phpmyadmin](http://localhost/phpmyadmin)).
2. Crie um banco de dados chamado `gerenciamento_estudantes`.

---

### 5. Execute as Migrações
Crie as tabelas no banco de dados:
```bash
php artisan migrate
```

---

### 6. Inicie o Servidor
Execute o servidor de desenvolvimento do Laravel:
```bash
php artisan serve
```

Acesse o projeto no navegador em [http://localhost:8000/home](http://localhost:8000/home).

---

## Funcionalidades

- **Listar Estudantes:** Exibe uma tabela com todos os estudantes cadastrados.
- **Adicionar Estudante:** Formulário para criar um novo estudante.
- **Editar Estudante:** Atualize as informações de um estudante existente.
- **Excluir Estudante:** Remova um estudante do banco de dados.

---


