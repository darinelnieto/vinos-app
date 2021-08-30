<button type="button" class="edita" data-toggle="modal" data-target="#modalVer{{$usuario->id}}">
    <i class="far fa-eye"></i>
</button>
<div class="modal" id="modalVer{{$usuario->id}}">
    <div class="modal-dialog modalHistorial">
        <div class="modal-content verHistorial">
            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
                <p><strong>Selecciona que quieres ver del usuario <br> {{$usuario->name}}</strong></p>
            </div>
            <div class="modal-footer">
                <form action="{{route('historia.cuadre.caja')}}" method="get" class="historiaCuadreCaja">
                    <input type="hidden" name="id" value="{{$usuario->id}}">
                    <button type="submit" class="btn btn-dark">Cuadres de caja</button>
                </form>
                <form action="">
                    <input type="hidden" name="id" value="{{$usuario->id}}">
                    <button type="submit" class="btn btn-dark">Ventas</button>
                </form>
            </div>
        </div>
    </div>
</div>