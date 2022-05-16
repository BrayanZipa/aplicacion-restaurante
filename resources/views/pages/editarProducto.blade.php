@extends('menu')

@section('contenido')
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card text-white bg-dark">
                    <div class="card-header text-center">
                        <h4>Actualizar producto</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('actualizarProducto', ['id' => $producto->idProductos]) }}"  method="POST">
                            @csrf @method('PUT')
                            <div class="mb-2">
                                <label for="inputNombre" class="form-label">Actualizar el nombre del producto</label>
                                <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ $producto->nombre }}" placeholder="Nombre">
                            </div>
                            <div class="mb-2">
                                <label for="inputCodigo" class="form-label">Actualizar el código del producto</label>
                                <input type="text" class="form-control" id="inputCodigo" name="codigo" value="{{ $producto->codigo }}" placeholder="Código">
                            </div>
                            <div class="mb-2">
                                <label for="inputPrecio" class="form-label">Actualizar el costo unitario</label>
                                <input type="text" class="form-control" id="inputPrecio" name="costo" value="{{ $producto->costo}}" placeholder="Precio">
                            </div>
                            <div class="mb-2">
                                <label for="inputUnidad" class="form-label">Actualizar la unidad de medidad</label>
                                <input type="text" class="form-control" id="inputUnidad" name="unidad" value="{{ $producto->unidad }}" placeholder="Unidad">
                            </div>
                            <div class="mb-2">
                                <label for="inputProveedor" class="form-label">Actualizar al proveedor del producto</label>
                                <input type="text" class="form-control" id="inputProveedor" name="proveedor" value="{{ $producto->proveedor }}" placeholder="Proveedor">
                            </div>
                            <div class="mt-3 text-center">                        
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <button type="reset" class="btn btn-secondary">Restaurar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection