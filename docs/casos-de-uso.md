# Casos de uso

## CDU001

|Identificador                |CDU001                                                  |
|:---------------------------:|:------------------------------------------------------:|
|Nome                         |Verificar notas                                         |
|Atores                       |Aluno                                                   |
|Sumário                      |Aluno insere Login e Senha e verifica sua nota          |
|Complexidade                 |Baixa                                                   |
|Regras de Negócio            |Aluno deve estar cadastrado no sistema                  |
|Pré- Condições               |N/D                                                     |
|Pós-Condições                |N/D                                                     |
|Pontos de Inclusão           |Verificar notas                                         |
|Pontos de Extensão           |N/D                                                     |

### Fluxo principal

|Ações do Ator                                         |Ações do Sistema                                               | 
|:----------------------------------------------------:|:-------------------------------------------------------------:|
|1. O Aluno insere Login e Senha no sisema             |                                                               |
|                                                      |2. O Sistema válida a entrada do Aluno                         |
|3. Aluno acessa o sistema                             |                                                               |
|                                                      |4. Sistema exibe menu de opções.                               |
|5. Aluno seleciona opção de notas                     |                                                               |
|                                                      |6. Sistema exibe as notas de cada disciplina do aluno          |


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

### Fluxo principal - Cadastrar nota 

|Ações do Ator                                                      |Ações do Sistema                                               | 
|:-----------------------------------------------------------------:|:-------------------------------------------------------------:|
|1. Professor acessa menu de Turmas                                 |                                                               |
|                                                                   |2. Sistema exibe as turmas do professor                        |
|3. Professor seliciona qual truma deseja lançar a nota             |                                                               |
|                                                                   |4. O sistema exibe os alunos da turma selecionada              |
|4. Professor seleciona qual aluno deseja lançar nota               |                                                               |
|                                                                   |5. O sistema habilita os campos de notas para ser editado      |
|6. Professor insere a nota do aluno.                               |                                                               |
|7. Professor lança a nota do aluno.                                |                                                               |
|                                                                   |8. O sistema informa que a nota do aluno foi gravada           |
|                                                                   |9. O Sistema volta para o passo 4 do fluxo principal           |

## CDU003

|Identificador                |CDU003                                                                  |
|:---------------------------:|:----------------------------------------------------------------------:|
|Nome                         |Cadastrar Aluno                                                         |
|Atores                       |Administrador                                                           |
|Sumário                      |Administrador acessa sistema para cadastrar o Aluno                     |
|Complexidade                 |Alta                                                                    |
|Regras de Negócio            |N/D                                                                     |
|Pré- Condições               |Administrador deve estar logado no sistema (como Admin)                 |
|Pós-Condições                |N/D                                                                     |
|Pontos de Inclusão           |N/D                                                                     |
|Pontos de Extensão           |N/D                                                                     | 


### Fluxo principal - Cadastrar Aluno 

|Ações do Ator                                              |Ações do Sistema                                           | 
|:---------------------------------------------------------:|:---------------------------------------------------------:|
|1. Administrador acessa o menu do aluno                    |                                                           |
|                                                           |2. Sistema exibe a tela de alunos ja cadastrados           |
|3. Administrador seleciona a opção casdastrar aluno        |                                                           |
|                                                           |4. Sistema exibe o formulário de cadastramento do aluno.   |
|5. Administrador preenche formulário de cadastro do aluno  |                                                           |
|                                                           |6. O Sistema informa que o cadastro do aluno foi salvo     |
|                                                           |7. O sistema volta para o passo 2 do Fluxo principal       |

## CDU004

|Identificador                |CDU004                                                                  |
|:---------------------------:|:----------------------------------------------------------------------:|
|Nome                         |Cadastrar Professor                                                     |
|Atores                       |Administrador                                                           |
|Sumário                      |Administrador acessa sistema para cadastrar o Professor                      |
|Complexidade                 |Alta                                                                    |
|Regras de Negócio            |N/D                                                                     |
|Pré- Condições               |Administrador deve estar logado no sistema (como Admin)                 |
|Pós-Condições                |N/D                                                                     |
|Pontos de Inclusão           |N/D                                                                     |
|Pontos de Extensão           |N/D                                                                     | 


### Fluxo principal - Cadastrar Professor 

|Ações do Ator                                                 |Ações do Sistema                                                   | 
|:------------------------------------------------------------:|:-----------------------------------------------------------------:|
|1. Administrador acessa o menu de Professores                 |                                                                   |
|                                                              |2. Sistema exibe a tela de professores já cadastrados              |
|3. Administrador seleciona a opção casdastrar professores     |                                                                   |
|                                                              |4. Sistema exibe o formulário de cadastramento dos professsores.   |
|5. Administrador preenche formulário de cadastro do professor |                                                                   |
|                                                              |6. O Sistema informa que o cadastro do professor foi salvo         |
|                                                              |7. O sistema volta para o passo 2 do Fluxo principal               |

### Fluxo Alternativo - excluir 

|Ações do Ator                                                 |Ações do Sistema                                                   | 
|:------------------------------------------------------------:|:-----------------------------------------------------------------:|
|1. Administrador acessa o menu de Professores                 |                                                                   |
|                                                              |2. Sistema exibe a tela de professores já cadastrados              |
|3. Administrador encontrar o professor a ser excluido         |                                                                   |
|4. Administrador clica no botão Excluir                       |                                                                   |
|                                                              |5. Sistema exibe a mensagem para administrador confirma a exclusão.|
|6. O administrador confirma a exclusao do professores         |                                                                   |
|                                                              |7. O sistema exclui o professor                                    |

