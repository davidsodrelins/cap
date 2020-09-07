# capbanking


## Para instalação do front basta executar os comandos:

```
yarn install
```

### Para rodar execute o comando
```
yarn serve
```

O vue está com um erro para consumir as rotas de Saldo e Saque. Apesar da rota está funcionamento corretamente (via postman), o retorno não está correto. Estou analisando e subirei o fix assim que solucionar.

Para consumir a API utilizei o Axios.

Para cadastrar uma conta, abra o App.vue e descomente as linhas: 
          <!-- <router-link to="/conta" class=""
            >Abrir Conta</router-link
          > -->
Dessa forma será mais tranquilo cadastrar contas de usuários.

Devido ao pouco tempo hábil que tive, fiquei com alguns débtos técnicos:
Testes (jest)
Ia utilizar o tailwind para fazer a estilização dos componentes mas não tive tempo hábil (ficará como melhoria)
Tratamentos de erros nos campos (mascaras, campos vazios, etc.)
Melhorar a interface.

Os inputs e botoes poderiam ser componentes com propriedades e comportamentos, ficaria mais enxuto.

