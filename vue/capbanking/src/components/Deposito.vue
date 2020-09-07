<template>
  <div class="container">
    <div class="formulario">
      <h1>{{ this.mensagem }}</h1>
      <form @submit.prevent="depositar">
        <input
          v-model="deposito.favorecido"
          placeholder="Informe o nome do favorecido"
          type="text"
        />
        <input
          v-model="deposito.conta"
          placeholder="Informe a conta do favorecido"
          type="number"
        />
        <input
          v-model="deposito.valor"
          placeholder="Informe o valor para depósito"
          type="number"
        />
        <button>Depositar</button>
      </form>
    </div>
  </div>
</template>

<script>
import Usuario from "../services/usuarios";

export default {
  data() {
    return {
      mensagem: "",
      deposito: {
        favorecido: "",
        conta: "",
        valor: ""
      },
    };
  },
  methods: {
    depositar() {
      Usuario.realizarDeposito(this.deposito).then((resposta) => {
        this.mensagem = "Depósito realizado com sucesso";
        console.log(resposta.data);
      });
    },
  },
}
</script>

<style scoped>
.container {
  width: auto;
  display: flex;
  border: solid 1px;
  background-color: darkgray;
}
h1 {
  position: relative;
  font-family: "Roboto", sans-serif;
  background-color: #b1f1c1;
  border-radius: 7px;
  color: black;
  padding: 20px 45px;
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 10px;
  margin-bottom: 15px;
  font-size: 32px;
}
button {
  position: relative;
  font-family: "Roboto", sans-serif;
  background-color: #2196f3;
  border-radius: 7px;
  color: white;
  border-bottom: #0d47a1 solid 6px;
  padding: 20px 45px;
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 10px;
  margin-bottom: 15px;
  font-size: 32px;
}
button:active {
  border-bottom: 2px solid #0d47a1;
  top: 4px;
  border-radius: 7px;
}
input::placeholder {
  font-family: "Roboto", sans-serif;
  font-size: 32px;
}
.formulario {
  align-self: center;
  width: 100%;
  justify-content: space-between;
  flex-wrap: wrap;
  flex-direction: column;
  margin: 50px;
}
input {
  border-radius: 10px;
  width: 90%;
  height: 40px;
  font-size: 20px;
  text-align: center;
  padding: 15px;
  margin: 15px;
  text-align: center;
}
</style>
