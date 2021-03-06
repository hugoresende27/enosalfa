

## [Projeto_final](http://enos-alfa.herokuapp.com/)


![Esquema BD](https://github.com/hugoresende27/enosalfa/blob/main/documentation/BD_scheme.jpeg)

- Para realizar o projeto final usei a framework Laravel, baseada na arquitetura MVC.
- Para sistema de login foi utilizado o laravel Auth que vai criar o modelo User, os controladores na pasta Auth e actualizar o ficheiro routes.
- Foram criados vários modelos, na pasta App\Models, Aluno, Turma, Curso, Disciplina, Professor, estes modelos contêm as relações entre eles e os campos que são de acesso ou protegidos na respectiva tabela. Existem também alguns modelos relacionais para permitir a inserção e bom funcionamento de dados no caso de adicionar disciplinas a um curso (Curso_disciplinas) ou adicionar turmas a um curso(Cursos_turmas), como se tratam de relações muitos para um ou mesmo muitos para muitos foram criadas tabelas 'pivot' para gerir os dados à medida que o utilizador (professor ou admin) adicionam, editam ou apagam dados.
- Foram criados controladores, pasta App\Http\Controllers, os controladores contêm as funções associadas a cada modelo. Adicionar, actualizar ou eliminar dados da base de dados são funções escritas dentro de cada ficheiro com o nome de create, store, edit, update ou destroy. Alguns controladores têm na função __construct o middleware no return para não permitir acessos indevidos por URL
- Na pasta resources/views estão todas as 'blades', o front-end destinado a ser mostrado ao utilizador. Estas blades vão receber da função um objeto ou outro parametro, que é acedido na blade com recurso a um @foreach se for um objeto ou apenas fazendo um  {{ echo em laravel }}. 
- O ficheiro web.php na pasta Routes vai conter todas as rotas disponíveis por URL
- na pasta config do projeto existem vários ficheiros de config, tendo alterado algum código em database.phpe app.php para fazer o host no heroku
- o ficheiro composer.json vai conter todas as dependencias necessárias para o projecto, devendo usar o comando composer update e composer install para descarregar as dependencias necessarias para o projecto
- o ficheiro .env é muito importante, contém vars de configuração como o nome da DB do projeto, nome do projeto, configurações do serviço de email, etc.
- como extra adicionei o envio de um email ao fazer o registo, com o uso da função Mail::to e um serviço externo SendGrid, existe também um modelo dentro da pasta App\Mail com o ficheiro TestMail.php que vai retornar uma view que vai ser o email enviado.




#### Pretende-se com este trabalho, desenvolver um sistema que permita realizar a gestão de uma
escola/centro de formação, onde possam ser registados:
- Cursos (pode ter várias turmas); -- show cursos mostra turmas do curso
- Professores (assumindo que um professor só ministra uma disciplina, mas uma
disciplina pode ser ministrada por vários professores); -- show professor mostra disciplina
- Disciplinas;
- Alunos/Formandos (fazem parte de uma turma e a uma turma pertence uma sala);
- Notas dos alunos a cada disciplina. ---- index notas tem lista com todas as notas, alunos e disciplina

- Deverá ser possível extrair a seguinte informação de acordo com o tipo de utilizador:
- Aluno:Dados pessoais e notas às respetivas disciplinas;  --- show aluno tem dados pessoais e tabela com notas em baixo
- Professor:Consultar as suas turmas;  --- show professor tem opção atribuir turmas
- Administrador:Poderá visualizar tudo;
- O sistema a desenvolver deverá ter um “front-office” que possibilite o acesso remoto através
de “login” e com um ambiente para cada tipo de utilizador.

### FUNCIONALIDADES IMPLEMENTADAS 
1. aluno 
 - adicionar 
 - index mostra nome, sala, turma, alterar turma, editar e apagar
 - show mostra ficha tecnica aluno
 - editar aluno permite alterar curso ou dados pessoais
 - alterar turma vai alterar o curso para o curso da turma correspondente
 - apagar aluno 
 - ACESSOS :: index alunos, notas e cursos, apenas pode visualizar, tudo o resto tem ACESSO VEDADO

2. professor 
 - adicionar (precisa de disciplina) 
 - index mostra nome professor e disciplina
 - show mostra ficha tecnica professor 
 - editar professor permite alterar dados pessoais e disciplina
 - atribuir turma 
 - apagar professor 
 - ACESSOS :: index Alunos, pode editar aluno mas não criar, lançar e apagar notas, consegue ver cursos, lista de professores, turmas e disciplinas
 
3. curso   
 - adicionar precisa apenas do nome do curso
 - index mostra ID Curso e nome do curso
 - show curso mostra ID do curso, alunos a frequentar, turmas com o curso atribuido e disciplinas do curso  
 - editar nome do curso 
 - atribuir disciplinas a curso 
 - apagar curso 

4. Disciplina 
 - adicionar nome
 - index mostra ID Disciplina e nome da disciplina
 - show da disciplina mostra todas as notas e nomes dos alunos dessa disciplina
 - editar nome da disciplina OK
 - apagar disciplina OK
 
5. Notas
 - lançar notas precisa de aluno e disciplina
 - index notas mostra aluno, nota e disciplina
 - se aluno for apagado, nota também é apagada, onDelete('cascade')
 - 1 nota tem 1 id_aluno e 1 id_disciplina
 - nota pode ser apagada, e lançada de novo

6. Turmas
 - adicionar turma precisa de curso, número atribuido à turma vai ser o ID e sala
 - index mostra ID Turma(número da turma é o ID), curso e sala
 - show da turma mostra ficha técnica da turma, com ID, sala e Alunos
 - apagar turma 
 - 1 turma tem 1 id_curso

7. Administrador
 - apenas o administrador tem acesso a um menu ao na nav-bar de logout, esse menu tem :
 - gestão de users, pode adicionar ou remover users e definir os níveis de acesso, professor, aluno ou admin
 - gestão de salas, pode adicionar, editar ou remover salas

8. Procurar
 - Sistema de search com querys feitas nas tabelas alunos, professores, cursos, disciplinas e salas



<p align="center"><a href="http://enos-alfa.herokuapp.com/" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
