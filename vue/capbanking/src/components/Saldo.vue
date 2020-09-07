<template>
  <div class="container">
    <div class="formulario">
      <h1>{{this.saldo}}</h1>
      <input placeholder="Informe o número da conta" type="text" />
      <input placeholder="Digite sua senha" type="password" />
      <button @click="consultarSaldo()">Consultar Saldo</button>
    </div>
  </div>
</template>

<script>
export default {

  props:{
    saldo: String
  },

  computed(){
    this.consultarSaldo();
  },
  methods: {
    consultarSaldo() {
      this.saldo =  "R$ "+"40";
      return this.saldo ;
    },
  },
};
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
