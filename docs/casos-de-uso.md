# Casos de uso

## CDU001

|Identificador                |CDU001                                 |
|:---------------------------:|:-------------------------------------:|
|Nome                         |Acessar Sistema                        |
|Atores                       |Aluno                                  |
|Sumário                      |Aluno insere Login e Senha.            |
|Complexidade                 |Baixa                                  |
|Regras de Negócio            |Aluno deve estar cadastrado no sistema |
|Pré- Condições               |N/D                                    |
|Pós-Condições                |N/D                                    |
|Pontos de Inclusão           |Verificar notas                        |
|Pontos de Extensão           |N/D                                    |

### Fluxo principal

|Ações do Ator                                         |Ações do Sistema                                               | 
|:----------------------------------------------------:|:-------------------------------------------------------------:|
|1. O Aluno insere Login e Senha no sisema             |                                                               |
|                                                      |2. O Sistema válida a entrada do Aluno                         |
|3. Aluno acessa o sistema                             |                                                               |
|                                                      |4.sistema exibe menu de opções.                                |
|5. Aluno seleciona opção de notas                     |                                                               |
|                                                      |6. Sistema exibe as disciplinas para o aluno.                  |
|7. O Aluno acessa a disciplina que deseja ver a nota  |                                                               |
|                                                      |8. O Sistema acessa a disciplina e exibi as notas para o Aluno |

## Fluxo de Exceção 1 - Login/Senha Incorretos

|Ações do Ator                                         |Ações do Sistema                                               | 
|:----------------------------------------------------:|:-------------------------------------------------------------:|
|1. O Professor insere Login e Senha no sisema         |                                                               |
|                                                      |2. O Sistema válida a entrada do usuário                       |
|3. Aluno acessa o sistema                             |                                                               |
|4. O Aluno acessa a disciplina que deseja ver a nota  |                                                               |
|                                                      |5. O Sistema acessa a disciplina e exibi as notas para o Aluno |

## CDU002

|Identificador                |CDU002                                                                  |
|:---------------------------:|:----------------------------------------------------------------------:|
|Nome                         |Cadastrar Notas                                                         |
|Atores                       |Professor                                                               |
|Sumário                      |Professor acessa sistema e a disciplina que deseja cadastrar as Notas   |
|Complexidade                 |Alta                                                                    |
|Regras de Negócio            |N/D                                                                     |
|Pré- Condições               |Professor deve estar logado no sistema                                  |
|Pós-Condições                |N/D                                                                     |
|Pontos de Inclusão           |Selecionar Aluno                                                        |
|Pontos de Extensão           |N/D                                                                     | 

### Fluxo principal

|Ações do Ator                                                      |Ações do Sistema                                               | 
|:-----------------------------------------------------------------:|:-------------------------------------------------------------:|
|1. Professor acessa a disciplina que deseja cadastrar a nota       |                                                               |
|2. Professor seleciona o aluno                                     |                                                               |
|3. Professor cadastra as notas                                     |                                                               |
|                                                                   |4. O Sistema grava as notas cadastradas                        |
|                                                                   |5. Sistema volta para o passo 1 do Fluxo principal             |

## CDU003

|Identificador                |CDU003                                                                  |
|:---------------------------:|:----------------------------------------------------------------------:|
|Nome                         |Cadastrar Aluno                                                       |
|Atores                       |Administrador                                                            |
|Sumário                      |Administrador acessa sistema para cadastrar o Aluno  |
|Complexidade                 |Alta                                                                    |
|Regras de Negócio            |N/D                                                                     |
|Pré- Condições               |Administrador deve estar logado no sistema (como Admin)                                  |
|Pós-Condições                |N/D                                                                     |
|Pontos de Inclusão           |N/D                                                       |
|Pontos de Extensão           |N/D                                                                     | 


### Fluxo principal

|Ações do Ator                                              |Ações do Sistema                           | 
|:---------------------------------------------------------:|:-----------------------------------------:|
|1. Administrador acessa o menu de cadastramento            |                                           |
|                                                           |2. Sistema exibe a tela de cadastramento   |
|3. Administrador seleciona que o cadastramento é de aluno  |                                           |
|4. Administrador preenche formulário de cadastramento      |                                           |
|                                                           |5. O Sistema grava o cadastro do aluno     |
