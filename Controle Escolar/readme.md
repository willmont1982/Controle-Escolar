
## APLICAÇÃO PARA GERENCIAMENTO ACADEMICO COMPLETO
OBS: Visando uma aplicação mais completa, adicionei alguns recursos extras no projeto como um diferencial, como por exemplo cadastros de controle de aluno, matérias e professores com frameworks PHP, não fugindo das bibliotecas Javascipt em Angular. Implementei também menu responsivo para uso mobile e router para carregamento de Forms. Também fiz o uso de Vue.js materialize.

## Como instalar:
composer create-project emtudo/school-api <--diretorio onde foi feito o download da pasta
cd school-api
php artisan jwt:generate

## OU

git clone https://github.com/willmont1982/Controle-Escolar
cd school-api
docker-compose up --build -d

## Admin (Default)
username: admin@user.com
password: abc123

Configure o config/common.env.js file com a API address (Suponho que você já instalou a API)
## npm run build

## COMO TESTAR
npm run dev

## hosts
127.0.0.1	school.dev

## Dependencies - Não precisa docker pois ja tem o redis, mesmo assim gerei o docker-compose.
php 7.2
mysql 5.7
redis
docker-compose.yml

## Aplicação multi plataformas devido a escalabilidade de algumas classes e módulos serem mais funcionais em determinadas linguagens e scripts.

## FUNÇÕES DA APLICAÇÃO
- Todo desenvolvido com TDD
- Cadastro de alunos
- Cadastro de cedente * EXTRA
- Cadastro de funcionários
- Cadastro de horários
- Cadastro de matérias
- Cadastro de lições
- Cadastro de professores
- Cadastro de turmas
- Cadastro de usuários (Aluno, Funcionário e Professor)
- Geração de boleto automático * EXTRA

## TECNOLOGIAS USADAS
- ANGULAR
- VUE.JS E MATERIALIZE
- HTML (Layout das páginas)
- Javascript (BackEnd)
- CSS (Estilos)
- PHP >= 5.5.9
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- NPM
- Bootstrap

## NO SHELL DO LINUX EXECUTE:

- composer create-project --prefer-dist resultsystems/school school
- cd school
- npm install
- gulp
- configure o arquivo .env
- php artisan migrate

### DADOS PARA TESTE
- php artisan db:seed --class=Fakers 

## CASO OCORRA ESTE ERRO, EXECUTE O SCRIPT ABAIXO:

#### *No supported encrypter found*
run:
```
php artisan key:generate
``` 
#### Maximum function nesting level of '100' reached

Isso acontece por utilizar xdebug. Localize o arquivo php.ini do seu apache e adicione/altere a seguinte configuração:

```
xdebug.max_nesting_level=500
``` 
### Virtual Host

**http.conf**
```xml
<Directory /path/to/school/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Order allow,deny
        Require all granted
</Directory>

<VirtualHost school.dev:80> 
     ServerAdmin your@email.dev     
     ServerName school.dev
     ServerAlias school.dev
     DocumentRoot /path/to/school/public
     ErrorLog /path/to/school/storage/logs/mysite.error.log 
     CustomLog /path/to/school/storage/logs/mysite.access.log combined
</VirtualHost>
```

**hosts**
```
127.0.0.1	school.dev
```
## MAPA DE FUNCIONAMENTO DA APLICAÇÃO

Implementar o sistema utilizando Vue-js e Materialize.

- [x] Estrutura básica com (vue,vuex,router,resource)
- [x] Login consultando api
- [x] Incluir opções para login automático: Funcionario, Professor e Aluno 
- [ ] Melhorar a forma como exibir o erro de login
- [ ] Recuperar a senha
- [ ] Registrar no sistema
- [x] Menu responsivo e menu mobile
  - [ ] Bug ao logar, o jquery não inicializa os menus
  - [ ] Bug quando seleciona o item do menu mobile, a tela não volta para o estado atual
- [x] Router com menu carregando os forms
- [ ] Perfil
- [ ] Alunos
  - [ ] Listar Alunos
  - [ ] Cadastrar Aluno
  - [ ] Editar Aluno
- [ ] Funcionários
- [ ] Horários
- [ ] Lições
- [ ] Matérias
- [ ] Pagamentos
- [ ] Professores
- [ ] Turmas
