@extends('menu')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="text-center">
            <h4>Inventario</h4>
        </div><br>
        <div class="card">
            <div class="card-header text-center">
                <h3>Ingresar producto a inventariar</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="inputNombre" class="form-label">Nombre del producto</label>
                        <input type="text" class="form-control" id="inputNombre" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="inputCodigo" class="form-label">Código del producto</label>
                        <input type="text" class="form-control" id="inputCodigo" placeholder="Código">
                    </div>
                    <div class="mb-3">
                        <label for="inputPrecio" class="form-label">Precio del producto</label>
                        <input type="text" class="form-control" id="inputPrecio" placeholder="Precio">
                    </div>
                    <div class="mb-3">
                        <label for="inputProveedor" class="form-label">Proveedor del producto</label>
                        <input type="text" class="form-control" id="inputProveedor" placeholder="Proveedor">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection