
## API
A API é bastante simples e se propõe ao que foi solicitado.

Minha intenção era criar a regra de negócio no banco e usar a API apensa para fazer as chamadas às procedures, views, e etc.
Como era mais simples fazer tudo via aplicação, optei pelo caminho mais fácil. 

Para isso é preciso usar um servidor mysql e criar um schema chamado laravel.

Execute a query: 
create database laravel;

Após isso basta rodar o laravel e rodar o migrate para criar as tabelas.

Ex. da execução das rotas: 

SAQUE [PUT]
http://127.0.0.1:8000/api/saque

{ 
    "conta": "123456",
    "senha": "123456",
		"valor": "12"
}

DEPOSITO [PUT]
http://127.0.0.1:8000/api/deposito

{ 
    "conta": "123456",
		"valor": "15.00"

}

SALDO [GET]
http://127.0.0.1:8000/api/saldo
{ 
    "conta": "123456",
    "senha": "22"
}

CONTA [POST]

http://127.0.0.1:8000/api/usuarios

 {
    "nome": "David",
    "cpf": "001.002.003-99",
    "conta": "123456",
    "senha": "123456"
  }

Caso fosse seguir com a implementação da regra de negocio no bancod e dados, ficaria mais ou menos como abaixo:

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deposito`(in p_usuario INT, in p_valor decimal)
BEGIN

	DECLARE v_usuario INT;
    DECLARE v_deposito, v_saldo DECIMAL;
    DECLARE msg VARCHAR(255);
    
    set v_usuario = p_usuario;
    set v_deposito = p_valor;
    
    set v_saldo = (select saldo from conta where usuario = v_usuario limit 1);
	UPDATE `bankingcap`.`conta` SET `saldo` = (v_saldo+v_deposito) WHERE usuario = v_usuario;
	set msg = "Seu depósito foi realizado com sucesso!";
	select msg;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `saldo`(IN p_usuario INT)
BEGIN
DECLARE v_usuario INT;
set v_usuario = p_usuario;

select conta.saldo from conta where conta.usuario = v_usuario;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `saque`(in usuario_id INT, in valor decimal)
BEGIN
	DECLARE v_usuario INT;
    DECLARE v_saque, v_saldo DECIMAL;
    DECLARE msg VARCHAR(255);
    
    
    set v_usuario = usuario_id;
    set v_saque = valor;
    
    set v_saldo = (select saldo from conta where usuario = v_usuario limit 1);
    
    IF (v_saque <= v_saldo AND v_saque>0) THEN
		set msg = "Saque autorizado pela instituição";
        UPDATE `bankingcap`.`conta` SET `saldo` = (v_saldo-v_saque) WHERE usuario = v_usuario;
	ELSE
		set msg = "Saque não autorizado pela instituição";
    END IF;
    select msg;
END$$
DELIMITER ;


Debitos técnicos:
Autenticação JWT
Testes automatizados
Documentação técnica
Melhoria na implementação das entidades

