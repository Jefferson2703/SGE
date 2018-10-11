## Caso de Uso CDU005 (Cadastrar Disciplina)

# CDU

### Identificador CDU

### Nome Cadastrar Disciplina

### Atores Administrador

### Sumário Administrador acessa o sistema para cadastrar uma nova disciplina

### Complexidade Médio

### Regras de Negócio N/D

### Pré- Condições (Premissas)

- Administrador deve estar logado no sistema (como Admin);
- Deve existir o cadastro do Curso para que o mesmo seja vinculado à Disciplina;
- Deve existir o cadastro do Professor para que o mesmo seja vinculado à Disciplina


### Identificador CDU

### Pós-Condições - É possível consultar a Disciplina que foi cadastrada

### Pontos de Inclusão N/D

### Pontos de Extensão N/D

## Fluxo principal - Cadastrar Disciplina

### Ações do Ator Ações do Sistema

### 1. Administrador acessa o menu de disciplinas

(^) 2. Sistema exibe a tela de disciplinas já cadastradas

### 3. Administrador seleciona a opção “Cadastrar Disciplina”

### 4. Sistema exibe o formulário de cadastro das

### disciplinas


### Ações do Ator Ações do Sistema

### 5. Administrador preenche o formulário de cadastro da

### disciplina

### 6. O Sistema informa que o cadastro da disciplina foi

### salvo

### 7. O sistema volta para o passo 2 do Fluxo principal

## Fluxo Alternativo – Excluir Disciplina

### Ações do Ator Ações do Sistema

1. Administrador acessa o menu de Disciplinas

(^) 2. Sistema exibe a tela de disciplinas já cadastradas

3. Administrador clica no botão “Excluir Disciplina” referente à Disciplina
    desejada


### Ações do Ator Ações do Sistema

### 4. O sistema volta para o passo 2 do Fluxo

### alternativo


### Plano de Testes – Fluxo Principal

```
Passo Ação Resultado Esperado
1 Digitar 123 no campo Nº Cartão ou Código de acesso Caixa de texto preenchida corretamente
2 Digitar 123 no campo Senha Caixa de texto de senha preenchida corretamente
3 Clicar em Entrar Usuário logado no sistema
```
```
4 Acessar o menu: CURSOS E DISCIPLINAS  Cadastrar Disciplina Sistema exibe as Disciplinas já
cadastradas
```

5 Clicar no botão **Cadastrar Disciplina** Sistema exibe o formulário para
cadastrar uma nova Disciplina


6 Selecionar TADS no Combo Curso Combo preenchido com o Curso selecionado
7 Digitar Banco de Dados no campo Disciplina Caixa de texto preenchida corretamente
8 Selecionar Bruno Machado no Combo Professor Combo preenchido com o Professor selecionado
9 Digitar 201 no campo Sala Caixa de texto preenchida corretamente
10 Selecionar Noite no Combo Turno Combo preenchido com o Turno selecionado
11 Clicar no botão **Cadastrar** Sistema exibe a mensagem de Disciplina
cadastrada com sucesso


12 Clicar no botão **Ok** Sistema volta para a tela de Disciplinas já
cadastradas (página atualizada)



### Plano de Testes – Fluxo Alternativo

```
Passo Ação Resultado Esperado
1 Digitar 123 no campo Nº Cartão ou Código de acesso Caixa de texto preenchida corretamente
2 Digitar 123 no campo Senha Caixa de texto de senha preenchida corretamente
3 Clicar em Entrar Usuário logado no sistema
```
```
4 Acessar o menu: CURSOS E DISCIPLINAS  Cadastrar Disciplina Sistema exibe as Disciplinas já
cadastradas
```

(^5) Clicar no botão **X** para excluir a Disciplina desejada Sistema exclui a Disciplina desejada
e atualiza a página


### Plano de Testes – Fluxos de Exceção

```
Passo Ação Resultado Esperado
1 Clicar em Entrar Sistema exibe mensagem de erro: “Por favor, digite
o número do cartão ou código de acesso! ”.
2 Digitar 123 apenas no campo Senha Caixa de texto de senha preenchida corretamente
3 Clicar em Entrar Sistema exibe mensagem de erro: “Por favor, digite
o número do cartão ou código de acesso! ”.
```

4 Digitar 123 apenas no campo Nº Cartão ou Código de
acesso

```
Caixa de texto preenchida corretamente
```
5 Clicar em **Entrar** Sistema exibe mensagem de erro: “Por favor, digite
sua senha!”


6 Digitar 1234 no campo Nº Cartão ou Código de acesso Caixa de texto preenchida corretamente
7 Digitar 1234 no campo Senha Caixa de texto de senha preenchida corretamente
8 Clicar em **Entrar** Sistema exibe mensagem de erro: “Dados
incorretos!”


9 Digitar 123 no campo Nº Cartão ou Código de acesso Caixa de texto preenchida corretamente
10 Digitar 123 no campo Senha Caixa de texto de senha preenchida corretamente
11 Clicar em **Entrar** Usuário logado no sistema
12 Acessar o menu: CURSOS E DISCIPLINAS  Cadastrar
Disciplina

```
Sistema exibe as Disciplinas já cadastradas
```
13 Clicar no botão **Cadastrar Disciplina** Sistema exibe o formulário para cadastrar uma
nova Disciplina


14 Selecionar TADS no Combo Curso Combo preenchido com o Curso selecionado
15 Selecionar Matheus no Combo Professor Combo preenchido com o Professor selecionado
16 Selecionar Manhã no Combo Turno Combo preenchido com o Turno selecionado
17 Clicar no botão **Cadastrar** Sistema exibe mensagem de erro: “Digite o nome
da disciplina”
18 Clicar no botão **Ok** Sistema volta para o formulário de cadastro de
Disciplina


19 Selecionar TADS no Combo Curso Combo preenchido com o Curso selecionado
20 Selecionar Matheus no Combo Professor Combo preenchido com o Professor selecionado
21 Selecionar Manhã no Combo Turno Combo preenchido com o Turno selecionado
22 Digitar APD no campo Disciplina Caixa de texto preenchida corretamente
23 Clicar no botão **Cadastrar** Sistema exibe mensagem de erro: “Digite o n° da
sala”


24 Clicar no botão **Ok** Sistema volta para o formulário de cadastro de
Disciplina


```
25 Digitar 404 apenas no campo Sala Caixa de texto preenchida corretamente
26 Clicar no botão Cadastrar Sistema exibe mensagem de erro: “Digite o nome
da disciplina”
27 Clicar no botão Ok Sistema volta para a tela de Disciplinas já
cadastradas (página atualizada)
```
Obs.: Esses são os fluxos alternativos do **Cadastrar Disciplina**. Caso todos os campos de textos e combos sejam preenchidos corretamente, basta clicar em
Cadastrar, e a Disciplina será cadastrada com sucesso conforme o Fluxo Principal.
