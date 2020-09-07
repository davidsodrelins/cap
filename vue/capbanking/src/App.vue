<template>
  <div id="app">
    <Topo></Topo>
    <div class="container grid-lg ">
      <header class="navbar">
        <section class="navbar-section">
          <!-- <router-link to="/conta" class=""
            >Abrir Conta</router-link
          > -->
          <router-link to="/saque" class="opcao"
            >Saque</router-link
          >
          <router-link to="/deposito" class="opcao"
            >Deposito</router-link
          >
          <router-link to="/saldo" class="opcao"
            >Saldo</router-link
          >
        </section>
      </header>
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import Topo from './components/Topo';
export default {
  
  components:{
    Topo
  },


}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
.navbar{
  display: flex;
  margin: 40px;
  flex-wrap: wrap;
  justify-content: space-around;
  width: 100%;
}
.opcao{
  text-decoration: none;
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
</style>
