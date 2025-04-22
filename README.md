# 4selet-avaliacao

Este projeto é uma landing page moderna e responsiva, construída com Laravel no backend e Bootstrap 5 no frontend. A proposta foi transformar um protótipo visual em uma interface funcional, simulando dados com PHP e aplicando boas práticas de performance e componentização.

# 📱 Landing Page Responsiva com Laravel + Bootstrap

Este repositório contém o código de uma landing page desenvolvida com **Laravel** e **Bootstrap**, como parte de um desafio técnico para desenvolvedor Frontend Júnior. O projeto foca em boas práticas de responsividade, componentização e simulação de dados dinâmicos.

## 🔍 Visão Geral

A página foi construída com base em um protótipo, respeitando os elementos visuais propostos e adaptando para dispositivos móveis com o sistema de grid do Bootstrap. Também foram aplicadas boas práticas de performance, reutilização de componentes e interações com animações suaves.

---

## 🚀 Funcionalidades Implementadas

- ✅ **Layout responsivo** com Bootstrap 5
- ✅ **Lista de produtos populares** com dados simulados (mocked) em PHP
- ✅ **Formulário de busca** com filtragem por palavra-chave via Laravel
- ✅ **Seção de depoimentos** com transições animadas
- ✅ **Componentização** de artigos com Blade
- ✅ **Exibição condicional** de produtos por tipo (livros, eletrônicos, móveis)
- ✅ **Menu mobile** funcional com animação suave
- ✅ **Otimização de performance** com lazy loading e minificação de arquivos

---

## 🛠️ Tecnologias Utilizadas

- [Laravel 10](https://laravel.com/)
- [PHP 8+](https://www.php.net/)
- [Bootstrap 5](https://getbootstrap.com/)
- Blade (template engine do Laravel)
- JavaScript vanilla
- HTML5 / CSS3

---

## 📂 Estrutura do Projeto

```
📁 seu-projeto/
├── 📁 app/
├── 📁 bootstrap/
├── 📁 config/
├── 📁 database/
├── 📁 node_modules/
├── 📁 public/
├── 📁 resources/
├── 📁 routes/
├── 📁 storage/
├── 📁 tests/
├── 📁 vendor/
├── 📄 artisan
├── 📄 composer.json
├── 📄 composer.lock
├── 📄 package.json
├── 📄 package-lock.json
├── 📄 phpunit.xml
├── 📄 README.md
└── 📄 vite.config.js

```

app/ → onde ficam os controllers, models, providers etc.
resources/ → views (Blade), JS, CSS
routes/ → define rotas web, API, console
public/ → arquivos acessíveis externamente (como index.php, imagens, etc)
node_modules/ → dependências do front (gerenciado pelo npm)
vendor/ → dependências PHP (gerenciado pelo Composer)

---

## 🧪 Como Rodar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/landingpage-laravel-bootstrap.git
   ```

````

2. Acesse o diretório do projeto:

   ```bash
   cd landingpage-laravel-bootstrap
   ```

3. Instale as dependências:

   ```bash
   composer install
   ```

4. Gere a chave da aplicação:

   ```bash
   php artisan key:generate
   ```

5. Inicie o servidor de desenvolvimento:

   ```bash
   php artisan serve
   ```

6. Acesse no navegador:
   ```
   http://localhost:8000
   ```

---

## 💡 Possibilidades de Expansão

- Página de detalhes do produto
- Sistema de comentários e avaliações
- Integração com banco de dados real
- Autenticação de usuários

---

## 🤝 Contribuições

Este projeto foi desenvolvido com fins educacionais, mas melhorias e sugestões são sempre bem-vindas. Sinta-se à vontade para abrir issues ou pull requests!

---

## 📄 Licença

Este projeto está sob a licença MIT. Consulte o arquivo [LICENSE](LICENSE) para mais informações.
````
