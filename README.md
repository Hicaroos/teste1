# Oficina do Nordeste

Bem-vindo ao repositório do projeto **Oficina do Nordeste**.

## 🚀 Começando

Para começar a trabalhar neste projeto, siga os passos abaixo.

### 📋 Pré-requisitos

Certifique-se de ter as seguintes ferramentas instaladas em sua máquina:

  * **PHP:** Versão mais recente
  * **Git**
  * **Composer:** (necessário para projetos Laravel)
  * **Node.js:** (necessário para compilar assets do front-end)

### 💻 Instalação

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/extension-projects/northeast-workshop.git
    ```
2.  **Acesse a pasta do projeto:**
    ```bash
    cd northeast-workshop
    ```
3.  **Instale as dependências do Composer:**
    ```bash
    composer install
    ```
4.  **Configure o ambiente:**
      * Copie o arquivo de exemplo de ambiente:
        ```bash
        cp .env.example .env
        ```
      * Gere a chave da aplicação:
        ```bash
        php artisan key:generate
        ```
5.  **Instale as dependências do NPM:**
    ```bash
    npm install
    ```
6.  **Compile os assets do front-end:**
    ```bash
    npm run dev
    ```

---
## 🛠️ Tecnologias e Convenções

### Linguagem e Estrutura

  * Este projeto é desenvolvido com **Laravel**, utilizando **PHP**.
  * Todo o código deve ser escrito em **inglês**. Isso inclui nomes de variáveis, funções, classes, branches do Git e comentários.

### Banco de Dados

  * O banco de dados principal de produção é o **PostgreSQL**.
  * Para fins de desenvolvimento, a configuração padrão é o **SQLite** para facilitar a inicialização.

### Front-end

  * Para o desenvolvimento do front-end, utilizamos o **Bootstrap** para agilizar a criação de layouts e componentes.

---
## 🤝 Fluxo de Trabalho (Git)

### Estrutura de Branches

Temos duas branches principais:

  * `main`: Contém o código de produção.
  * `develop`: Contém o código em desenvolvimento.

**É estritamente proibido fazer `push` diretamente para as branches `main` e `develop`.**

O fluxo de trabalho deve seguir a seguinte estrutura:

1.  O Scrum Master (SM) criará uma branch padrão para o time a partir da `develop`.
2.  Cada desenvolvedor deve criar uma nova branch **por funcionalidade** a partir da branch do seu time.

### Processo de Pull Request (PR)

O processo de envio de código para o repositório principal é feito através de **Pull Requests** (PRs) e segue um fluxo de revisão.

#### Para Desenvolvedores

1.  Após finalizar sua funcionalidade na sua branch, envie o código para o GitHub.
2.  No site do GitHub, crie uma **Pull Request** da sua branch para a branch do seu Scrum Master.
3.  Sua PR precisa ser aprovada por **dois revisores**: seu Scrum Master e mais um desenvolvedor do time.
4.  Após a aprovação e o merge, **apague a branch** que você usou para a funcionalidade.

#### Para Scrum Masters

1.  Após aprovar e fazer o merge das PRs de seu time, o Scrum Master deve abrir uma **Pull Request** da branch do time para a branch `develop`.
2.  Essa PR precisa ser aprovada por **dois revisores**: o Product Owner (PO) e mais um outro Scrum Master.

**Tutorial sobre Pull Requests:**
Se você tiver dúvidas sobre como criar uma Pull Request, assista a este vídeo: [https://www.youtube.com/watch?v=Du04jBWrv4A](https://www.youtube.com/watch?v=Du04jBWrv4A)

---
## 🎯 Gerenciamento de Tarefas

Todas as tarefas do projeto podem ser encontradas na aba **Projects** e estão organizadas no quadro de **Backlog**.

---
## 🎨 Design

O design da plataforma pode ser visualizado e acessado no Figma.

  * **Link do Figma:** [https://www.figma.com/design/Tc9b7A0J0WH6fiT5pFwKW8/Oficina-do-Nordeste?node-id=0-1\&t=tMaNDMJ2B4K5D3iO-1](https://www.figma.com/design/Tc9b7A0J0WH6fiT5pFwKW8/Oficina-do-Nordeste?node-id=0-1&t=tMaNDMJ2B4K5D3iO-1)

Se você não tiver acesso, por favor, solicite a um dos membros da equipe.
