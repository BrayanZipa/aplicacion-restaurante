@extends('menu')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="text-center">
                    <h1>Pedidos</h1>
                </div><br>
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Ingresar pedido</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-2">
                                <label for="inputReceta" class="form-label">Ingrese la Receta</label>
                                <input type="text" class="form-control" id="inputReceta" placeholder="Nombre">
                            </div>
                            <div class="mb-2">
                                <label for="inputCantidad" class="form-label">Ingrese la cantidad</label>
                                <input type="text" class="form-control" id="inputCantidad" placeholder="Cantidad">
                            </div>
                            <div class="mb-2">
                                <label for="inputFecha" class="form-label">Ingrese la fecha</label>
                                <input type="text" class="form-control" id="inputFecha" placeholder="Fecha">
                            </div>
                            <div class="mb-2">
                                <label for="inputHora" class="form-label">Ingrese la hora</label>
                                <input type="text" class="form-control" id="inputHora" placeholder="Hora">
                            </div>
                            <div class="mt-3 text-center">
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                                <button type="reset" class="btn btn-secondary">Limpiar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