### Fluxo Alternativo - Editar 

|Ações do Ator                                                 |Ações do Sistema                                                   | 
|:------------------------------------------------------------:|:-----------------------------------------------------------------:|
|1. Administrador acessa o menu de Professores                 |                                                                   |
|                                                              |2. Sistema exibe a tela de professores já cadastrados              |
|3. Administrador encontrar o professor a ser editado          |                                                                   |
|4. Administrador clica no botão editar                        |                                                                   |
|                                                              |5. Sistema formulário com as informações do professor selecionado  |
|6. O administrador altera as informações                      |                                                                   |
|7. o administrador clica em salvar alterações.                |                                                                   |
|                                                              |8. O sistema exibe a mensagem se o administrador realmente quer editar o professor | 
|9. O administrador confirma o alteração                       |                                                                   |
|                                                              |10. Sistema salva alteração                                        | 

## CDU005

|Identificador                |CDU005                                                                  |
|:---------------------------:|:----------------------------------------------------------------------:|
|Nome                         |Cadastrar Disciplina                                                    |
|Atores                       |Administrador                                                           |
|Sumário                      |Administrador acessa sistema para cadastrar o disciplina                |
|Complexidade                 |Alta                                                                    |
|Regras de Negócio            |N/D                                                                     |
|Pré- Condições               |Administrador deve estar logado no sistema (como Admin)                 |
|Pós-Condições                |N/D                                                                     |
|Pontos de Inclusão           |N/D                                                                     |
|Pontos de Extensão           |N/D                                                                     | 


### Fluxo principal - Cadastrar Disciplina 

|Ações do Ator                                                 |Ações do Sistema                                                   | 
|:------------------------------------------------------------:|:-----------------------------------------------------------------:|
|1. Administrador acessa o menu de disciplinas                 |                                                                   |
|                                                              |2. Sistema exibe a tela de disciplina já cadastrados               |
|3. Administrador seleciona a opção casdastrar disciplina      |                                                                   |
|                                                              |4. Sistema exibe o formulário de cadastramento dos disciplina.     |
|5. Administrador preenche formulário de cadastro do disciplina|                                                                   |
|                                                              |6. O Sistema informa que o cadastro do disciplina foi salva        |
|                                                              |7. O sistema volta para o passo 2 do Fluxo principal               |

## CDU006

|Identificador                |CDU006                                                                  |
|:---------------------------:|:----------------------------------------------------------------------:|
|Nome                         |Cadastrar Curso                                                          |
|Atores                       |Administrador                                                           |
|Sumário                      |Administrador acessa sistema para cadastrar o Curso                     |
|Complexidade                 |Alta                                                                    |
|Regras de Negócio            |N/D                                                                     |
|Pré- Condições               |Administrador deve estar logado no sistema (como Admin)                 |
|Pós-Condições                |N/D                                                                     |
|Pontos de Inclusão           |N/D                                                                     |
|Pontos de Extensão           |N/D                                                                     | 


### Fluxo principal - Cadastrar Curso 
|Ações do Ator                                                 |Ações do Sistema                                                   | 
|:------------------------------------------------------------:|:-----------------------------------------------------------------:|
|1. Administrador acessa o menu de Curso                       |                                                                   |
|                                                              |2. Sistema exibe a tela de Cursos já cadastrados                   |
|3. Administrador seleciona a opção casdastrar Curso           |                                                                   |
|                                                              |4. Sistema exibe o formulário de cadastramento dos Curso.          |
|5. Administrador preenche formulário de cadastro do Curso     |                                                                   |
|                                                              |6. O Sistema informa que o cadastro do Curso foi salvo             |
|                                                              |7. O sistema volta para o passo 2 do Fluxo principal               |

## CDU007

|Identificador                |CDU007                                                                 |
|:---------------------------:|:----------------------------------------------------------------------:|
|Nome                         |Cadastrar Turma                                                         |
|Atores                       |Administrador                                                           |
|Sumário                      |Administrador acessa sistema para cadastrar o turma                     |
|Complexidade                 |Alta                                                                    |
|Regras de Negócio            |N/D                                                                     |
|Pré- Condições               |Administrador deve estar logado no sistema (como Admin)                 |
|Pós-Condições                |N/D                                                                     |
|Pontos de Inclusão           |N/D                                                                     |
|Pontos de Extensão           |N/D                                                                     | 


### Fluxo principal - Cadastrar Turma
|Ações do Ator                                                 |Ações do Sistema                                                   | 
|:------------------------------------------------------------:|:-----------------------------------------------------------------:|
|1. Administrador acessa o menu de Turma                       |                                                                   |
|                                                              |2. Sistema exibe a tela de Cursos já cadastrados                   |
|3. Administrador seleciona a opção casdastrar Turma           |                                                                   |
|                                                              |4. Sistema exibe o formulário de cadastramento dos Turma.          |
|5. Administrador preenche formulário de cadastro do Turma     |                                                                   |
|                                                              |6. O Sistema informa que o cadastro do Turma foi salvo             |
|                                                              |7. O sistema volta para o passo 2 do Fluxo principal               |

