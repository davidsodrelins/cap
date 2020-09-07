import Vue from 'vue'
import Router from 'vue-router'

import Deposito from '@/components/Deposito'
import Conta from "@/components/Conta";
import Saque from '@/components/Saque'
import Saldo from '@/components/Saldo'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/conta',
      name: 'conta',
      component: Conta
    },

    {
      path: '/saldo',
      name: 'saldo',
      component: Saldo      
    },
    {
      path: '/saque',
      name: 'saque',
      component: Saque
    },
    {
      path: '/deposito',
      name: 'deposito',
      component: Deposito
    }
  ]
})
