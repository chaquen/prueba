<?php
$a=true;
$b=false;
$c=true;

if($a && ($b || $c )){
	echo 1;

}else{
	echo 2;
}

=== 19
SELECT * FROM beneficioarios inner join 
tajetas on tarjetas.idBeneficiario = beneficioarios.idBeneficiario
===20
select count(idTrajetas) from tarjetas as t inner join clientes as c on c.id_cliente = t.idTrajetas WHERE c.nitCliente= 'ddddd'

===== 21

SELECT c.nombreCliente ,SUM(ValorMovimiento) as valor_recarga FROM movimientos as m
INNER JOIN tipoMoviento as tm 
on tm.idTipoMOvimeinto = m.idtipoMovimiento 
inner join tarjetas as t 
on t.idTarjeta = m.idTarjeta 
inner join Clientes as c 
on c.id_cliente= t.idCliente

where c.nombreCliente = 'Cliente 2' AND tm.nombre='Recarga'


====22
SELECT tm.nombre,MONTH(fecha)  as mes,SUM(idTipoMOvimeinto) as cantidad_movimientos FROM movimientos AS m 
	INNeR JOIN tipoMoviento as tm 
	on tm.idtipoMovimiento = m.idTipoMOvimeinto 
	group by  m.idTipoMOvimeinto


====23 SUBCONSULTAS
	SELECT * FROM t1 WHERE column1 = (SELECT column1 FROM t2);

0 join 
1 SUMAR RECARGAS
2 SUMAR COMPRAS
3 RESTAR RRECARGAS - COMPRAS 

select 
t.numero:tarjeta,

(select sum (ValorMovimiento) as recargas from movimientos where idTipoMOvimeinto = 1) 

- (select sum (ValorMovimiento) as compras from movimientos where idTipoMOvimeinto = 2) 
saldo


  from movimientos as m


inner join tarjetas as t 
on m.idTrajetas = t.idTrajetas 
INNER JOIN tipoMoviento AS tm
on tm.idTipoMOvimeinto = m.idTipoMOvimeinto 



