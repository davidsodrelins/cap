import {http} from './config'

export default {
  
  consultarSaldo:(usuario)=>{
    return http.get('saldo', usuario);
  },
  abrirConta:(usuario)=>{
    return http.post('usuarios', usuario)
  },
  realizarSaque:(saque)=>{
    return http.put('saque', saque)
  },
  realizarDeposito:(deposito)=>{
    return http.put('deposito', deposito)
  },
  

}