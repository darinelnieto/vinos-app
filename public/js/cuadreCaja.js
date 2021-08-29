$(document).ready(function(){
    fecha = new Date();

    anio = fecha.getFullYear();
    mes = fecha.getMonth() + 1;
    dia = fecha.getDate();
    hora = fecha.getHours();
    minuto = fecha.getMinutes();

    $('.fechaHeader').html(`${anio}-${mes}-${dia}`);
    $('.horaHeader').html(`${hora}:${minuto}`);
    $('.fecha').val(`${anio}-${mes}-${dia}`);
    $('.hora').val(`${hora}:${minuto}`);
});
$('.unidadCuadre').change(function(){
    mil = $(this).val() * $(this).parent().parent().children().children('input[type=hidden]').val();
     $(this).parent().parent().children('.totalCuadre').html(`${mil}`);
     sumaBilletes();
 });

 function sumaBilletes(){
    var sum = 0;
    tot = $('.totalCuadre');
    for(let i = 0; i < tot.length; ++i){
        totalCuadreBilletes = sum += parseFloat(tot[i].firstChild.data);
    }
    $('.totalBilletes').html(`${totalCuadreBilletes}`);
    totalCuadre();
 }

 $('.unidadCuadreMoneda').change(function(){
    mil = $(this).val() * $(this).parent().parent().children().children('input[type=hidden]').val();
     $(this).parent().parent().children('.totalCuadreMonedas').html(`${mil}`);
     sumaMonedas();
 });

 function sumaMonedas(){
    var sum = 0;
    tot = $('.totalCuadreMonedas');
    for(let i = 0; i < tot.length; ++i){
        totalCuadreMonedas = sum += parseFloat(tot[i].firstChild.data);
    }
    $('.totalMonedas').html(`${totalCuadreMonedas}`);
    totalCuadre();
 }

 function totalCuadre(){
    TotalCuadre = totalCuadreBilletes + totalCuadreMonedas;
    $('.TotalCuadreCaja').html(`${TotalCuadre}`);
 }

//  Enviar cuadre a la base de datos
$('.guardar').on('click', function(){
    $('.cuadreCajaInicial').submit();
});