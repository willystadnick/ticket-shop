# Exercício técnico – Analista de desenvolvimento

Vamos abrir uma empresa de ingressos e precisamos construir as bases da nossa operação.
Nossa operação baseia-se em prestar serviço aos organizadores, disponibilizando os ingressos de seus eventos em um canal online.
Os ingressos serão gratuitos e vinculados ao CPF dos consumidores que solicitarem.
O fluxo de negócio se inicia quando um organizador entra em contato com nossa central de cadastros e repassa as informações do evento que deseja cadastrar para que nossos analistas de eventos cadastrem de forma padronizada e possam auxilia-lo com nosso conhecimento sobre eventos. Com o cadastro feito e publicado, torna-se visível para os clientes em nossa plataforma online para que os consumidores possam inscrever-se e imprimir seu ticket. Dado o contexto acima, nossa equipe de análise extraiu as seguintes histórias de usuário, com seus respectivos critérios de aceite, para serem implementadas:

1. Como analista de eventos, desejo poder cadastrar evento em nossa plataforma administrativa pois estes servirão como base para todas operações
 * Os eventos devem possuir um nome, data de realização, nome do organizador, descrição para os clientes, lotação máxima e tipo (show, balada, teatro ou esporte)
 * Data de realização deve ser maior que a data atual

2. Como analista de eventos, desejo visualizar uma listagem de todos os eventos cadastrados em nossa plataforma administrativa para poder controlar nosso trabalho e tornar claras quais as datas e situações (publicado ou não) de cada evento
 * A listagem deve possuir filtros para todos os atributos de evento
 * A listagem deve exibir em colunas todos os atributos de evento

3. Como analista de eventos, desejo poder sinalizar um evento em nossa plataforma administrativa como publicado para que só assim fique visível em nosso portal para os consumidores
 * Um evento não pode ser publicado após a data de realização

4. Como analista de eventos, desejo poder editar ou excluir eventos em nossa plataforma administrativa pois nossos organizadores sempre têm necessidade de adequar suas estratégias de acordo com as inscrições ou cancelar no caso de pouca procura
 * A data de realização de um evento não pode ser alterada para uma data igual ou inferior à atual

5. Como consumidor, desejo entrar em um portal que liste todos os eventos publicados, exibindo o nome, tipo e nome do organizador, separados por data de realização para que eu possa escolher qual quero participar
 * Apenas eventos publicados deverão aparecer
 * Eventos com data de realização menor que a data atual não devem ser exibidos

6. Como consumidor, desejo poder ver os detalhes de um evento e solicitar a minha inscrição para que eu possa receber meu ticket e participar da sua realização
 * Todas as informações cadastradas devem ser exibidas
 * Ao solicitar a participação no evento, o cliente deverá informar seu nome e CPF para confirmar
 * Apenas um ticket deve ser disponibilizado por CPF por evento
 * Ao confirmar, o sistema deverá exibir um código numérico que representará o ticket
 * Caso o CPF já possua um ticket para o evento, o código deverá ser apresentado novamente
 * Caso a lotação máxima do evento tenha sido atingida, a opção de inscrever-se deverá ficar indisponível

7. Como analista de eventos, desejo poder ver um indicador de inscrições de um evento em tempo real, para poder dar feedbacks constantes ou montar relatórios para o organizador sobre a situação de seus eventos, o qual tomará decisões como alterar a lotação, mudar datas ou detalhes do evento, ou até cancela-lo dependendo da sua procura.
 * Indicador de inscrições refere-se a cruzar os números de lotação máxima do evento com a quantidade de inscrições realizadas até o momento.

O desafio está lançado! Implemente as histórias acima da forma mais simples e objetiva possível, seja web ou mobile. Para isso, utilize qualquer tecnologia e técnicas ou combinações delas que sentir-se mais confortável. Seguem algumas sugestões na lista abaixo:
PHP, Node, Angular, Jquery, Javascript, Bower, Grunt, Gulp, TDD, BDD, Git, MongoDB, SQLite, Ionic, Cordova, Android (Java), IOs (Objective C ou Swift)
