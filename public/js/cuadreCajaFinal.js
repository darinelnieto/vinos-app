$(document).ready(function(){
    $('.Cuadre').css({'display':'none'});
});
$('.cuadreFinal').on('click', function(){
    $('.fincuadre').on('submit', function(e){
        valores();
        $('#mensaje').css({'display':'block'});
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        $.ajax({
            url:'final/cuadreDeCaja',
            method:'POST',
            data:{
                data:fecha,
                time:hora,
                fifty:fifty,
                oneHundred:oneHundred,
                twoHundred:twoHundred,
                fiveHundred:fiveHundred,
                thousandCoins:thousandCoins,
                thousand:thousand,
                twoThousand:twoThousand,
                fiveThousand:fiveThousand,
                tenThousand:tenThousand,
                twentyThousand:twentyThousand,
                fiftyThousand:fiftyThousand,
                hundredThousand:hundredThousand
            }
        });
        $('.totalCuadreMonedas').html('00');
        $('.totalCuadre').html('00');
        $('.totalBilletes').html('00');
        $('.totalMonedas').html('00');
        $('.TotalCuadreCaja').html('0');
        $('.fincuadre').on('submit');
        $('.fincuadre')[0].reset();
        e.preventDefault();
    });
});

function valores(){
    fecha = $('input[name=data]').val();
    hora = $('input[name=time]').val();
    fifty = $('input[name=fifty]').val();
    oneHundred = $('input[name=oneHundred]').val();
    twoHundred = $('input[name=twoHundred]').val();
    fiveHundred = $('input[name=fiveHundred]').val();
    thousandCoins = $('input[name=thousandCoins]').val();
    thousand = $('input[name=thousand]').val();
    twoThousand = $('input[name=twoThousand]').val();
    fiveThousand = $('input[name=fiveThousand]').val();
    tenThousand = $('input[name=tenThousand]').val();
    twentyThousand = $('input[name=twentyThousand]').val();
    fiftyThousand = $('input[name=fiftyThousand]').val();
    hundredThousand = $('input[name=hundredThousand]').val();
}