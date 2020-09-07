import Vue from 'vue'
import App from './App.vue'

import Router from "vue-router";

import Deposito from "@/components/Deposito";
import Conta from "@/components/Conta";
import Saque from "@/components/Saque";
import Saldo from "@/components/Saldo";
import VueRouter from 'vue-router';

Vue.use(Router);

const router = new VueRouter({
  routes: [
    {
      path: "/conta",
      name: "conta",
      component: Conta,
    },

    {
      path: "/saldo",
      name: "saldo",
      component: Saldo,
    },
    {
      path: "/saque",
      name: "saque",
      component: Saque,
    },
    {
      path: "/deposito",
      name: "deposito",
      component: Deposito,
    },
  ],
});

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
