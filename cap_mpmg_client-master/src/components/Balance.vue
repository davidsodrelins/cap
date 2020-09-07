<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-11">
        <h4>Bem vindo(a), David!</h4>
      </div>
      <div class="col-md-1 text-right">
        <button @click.prevent="" class="btn btn-primary">Sair</button>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-6">
        <h5>Agência: 2222 | Conta: 2222</h5>
        <h1>R$ {{ formatCurrency(user.balance) }}</h1>
        <h6>Saldo atual</h6>
      </div>
      <div class="col-md-3">
2          <button class="btn btn-primary btn-block">Saque</button>
2      </div>
      <div class="col-md-3">
2          <button class="btn btn-primary btn-block">Depósito</button>
2      </div>
    </div>
  </div>
</template>
